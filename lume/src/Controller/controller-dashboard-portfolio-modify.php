<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";
require_once __DIR__ . "/../Helpers/helper.php";


if (!isset($_GET['projet']) || empty($_GET['projet']) || !is_numeric($_GET['projet']) || !Portfolio::getOneProject($_GET['projet'])) {
    header('Location: /admin/portfolio');
    exit;
} else {
    $actualProject = Portfolio::getOneProject($_GET['projet']);
    $images = Portfolio::getImgFromProject($_GET['projet']);
    $nbImages = count($images);
}



$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Gestion des erreurs

    // Titre
    if (empty(Safe::input($_POST['title']))) {
        $errors['title'] = "Veuillez ajouter un titre";
    } else if (strlen(Safe::input($_POST['title'])) > 150) {
        $errors['title'] = "Titre trop long, 150 caractères maximum";
    }

    // Tagline
    if (empty(Safe::input($_POST['tagline']))) {
        $errors['tagline'] = "Veuillez ajouter une tagline au projet";
    }

    // Description
    if (empty(Safe::input($_POST['description']))) {
        $errors['description'] = "Veuillez ajouter une description au projet";
    }

    // Date
    if (empty(Safe::input($_POST['date']))) {
        $errors['date'] = "Veuillez ajouter une date au projet";
    }

    // Catégorie
    if (empty($_POST['categorie'])) {
        $errors['categorie'] = "Veuillez ajouter la catégorie au projet";
    }

    // Place
    if (empty(Safe::input($_POST['place']))) {
        $errors['place'] = "Veuillez ajouter une location au projet";
    }

    // Surface
    if (!is_numeric($_POST['surface']) && !empty($_POST['surface'])) {
        $errors['surface'] = "La surface doit être écrit en nombres";
    }

    // Images
    for ($i = 1; $i <= 9; $i++) {
        if (isset($_FILES["image$i"])) {

            if ($i <= 3) {
                if (empty($_FILES["image$i"]['name'])) {
                    $errors["image$i"] = "Veuillez ajouter une image (3 images obligatoire)";
                }
            }

            if ($_FILES["image$i"]['type'] != "image/png" && $_FILES["image$i"]['type'] != "image/jpeg") {
                $errors["image$i"] = "Veuillez ajouter au format JPG ou PNG";
            } else if ($_FILES["image$i"]['error'] !== 0) {
                $errors["image$i"] = "Erreur d'upload";
            }
        }
    }

    if (empty($errors)) {

        $safePost = [
            'title' => Safe::input($_POST['title']),
            'tagline' => Safe::input($_POST['tagline']),
            'description' => Safe::input($_POST['description']),
            'date' => Safe::input($_POST['date']),
            'categorie' => Safe::input(intval($_POST['categorie'])),
            'place' => Safe::input($_POST['place']),
            'surface' => Safe::input($_POST['surface'])
        ];

        Portfolio::updateProject($safePost, $_GET['projet']);

        $project_directory = "../../img/projects/" . $_GET['projet'] . "/";

        for ($i = 1; $i <= 9; $i++) {
            if (!empty($_FILES["$i"]['name'])) {
                // Si une image est déjà indexé à la place où elle est, update
                if (Portfolio::getOneImage($_GET['projet'], $i)) {

                    unlink(Portfolio::getOneImage($_GET['projet'], $i)['img_url']);

                    $newName = uniqid() . "_" . basename($_FILES["$i"]['name']);
                    $target_file = $project_directory . $newName;

                    if (move_uploaded_file($_FILES["$i"]["tmp_name"], $target_file)) {

                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
                            $imageToConvert = imagecreatefromjpeg($target_file);
                        } else if ($imageFileType == "png") {
                            $imageToConvert = imagecreatefrompng($target_file);
                        }

                        $imageName = $project_directory . pathinfo($newName, PATHINFO_FILENAME) . ".webp";
                        imagewebp($imageToConvert, $imageName, 70);
                        if (file_exists($target_file)) {
                            unlink($target_file);
                        }

                        Portfolio::updateImage($imageName, Portfolio::getOneImage($_GET['projet'], $i)['img_id']);
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }


                    // Si aucune image n'est présent à cet index
                } else {

                    $newName = uniqid() . "_" . basename($_FILES["$i"]['name']);
                    $target_file = $project_directory . $newName;

                    if (move_uploaded_file($_FILES["$i"]["tmp_name"], $target_file)) {

                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
                            $imageToConvert = imagecreatefromjpeg($target_file);
                        } else if ($imageFileType == "png") {
                            $imageToConvert = imagecreatefrompng($target_file);
                        }

                        $imageName = $project_directory . pathinfo($newName, PATHINFO_FILENAME) . ".webp";
                        imagewebp($imageToConvert, $imageName, 70);
                        if (file_exists($target_file)) {
                            unlink($target_file);
                        }

                        Portfolio::addImageToProject($imageName, (Portfolio::countImageProject($_GET['projet']) + 1), $_GET['projet']);
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        }

        header('Location: /admin/portfolio');
        exit;
    }
}


// var_dump($_FILES);
// var_dump(Portfolio::countImageProject($_GET['projet']));
// var_dump($actualProject);

require_once __DIR__ . "/../View/view-dashboard-portfolio-modify.php";
