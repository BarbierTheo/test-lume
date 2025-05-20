<?php 
require_once "../Model/model-database.php";
require_once "../Model/model-portfolio.php";
require_once "../Model/model-faq.php";

$projects = Portfolio::getAllProjects();
$faq = Faq::getAllFaq();

require_once "../View/view-home.php";