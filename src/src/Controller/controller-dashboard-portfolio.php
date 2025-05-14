<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Helpers/helper.php";
require_once "../Model/model-database.php";
require_once "../Model/model-portfolio.php";

$projects = Portfolio::getAllProjects();
$countProjects = Portfolio::countAllProjects();
$countImages = Portfolio::countAllImages();

// var_dump($countImages);

require_once "../View/view-dashboard-portfolio.php" ?>