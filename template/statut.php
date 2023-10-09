<?php
$titre="statut";?>
<?php ob_start(); ?>
<h1>Statut</h1>
<main>
<section>
<form method="POST">
    <div class="container">
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Commentaire:</label>
  <input type="text" name="contenu" class="form-control" id="exampleFormControlInput1" placeholder="#">
</div>
</div>
<button type="submit" class="btn btn-primary" value="create statut">ENVOYER</button>
</div>
</form>
    </section>
</main>
<?php $content = ob_get_clean();     
require "Layout.php";
?> 