<?php
include "DAO.php";

include('header.php');
// $cat = afficherCategories();

?>


<body>

  <nav class="navbar navbar-expand-lg " id="img_color">
    <div class="container-fluid lili">
      <a class="navbar-brand" href="#">
        <img src="images_the_district/the_district_brand/logo_transparent_sm.png" height="100px" alt="logo" />

      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="    collapse navbar-collapse" id="navbarNav">

        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link fs-3" href="">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="categorie.php">Categorie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="plat.php">Plats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3" href="contact.php">Contact</a>
          </li>

          <div class="nav-item"><a  class="nav-link fs-3" href="connexion.php">
              <button class="btn mx-2 " id="dispayform">Se connecter</button>
            </a></div>


        </ul>
      </div>
    </div>
  </nav>

  <div class="mt-3 mb-3 p-5">
    <div class="row">
      <div class="col-md-6 col-sm-12 mx-auto p-3" style="background-color:purple">
        <form method="post" action="resultats_recherche.php" class="d-flex" role="search">
          <input class="form-control me-2" type="search" name="recherche" placeholder="Recherche" aria-label="Search" required />
        </form>
      </div>
    </div>

  </div>

  <!---Les categories-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    $categories = afficherCategoriesPopulaire();
    //L'instruction foreach permet de parcourir un tableau et d'extraire chaque élément.foreach est une boucle
    foreach ($categories as $categorie) : ?>
      <a href="categorie_detail.php?categorie_id=<?php echo $categorie->id; ?>" class="text-decoration-none">
        <div class="col">
          <div class="card">
            <img src="images_the_district/category_actuel/<?= $categorie->image ?>" class="" alt="..." />
            <div class="card-body" style="width: 500px">
              <h5 class="card-title"><?= $categorie->libelle ?></h5>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <!--fin categorie-->
  <!--les plats accueil-->

  <div class="card-group ">
    <?php
    $plats = lesPlatsLesPlusVendus();
    foreach ($plats as $plat) : ?>
      <a href="plat_detail.php?plat_id=<?php echo $plat->id; ?>" class="text-decoration-none">
        <div class="card m-3">
          <img src="images_the_district/fooda_actuel/<?= $plat->image; ?> " class="img-responsive mw-100" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title"><?= $plat->libelle ?></h5>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
  <!--fin plats-->



  <?php
  include_once('footer.php') ?>
