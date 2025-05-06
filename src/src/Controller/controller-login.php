<?php

session_start();

if (isset($_SESSION['admin_id'])) {
    header('Location: controller-home.php');
    exit;
};

require_once "../Model/model-database.php";
require_once "../Model/model-admin.php";

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['login'])) {
        if (empty($_POST['login'])) {
            $errors['login'] = "Rentrez votre pseudo";
        }
    }

    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = "Rentrez votre mot de passe";
        }
    }

    if (!empty($_POST['login']) && !empty($_POST['password'])) {

        if (!Admin::getConnect($_POST['login'], $_POST['password'])) {
            $errors['connexion'] = 'Identifiant ou mot de passe incorrect';
        } else {
            header('Location: /admin');
            exit;
        }
    }
}



require_once "../View/view-dashboard-login.php";
