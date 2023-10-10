<?php
function createStatut( $contenu, $id_utilisateur)
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO statut (id_utilisateur, contenu) VALUES (:u, :c)");
    $query->execute([

        "u" => $id_utilisateur,
        "c" => $contenu,
        
    ]);
    return true;
}

function getStatuts()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM statut");
    $query->execute();
    $statuts = $query->fetchAll();
    return $statuts;   
}

function getStatut($id_statut)
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM statut where id_statut = :i");
    $query->execute([
        "i" => $id_statut
    ]);
    $statut = $query->fetchAll();
    return $statut;   
}