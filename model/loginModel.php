<?php
function Login($email, $mdp){
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM utilisateur WHERE email = :e");
    $query->execute([
        "e" => $email,

    ]);
    $utilisateur = $query->fetch();
    if ($utilisateur && password_verify($mdp, $utilisateur["mdp"])) {
        $_SESSION["utilisateur"] = $utilisateur;
        return true;
    }
    return false;
}