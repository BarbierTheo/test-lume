<?php

require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-portfolio.php";
require_once __DIR__ . "/../Helpers/helper.php";

if (isset($_GET['image']) && is_numeric($_GET['image']) && Portfolio::getImageById($_GET['image'])) {
    Portfolio::deleteImage($_GET['image']);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    // echo "oui";
    exit;
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    // echo "non";
    exit;
}
