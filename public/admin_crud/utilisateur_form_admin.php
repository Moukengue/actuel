<?php
include('../../header.php');

include "../db.php";
?>

<body>
    <?php include_once('menu_admin.php'); ?>

    <form action="script/script_categorie_modif.php"  method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="nom">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter Nom" name="nom">
    </div>
    <div class="mb-3 mt-3">
      <label for="prenom">Prenom:</label>
      <input type="text" class="form-control" id="prenom" placeholder="Enter Prenom" name="prenom">
    </div>
    <div class="mb-3 mt-3">
      <label for="numero">Numero:</label>
      <input type="text" class="form-control" id="numero" placeholder="Enter numero" name="numero">
    </div>
    </div>
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-primary"  type="submit">Modifier</button>
      <a href="utilisateur_admin.php" class="btn btn-primary">Retour</a>
       </div>
  </form>

  <?php 
include_once('footer_admin.php') ?>
