<?php 
require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";

$projects = Portfolio::getAllProjects();
// var_dump($projects);







require_once __DIR__ . "/../View/view-gallery.php" ?>