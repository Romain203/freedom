<?php
$titre = "login";
ob_start(); 
?>  <h1>Login</h1>
      <div class="d-flex flex-column justify-content-center align-items-center mt-3">
      <div class="d-flex justify-content-center ">
        <img src="./image/Frame 1.png" alt="logo">
      </div>
    <form method="POST">
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
         <button type="submit" value="Login" class="m-3 btn btn-warning ">Connexion</button>   
        </div>
      </form>
    </div>
<?php 
$content = ob_get_clean();
require "Layout.php";
?>