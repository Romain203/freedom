
    <!-- <section>
    <div class="card" style="width: 100%;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Commenter</span>
  <input type="text" class="form-control" placeholder="Commentaire" aria-label="Username" aria-describedby="basic-addon1">
  
</div>
  </div>
  <div class="container mb-4">
    <i class='bx bxs-like bx-flip-horizontal bx-lg'></i>
    <i class='bx bxs-like bx-flip-vertical bx-lg'></i>
</div>
  
</div>
    </section> -->
    <?php 
$titre = "Accueil"; 
global $base_url;
?>
<?php ob_start(); ?>
<h1>Accueil</h1>

<div class="container ">
  <div class="row gy-4 gx-4">
    <?php for ($i=0; $i < sizeof($statuts) ; $i++) { ?>
    <div class="col-sm-6 ">
    <div class="card" style="width: 18rem;">
  <img src="image/grilled-beef-burger-rustic-ciabatta-bun-generated-by-ai" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SB</h5>
    <!-- <h6><?= $statuts[$i]['titre'] ?></h6> -->
    <p class="card-text"><?= $statuts[$i]['contenu'] ?></p>
    <a href="<?= $base_url ?>?page=show&id_statut=<?= $statuts[$i]['id_statut'] ?>" class="btn btn-primary">Lire la suite</a>
  </div>
</div>
    </div>


<?php } $content = ob_get_clean();
require "Layout.php";
?>   
