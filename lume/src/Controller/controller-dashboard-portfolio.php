<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once __DIR__ . "/../Helpers/helper.php";
require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";

$projects = Portfolio::getAllProjects();
$countProjects = Portfolio::countAllProjects();
$countImages = Portfolio::countAllImages();

// var_dump($countImages);

require_once __DIR__ . "/../View/view-dashboard-portfolio.php" ?>