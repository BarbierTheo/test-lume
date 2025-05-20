<?php

require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";
require_once __DIR__ . "/../Helpers/helper.php";

if (isset($_GET['projet']) && is_numeric($_GET['projet']) && Portfolio::getOneProject($_GET['projet'])) {
    Portfolio::deleteProject($_GET['projet']);
    header('Location: /admin/portfolio');
    exit;
} else {
    header('Location: /admin/portfolio');
    exit;
}