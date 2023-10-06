<?php
function Enregistrement($email, $mdp){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO utilisateur (email, mdp) VALUES (:e, :m)");
    $query->execute([
        "e" => $email, 
        "m" => password_hash($mdp, PASSWORD_DEFAULT)
    ]);
    return true;
}