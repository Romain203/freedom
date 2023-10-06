<?php
function showLogin()
{
    global $base_url;

    if ($_POST && $_POST['email'] && $_POST['mdp']) {

        require("model/loginModel.php");
        $utilisateur = login($_POST['email'], $_POST['mdp']);
        if ($utilisateur) {
            header("Location: $base_url");
           echo "vous êtes connecté " . $_POST['email']; 
        } else {
            echo "vous n'êtes pas connecté "; 
        }
        
       }
    require("template/login.php");  
}

function showEnregistrement()
{       
    if ($_POST && $_POST['email'] && $_POST['mdp']) {
       
    
        require("model/registerModel.php");
        $utilisateur = enregistrement($_POST['email'], $_POST['mdp']);
        if ($utilisateur) {
           echo "salut aou!: " . $_POST['email']; 
        } else {
            echo "erreur "; 
        }
        
    }
    require("Template/Enregistrement.php");
}