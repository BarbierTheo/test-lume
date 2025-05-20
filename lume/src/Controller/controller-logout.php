<?php
session_start();

unset($_SESSION);
session_destroy();

header('Location: /home');




require_once __DIR__ . "/../View/view-deconnexion.php";