<?php
function showCreatestatut()
{
    global $base_url;

    if ($GLOBALS['isConnected']) {
        if ($_POST && $_POST['contenu']) {
           require("model/statutModel.php");
           $statut = createStatut($_POST['contenu'], $_SESSION['id_utilisateur']['id_statut']);
           if ($statut) {
               echo "votre post a bien été créé";
           } else {    
               echo "probleme";
           }
       }
        require("template/statut.php");   
       } else {
           header("Location: $base_url?page=Login");  
       }
}

// function showAllpost()
// {
//     require("models/postModel.php");
//     $posts = getPosts();
//     require("Template/Homepage.php");
// }

// function showPost($id)
// {
//     require("models/postModel.php");
//     $post = getPost($id);
//     global $base_url;
//     if($_POST && $_POST['content']) {
//         require("models/commentModel.php");
//         createComment($_POST['content'], $_SESSION['utilisateur']['id'], $_GET['id']);
//         header("Location: $base_url?page=show&id=" . $_GET['id']);
//         echo "commentaire créé"; 
//     }
//     if (sizeof($post)) {
//         $post = $post[0];
//     require("Template/showPost.php");

//     } else {
        
//         echo "ce post n'existe pas";
//     }
// }

// function submitComment()
// {
//     global $base_url;
//     if($_POST && $_POST['content']) {
//         require("models/commentModel.php");
//         createComment($_POST['content'], $_SESSION['utilisateur']['id'], $_GET['id']);
//         header("Location: $base_url?page=show&id=" . $_GET['id']);
//         echo "commentaire créé"; 
//     }
// }