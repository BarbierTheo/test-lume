<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}


require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";

$faq = Faq::getAllFaq();
$resultFAQ = Faq::countAllFaq();

require_once "../View/view-dashboard-faq.php";
