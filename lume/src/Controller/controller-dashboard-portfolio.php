<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once __DIR__ . "/../Helpers/helper.php";
require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";

$countProjects = Portfolio::countAllProjects();
$countImages = Portfolio::countAllImages();

if (!empty($_GET['search'])) {
    $projects = Portfolio::searchProject($_GET['search']);
} else {
    $projects = Portfolio::getAllProjects();
}



// var_dump($countImages);

require_once __DIR__ . "/../View/view-dashboard-portfolio.php" ?>