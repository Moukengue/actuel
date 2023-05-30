<?php
include('header.php');
include "DAO.php";
$plats = affichePlat();

// $cat = afficherplats();

?>


  <body>
  <?php include_once('menu.php'); ?>
  
    <!---Les plats-->
   
    <div class="row">
    <?php foreach ($plats as $plat):?>
      <div class="col">
      <a href="plat_detail.php?plat_id=<?php echo $plat->id; ?>" class="text-decoration-none">
        <div class="card">
          <img
          src= "images_the_district/fooda_actuel/<?=$plat -> image?>"class="img-responsive mw-100"
            class="salade_cat-top"
            alt="..."
          />
          <div class="card-body" style="width: 500px">
            <h4 class="card-title"><?=$plat -> libelle?></h4>
            <h5 class=""><?=$plat -> description?></h5>
            <h6><?=$plat -> prix?>€</h6>
            
            <button type="submit" class="btn btn-outline-primary">Commande</button>
          </div>
        </div>
      </a>
    </div>
      <?php endforeach; ?>
  </div>

    <!--fin plats-->
    <?php 
include_once('footer.php') ?>
    

