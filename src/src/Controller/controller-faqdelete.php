<?php

require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";
require_once "../Helpers/helper.php";

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
