<?php
$titre = "enregistrement";
ob_start(); 
?>
<h1>Enregistrement</h1>
<div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <div class="d-flex justify-content-center ">
      </div>
    <form method="POST">
      <div class="container">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nom:</label>
        <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
        </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Pénom:</label>
        <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" placeholder="Prenom">
        </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Age:</label>
        <input type="date" name="age" class="form-control" id="exampleFormControlInput1" placeholder="age">
        </div>
    <div class="m-3">
          <label for="exampleInputEmail1" class="form-label">Email :</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
    </div>
        <div class="m-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe :</label>
          <input type="password" name="mdp" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d-flex justify-content-center ">
         <button type="submit" value="Enregistrement" class="m-3 btn btn-warning ">Enregistrer</button>   
        </div>
      </div>
      </form>
    </div>

<?php $content = ob_get_clean();
require "Layout.php";
?>