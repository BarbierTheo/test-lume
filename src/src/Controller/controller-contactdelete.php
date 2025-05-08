<?php

require_once "../Model/model-database.php";
require_once "../Model/model-contact.php";
require_once "../Helpers/helper.php";

if (isset($_GET['contact']) && is_numeric($_GET['contact']) && Contact::getOneMessage($_GET['contact'])) {
    Contact::deleteMessage($_GET['contact']);
    header('Location: /admin/contact');
    // echo "oui";
    exit;
} else {
    header('Location: /admin/contact');
    // echo "non";
    exit;
}
