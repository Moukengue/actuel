<?php
include('../header.php');

include "../db.php";
$db = connexionBase();
$requete = $db->query("SELECT id,libelle,image,active FROM categorie;");
$categories = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>


<body>
  <?php include_once('menu_admin.php'); ?>

  <div class="collapse navbar-collapse" id="navbarNav">

    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link fs-3" href="admin_crud/categorie_admin.php">Categorie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-3" href="admin_crud/plats_admin.php">Plats</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-3" href="admin_crud/utilisateur_admin.php">Utilisateur</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-3" href="admin_crud/commande_admin.php">Commande</a>
      </li>



    </ul>
  </div>
  </div>
  </nav>

  <h1>Admin Categorie</h1>
  <div class="division"></div>

  <div class="menu">

    <div class="spa">

    </div>

  </div>
  <!--meio da pagina-->
  <div class="meio"></div>
  <div class="pagine">
    <table class="table table-hover">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary mx-3 " href="categorie_new.php" role="button">Ajouter</a>
      </div>
      <thead>
        <tr>
          <th>Id</th>
          <th>Libelle</th>
          <th>image</th>
          <th>active</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $categorie) : ?>
          <tr>
            <td><?= $categorie->id ?></td>
            <td><?= $categorie->libelle ?></td>
            <td><?= $categorie->image ?></td>
            <td><?= $categorie->active ?></td>
            <td>
              <a href="categorie_form_admin.php?id=<?= $categorie->id ?>" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i> Modifier</a>
              <a href="script/script_categorie_delete.php?id=<?= $categorie->id ?>" type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </div>

  <?php
  include_once('footer_admin.php') ?>