<?php
session_start();
$GLOBALS['isConnected'] =$_SESSION && $_SESSION["utilisateur"];
$base_url = "http://localhost/freedom/";
require("model/db.php");
if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'show':
            if(isset($_GET['id_statut'])) {
            require("controller/statutController.php");
               showStatut($_GET['id_statut']);
            } else {
                header("Location: $base_url?page=Login");   
            }
               break;
        case 'login':
            require("controller/authController.php");
            showLogin();
            break;
        case 'enregistrement':
            require("controller/authController.php");
            showEnregistrement();
            break;
        case 'statut':
            require("controller/statutController.php");
            showCreatestatut();
                
            break;
        case 'logout':
            session_destroy();
            header("Location: $base_url?page=Login");
            break;
        case 'statut':
            require("template/statut.php");
            break;
        default:
            require("controller/statutController.php");
            showAllstatut();
            break;
    }
} 
else {
    require("controller/statutController.php");
    showAllstatut();
}