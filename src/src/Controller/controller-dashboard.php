<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";
require_once "../Helpers/helper.php";

$resultFAQ = Faq::countAllFaq();




require_once "../View/view-dashboard.php";
