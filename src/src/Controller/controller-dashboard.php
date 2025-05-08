<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Model/model-database.php";
require_once "../Model/model-faq.php";
require_once "../Model/model-contact.php";
require_once "../Helpers/helper.php";

$resultFAQ = Faq::countAllFaq();
$resultMessage = Contact::countAllMessage();
$lastMessage = Contact::getAllMessages();

$statusMessage = Contact::countMessageByStatus();

$unread = 0;
$pending = 0;
$read = 0;

foreach ($statusMessage as $value) {

    switch ($value['status']) {
        case 'unread':
            $unread = $value['count'];
            break;

        case 'pending':
            $pending = $value['count'];
            break;

        case 'read':
            $read = $value['count'];
            break;
    }
}

// echo $unread, $pending, $read;

// var_dump($statusMessage);

require_once "../View/view-dashboard.php";
