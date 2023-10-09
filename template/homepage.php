<?php
$titre="accueil";?>
<?php ob_start(); ?>
<h1>Accueil</h1>
<body>
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
    
</body>   
<?php $content = ob_get_clean();     
require "Layout.php";
?> 