<?php
session_start();
$GLOBALS['isConnected'] =$_SESSION && $_SESSION["utilisateur"];
$base_url = "http://localhost/freedom/";
require("model/db.php");
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'login':
            require("controller/authController.php");
            showLogin();
            break;
        case 'enregistrement':
            require("controller/authController.php");
            showEnregistrement();
            break;
        case 'logout':
            session_destroy();
            header("Location: $base_url?page=Login");
            break;
        case 'statut':
            require("template/statut.php");
            break;
        default:
            require("template/Homepage.php");
            break;
    }
} else {
    require("template/Homepage.php");
}