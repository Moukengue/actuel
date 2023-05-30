<?php
include "DAO.php";
include('header.php');
$categories = lesCategoriesActive();

// $cat = afficherCategories();

?>
  <body>
  <?php include_once('menu.php'); ?>
   
    <!---Les categories-->
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach ($categories as $categorie) :?>
      <a href="categorie_detail.php?categorie_id=<?php echo $categorie -> id; ?>" class="text-decoration-none">
      <div class="col">
        <div class="card">
          <img
            src="images_the_district/category_actuel/<?=$categorie -> image?>"class="img-responsive mw-100"
            class="salade_cat-top"
            alt="..."
          />
          <div class="card-body" style="width: 500px">
            <h5 class="card-title"><?=$categorie -> libelle?></h5>
          </div>
        </div>
      </div>
    </a>
      <?php endforeach; ?>
    </div>

    <!--fin categorie-->
    <?php include_once('footer.php') ?>
    

