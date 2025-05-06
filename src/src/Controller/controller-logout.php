<?php
session_start();

unset($_SESSION);
session_destroy();

header('Location: /home');




include_once '../View/view-deconnexion.php';