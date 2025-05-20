<?php 
require_once __DIR__ . '/../Model/model-database.php';
require_once __DIR__ . "/../Model/model-portfolio.php";
require_once __DIR__ . "/../Model/model-faq.php";

$projects = Portfolio::getAllProjects();
$faq = Faq::getAllFaq();

require_once __DIR__ . "/../View/view-home.php";