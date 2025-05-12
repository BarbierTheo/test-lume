<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Helpers/helper.php";
require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";

if (!empty($_GET['search'])) {
    $faq = Faq::searchFaq($_GET['search']);
} else {
    $faq = Faq::getAllFaq();
}

$resultFAQ = Faq::countAllFaq();





require_once "../View/view-dashboard-faq.php";
