<?php
include('../../header.php');
include "../DAO.php";
$categorie = get_categorie($_GET['id']);
if ($categorie == null) {
    header("Location: categorie_admin.php");
}
?>

<body>
    <?php include_once('menu_admin.php'); ?>

    <form action="script/script_categorie_modif.php">
    <div class="mb-3 mt-3">
      <label for="libelle">Libelle:</label>
      <input type="text" class="form-control" id="libelle" placeholder="Enter libelle" name="libelle" value = "<?= $categorie->libelle ?>">
    </div>
    <div class="mb-3">
      <label for="image">Image:</label>
      <input type="file"  name="fichier"class="form-control" id="image" value="<?= $categorie->image ?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="active">Active:</label>
      <input type="text" class="form-control" id="active" placeholder="Enter active" name="active" value="<?= $categorie->active ?>">
    </div>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary"  type="submit">Modifier</button>
      <a href="categorie_admin.php" class="btn btn-primary">Retour</a>
       </div>
  </form>

  <?php 
include_once('footer_admin.php') ?>