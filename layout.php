<?php global $base_url; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<nav class="row">
        <div class="col-6">
            <img src="./image/Frame 1.png" width="200px" height="150px" alt="logo">
        </div>
        <div id="menu" class=" col-6" >
            <ul class="d-flex justify-content-evenly">
                <li><a href="<?= $base_url ?>">Accueil</a></li>
                <?php if ($GLOBALS['isConnected']) { ?>
                <li><a href="<?= $base_url ?>?page=statut">Statut</a></li>    
                <li><a href="<?= $base_url ?>?page=logout">Logout</a></li>
                <?php } else { ?>
                <li><a href="<?= $base_url ?>?page=enregistrement">Enregistre</a></li>
                <li><a href="<?= $base_url ?>?page=login">Login</a></li>
                <?php } ?>
            </ul>
        </div>
       
       
    </nav>
    <div class="container"><?= $content ?>
    </div>
    
</body>
</html>