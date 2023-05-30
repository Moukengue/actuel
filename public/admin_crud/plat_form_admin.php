<?php
include('../header.php');

include "../DAO.php";
$plat = get_plat($_GET['id']);
if ($plat == null) {
  header("Location: plats_admin.php");
}
?>


<body>
  <?php include_once('menu_admin.php'); ?>

  <form action="script/script_plat_modif.php" method="post">
    <div class="mb-3 mt-3">
      <label for="libelle">Libelle:</label>
      <input type="text" class="form-control" id="libelle" placeholder="Entrer libelle" name="libelle" value="<?= $plat->libelle ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="description">Description:</label>
      <input type="text" class="form-control" id="description" placeholder="Entrer description" name="description" value="<?= $plat->description ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="prix">Prix:</label>
      <input type="text" class="form-control" id="prix" placeholder="Entrer le prix" name="prix" value="<?= $plat->prix ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="active">Active:</label>
      <input type="text" class="form-control" id="active" placeholder="Enter active" name="active" value="<?= $plat->active ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="id_categorie">Id_Categorie:</label>
      <input type="text" class="form-control" id="id_categorie" placeholder="Enter Id_categorie" name="id_categorie" value="<?= $plat->id_categorie ?>">
    </div>
    <div class="mb-3">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" value="<?= $plat->image ?>">
    </div>
    <div class="mb-3 col-2 mx-3" >
      <img src="../images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive" style="width: 18rem;">
    </div>


    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary"  type="submit">Modifier</button>
      <a href="plats_admin.php" class="btn btn-primary">Retour</a>
       </div>
  </form>

  <?php
  include_once('footer_admin.php') ?>