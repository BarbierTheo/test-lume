<?php
require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Helpers/helper.php";
require_once __DIR__ . "/../Model/model-faq.php";

if (!empty($_GET['search'])) {
    $faq = Faq::searchFaq(Safe::input($_GET['search']));
} else {
    $faq = Faq::getAllFaq();
}


require_once __DIR__ . "/../View/view-faq.php";
