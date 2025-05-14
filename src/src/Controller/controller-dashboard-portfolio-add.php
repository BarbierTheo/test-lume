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

    // if (empty($_FILES['image1']['name'])) {
    //     $errors['image1'] = "Veuillez ajouter une image (3 images obligatoire)";
    // } else if ($_FILES['image1']['type'] != "image/png" && $_FILES['image1']['type'] != "image/jpeg") {
    //     $errors['image1'] = "Veuillez ajouter au format JPG ou PNG";
    // } else if ($_FILES['image1']['error'] !== 0) {
    //     $errors['image1'] = "Erreur d'upload";
    // }

    // if (empty($_FILES['image2']['name'])) {
    //     $errors['image2'] = "Veuillez ajouter une image (3 images obligatoire)";
    // } else if ($_FILES['image2']['type'] != "image/png" && $_FILES['image2']['type'] != "image/jpeg") {
    //     $errors['image2'] = "Veuillez ajouter au format JPG ou PNG";
    // } else if ($_FILES['image2']['error'] !== 0) {
    //     $errors['image2'] = "Erreur d'upload";
    // }

    // if (empty($_FILES['image3']['name'])) {
    //     $errors['image3'] = "Veuillez ajouter une image (3 images obligatoire)";
    // } else if ($_FILES['image3']['type'] != "image/png" && $_FILES['image3']['type'] != "image/jpeg") {
    //     $errors['image3'] = "Veuillez ajouter au format JPG ou PNG";
    // } else if ($_FILES['image3']['error'] !== 0) {
    //     $errors['image3'] = "Erreur d'upload";
    // }

    // if (isset($_FILES['image4'])) {
    //     if ($_FILES['image4']['type'] != "image/png" && $_FILES['image4']['type'] != "image/jpeg") {
    //         $errors['image4'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image4']['error'] !== 0) {
    //     $errors['image4'] = "Erreur d'upload";
    // }
    // } 

    // if (isset($_FILES['image5'])) {
    //     if ($_FILES['image5']['type'] != "image/png" && $_FILES['image5']['type'] != "image/jpeg") {
    //         $errors['image5'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image5']['error'] !== 0) {
    //     $errors['image5'] = "Erreur d'upload";
    // }
    // } 

    // if (isset($_FILES['image6'])) {
    //     if ($_FILES['image6']['type'] != "image/png" && $_FILES['image6']['type'] != "image/jpeg") {
    //         $errors['image6'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image6']['error'] !== 0) {
    //     $errors['image6'] = "Erreur d'upload";
    // }
    // } 

    // if (isset($_FILES['image7'])) {
    //     if ($_FILES['image7']['type'] != "image/png" && $_FILES['image7']['type'] != "image/jpeg") {
    //         $errors['image7'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image7']['error'] !== 0) {
    //     $errors['image7'] = "Erreur d'upload";
    // }
    // }

    // if (isset($_FILES['image8'])) {
    //     if ($_FILES['image8']['type'] != "image/png" && $_FILES['image8']['type'] != "image/jpeg") {
    //         $errors['image8'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image8']['error'] !== 0) {
    //     $errors['image8'] = "Erreur d'upload";
    // }
    // }

    // if (isset($_FILES['image9'])) {
    //     if ($_FILES['image9']['type'] != "image/png" && $_FILES['image9']['type'] != "image/jpeg") {
    //         $errors['image9'] = "Veuillez ajouter au format JPG ou PNG";
    //     } else if ($_FILES['image9']['error'] !== 0) {
    //     $errors['image9'] = "Erreur d'upload";
    // }
    // }


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

        var_dump(Portfolio::addProject($safePost));

        
        // $images = [];

        // $project_directory = "/img/projects/$id";
        // mkdir($project_directory);

        // foreach ($_FILES as $value) {
        //     if (!empty($value['name'])) {
        //         array_push($images, $value);
        //     }

        // }



        // var_dump($safePost);
        // header('Location: /admin/faq');
        // exit;
    }
}

// var_dump($images);
var_dump($_POST);
var_dump($errors);
// var_dump($_FILES);

require_once "../View/view-dashboard-portfolio-add.php";
