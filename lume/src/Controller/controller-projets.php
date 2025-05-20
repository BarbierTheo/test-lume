<?php
require_once __DIR__ . '/../Model/model-database.php';
require_once __DIR__ . '/../Model/model-portfolio.php';

if (isset($_GET['id']) && !empty($_GET['id'] && is_numeric($_GET['id']))) {
    $project = Portfolio::getOneProject($_GET['id']);
    if (empty($project)) {
        header('location: /portfolio');
        exit;
    }
    $images = Portfolio::getImgFromProject($_GET['id']);


} else {
    header('location: /portfolio');
    exit;
}

// var_dump($project);




require_once __DIR__ . "/../View/view-projects.php";
