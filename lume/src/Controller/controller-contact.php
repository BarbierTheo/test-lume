<?php

require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Helpers/helper.php";
require_once __DIR__ . "/../Model/model-contact.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (empty(Safe::input($_POST['surname']))) {
        $errors['surname'] = "Veuillez saisir votre nom";
    } else if (strlen(Safe::input($_POST['surname'])) < 2 || strlen(Safe::input($_POST['surname'])) > 50) {
        $errors['surname'] = "Le nom doit contenir entre 2 et 50 caractères";
    } else if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ\s\'-]+$/u', $_POST['surname'])) {
        $errors['surname'] = "Le nom ne doit contenir que des lettres, espaces ou tirets";
    }

    if (empty(Safe::input($_POST['firstName']))) {
        $errors['firstName'] = "Veuillez saisir votre prénom";
    } else if (strlen(Safe::input($_POST['firstName'])) < 2 || strlen(Safe::input($_POST['firstName'])) > 50) {
        $errors['firstName'] = "Le prénom doit contenir entre 2 et 50 caractères";
    } else if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ\s\'-]+$/u', $_POST['firstName'])) {
        $errors['firstName'] = "Le prénom ne doit contenir que des lettres, espaces ou tirets";
    }

    if (empty(Safe::input($_POST['email']))) {
        $errors['email'] = "Veuillez saisir votre adresse e-mail";
    } else if (!filter_var(Safe::input($_POST['email']), FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre adresse email n'est pas au bon format : example@mail.com";
    } else if (strlen(Safe::input($_POST['email'])) > 70) {
        $errors['email'] = "L'adresse mail ne peut pas contenir plus de 70 caractères";
    }

    if (empty(Safe::input($_POST['tel']))) {
        $errors['tel'] = "Veuillez saisir votre numéro de téléphone";
    } else if (!is_numeric(Safe::input($_POST['tel']))) {
        $errors['tel'] = "Veuillez saisir uniquement des numéros";
    } else if (strlen(Safe::input($_POST['tel'])) != 10) {
        $errors['tel'] = "Le numéro de téléphone doit comporter 10 chiffres";
    }

    if (empty(Safe::input($_POST['subject']))) {
        $errors['subject'] = "Veuillez saisir l'objet du contact";
    } else if (strlen(Safe::input($_POST['subject'])) < 5 || strlen(Safe::input($_POST['subject'])) > 100) {
        $errors['subject'] = "L'objet doit contenir entre 5 et 100 caractères";
    } else if (!preg_match('/^[A-Za-zÀ-ÖØ-öø-ÿ\s\'-]+$/u', $_POST['subject'])) {
        $errors['subject'] = "L'objet ne doit contenir que des lettres, espaces ou tirets";
    }

    if (empty(Safe::input($_POST['message']))) {
        $errors['message'] = "Veuillez saisir le contenu du message";
    } else if (strlen(Safe::input($_POST['message'])) < 10 || strlen(Safe::input($_POST['message'])) > 2000) {
        $errors['message'] = "Le message doit contenir entre 10 et 2000 caractères";
    } else if (!preg_match('/^[\p{L}\p{N}\p{P}\p{S}\p{Zs}\r\n\t]+$/u', $_POST['message'])) {
        $errors['message'] = "Le message contient des caractères non autorisés.";
    }

    if (empty($errors)) {
        Contact::sendMessage($_POST['surname'], $_POST['firstName'], $_POST['email'], $_POST['tel'], $_POST['subject'], $_POST['message']);
        header("location: /contact");
        exit;
    }
}

require_once __DIR__ . "/../View/view-contact.php";
