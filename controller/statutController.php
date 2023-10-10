<?php
function showCreatestatut()
{
    global $base_url;

    if ($GLOBALS['isConnected']) {
        if ($_POST && $_POST['contenu']) {
           require("model/statutModel.php");
        //    var_dump($_SESSION["utilisateur"]);
           $statut = createStatut($_POST['contenu'], $_SESSION['utilisateur']['id_utilisateur']);
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

function showAllstatut()
{
    require("model/statutModel.php");
    $statuts = getStatuts();
    require("Template/Homepage.php");
}

function showStatut($id_statut)
{
    require("model/statutModel.php");
    $statut = getStatut($id_statut);
    global $base_url;
    if($_POST && $_POST['content']) {
        require("model/commentModel.php");
        createComment($_POST['content'], $_SESSION['utilisateur']['id_utilisateur'], $_GET['id_utilisateur']);
        header("Location: $base_url?page=show&id=" . $_GET['id_utilisateur']);
        echo "commentaire créé"; 
    }
    if (sizeof($statut)) {
        $statut = $statut[0];
    require("Template/showStatut.php");

    } else {
        
        echo "ce post n'existe pas";
    }
}

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