<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";
require_once "../Helpers/helper.php";


if (!isset($_GET['faq']) || empty($_GET['faq']) || !is_numeric($_GET['faq']) || !Faq::getOneFaq($_GET['faq'])) {
    header('Location: /admin/faq');
    exit;
} else {

    $actualFaq = Faq::getOneFaq($_GET['faq']);
    $errors = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['title'])) {
            $errors['title'] = "Veuillez ajouter un titre";
        } else if (strlen($_POST['title']) > 150) {
            $errors['title'] = "Titre trop long, 150 caractères maximum";
        }

        if (empty($_POST['article'])) {
            $errors['article'] = "Veuillez ajouter un contenu à l'article";
        }

        if (empty($errors)) {
            Faq::modifyFaq($_POST['title'], $_POST['article'], intval($_GET['faq']));
            header('Location: /admin/faq');
            exit;
        }
    }
}

require_once "../View/view-dashboard-faq-modify.php";
