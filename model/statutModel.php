<?php
function createStatut($id_utilisateur, $id_statut, $contenu)
{
    global $pdo;
    $query = $pdo->prepare("INSERT INTO statut (id_statut, id_utilisateur, contenu) VALUES (:s, :u, :c)");
    $query->execute([

        "s" => $id_statut,
        "u" => $id_utilisateur,
        "c" => $contenu,
        
    ]);
    return true;
}

// function getPosts()
// {
//     global $pdo;
//     $query = $pdo->prepare("SELECT * FROM post");
//     $query->execute();
//     $posts = $query->fetchAll();
//     return $posts;   
// }

// function getPost($id_post)
// {
//     global $pdo;
//     $query = $pdo->prepare("SELECT * FROM post where id_post = :i");
//     $query->execute([
//         "i" => $id_post
//     ]);
//     $post = $query->fetchAll();
//     return $post;   
// }