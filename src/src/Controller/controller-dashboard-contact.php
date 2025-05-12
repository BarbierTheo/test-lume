<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../Helpers/helper.php";
require_once "../Model/model-database.php";
require_once "../Model/model-contact.php";

if (!empty($_GET['search'])) {
    $messages = Contact::searchMessage($_GET['search']);
} else {
    $messages = Contact::getAllMessages();
}

// var_dump($messages);

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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['id'] && !empty($_POST['status']))) {

        Contact::changeMessageStatus(safe::input($_POST['id']), safe::input($_POST['status']));
        header('Location: /admin/contact');
        exit;
    }
}

// var_dump($_POST);

require_once "../View/view-dashboard-contact.php";
