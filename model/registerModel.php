<?php
function Enregistrement($nom, $email, $prenom, $age, $mdp){
    global $pdo;
    $query = $pdo->prepare("INSERT INTO utilisateur (nom, email, prenom, age, mdp) VALUES (:n, :e, :p, :a, :m)");
    $query->execute([
        "n" => $nom,
        "e" => $email,
        "p" => $prenom,
        "a" => $age,
        "m" => password_hash($mdp, PASSWORD_DEFAULT)
    ]);
    return true;
}