<?php 
require_once "../Model/model-database.php";
require_once "../Model/model-portfolio.php";

$projects = Portfolio::getAllProjects();
// var_dump($projects);







require_once "../View/view-gallery.php" ?>