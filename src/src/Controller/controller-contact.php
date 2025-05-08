<?php

require_once "../Model/model-database.php";
require_once "../Helpers/helper.php";
require_once "../Model/model-faq.php";
require_once "../Model/model-contact.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty(Safe::input($_POST['surname']))) {
        $errors['surname'] = "Veuillez saisir votre prénom";
    }

    if (empty(Safe::input($_POST['firstName']))) {
        $errors['firstName'] = "Veuillez saisir votre nom";
    }

    if (empty(Safe::input($_POST['email']))) {
        $errors['email'] = "Veuillez saisir votre adresse e-mail";
    } else if (!filter_var(Safe::input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre adresse email n'est pas au bon format : example@mail.com";
    }

    if (empty(Safe::input($_POST['tel']))) {
        $errors['tel'] = "Veuillez saisir votre numéro de téléphone";
    }

    if (empty(Safe::input($_POST['subject']))) {
        $errors['subject'] = "Veuillez saisir l'objet du contact";
    }

    if (empty(Safe::input($_POST['message']))) {
        $errors['message'] = "Veuillez saisir le contenu du message";
    }

    if(empty($errors)) {

        Contact::sendMessage($_POST['surname'], $_POST['firstName'], $_POST['email'], $_POST['tel'], $_POST['subject'], $_POST['message']);

    }
}

require_once "../View/view-contact.php";
