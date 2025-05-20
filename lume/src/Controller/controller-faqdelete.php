<?php

require_once __DIR__ . "/../Model/model-database.php";
require_once __DIR__ . "/../Model/model-faq.php";
require_once __DIR__ . "/../Helpers/helper.php";

if (isset($_GET['faq']) && is_numeric($_GET['faq']) && Faq::getOneFaq($_GET['faq'])) {
    Faq::deleteFaq($_GET['faq']);
    header('Location: /admin/faq');
    exit;
    // echo "oui";
} else {
    header('Location: /admin/faq');
    exit;
    // echo "non";
}
