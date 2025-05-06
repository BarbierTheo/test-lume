<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header('Location: /login');
    exit;
}

require_once "../View/view-dashboard-portfolio-add.php" ?>