<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Model/model-database.php";
require_once "../Model/model-portfolio.php";
require_once "../Helpers/helper.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty(Safe::input($_POST['title']))) {
        $errors['title'] = "Veuillez ajouter un titre";
    } else if (strlen(Safe::input($_POST['title'])) > 150) {
        $errors['title'] = "Titre trop long, 150 caractères maximum";
    }

    if (empty(Safe::input($_POST['tagline']))) {
        $errors['tagline'] = "Veuillez ajouter une tagline au projet";
    }

    if (empty(Safe::input($_POST['description']))) {
        $errors['description'] = "Veuillez ajouter une description au projet";
    }

    if (empty(Safe::input($_POST['date']))) {
        $errors['date'] = "Veuillez ajouter une date au projet";
    }

    if (empty($_POST['categorie'])) {
        $errors['categorie'] = "Veuillez ajouter la catégorie au projet";
    }

    if (empty(Safe::input($_POST['place']))) {
        $errors['place'] = "Veuillez ajouter une location au projet";
    }


    if (!is_numeric($_POST['surface']) && !empty($_POST['surface'])) {
        $errors['surface'] = "La surface doit être écrit en nombres";
    }


    for ($i = 1; $i <= 9; $i++) {
        if (isset($_FILES["$i"])) {

            if ($i <= 3) {
                if (empty($_FILES["$i"]['name'])) {
                    $errors["$i"] = "Veuillez ajouter une image (3 images obligatoire)";
                }
            }

            if ($_FILES["$i"]['type'] != "image/png" && $_FILES["$i"]['type'] != "image/jpeg") {
                $errors["image$i"] = "Veuillez ajouter au format JPG ou PNG";
            } else if ($_FILES["$i"]['error'] !== 0) {
                $errors["$imagei"] = "Erreur d'upload";
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

        $LastIdProject = Portfolio::addProject($safePost);

        $images = [];

        $project_directory = "../../img/projects/$LastIdProject/";
        mkdir($project_directory, 0700);

        $i = 0;

        foreach ($_FILES as $value) {
            $i++;
            if (!empty($value['name'])) {

                $newName = uniqid() . "_" . basename($value['name']);
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

                    array_push($images, $imageName);
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }

        Portfolio::addImagesToProject($images, $LastIdProject);


        header('Location: /admin/portfolio');
        exit;
    }
}

// var_dump($images);
// var_dump($_POST);
// var_dump($errors);
// var_dump($_FILES);

require_once "../View/view-dashboard-portfolio-add.php";
