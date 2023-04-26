<?php 
include "../../db.php";
$db = connexionBase();
$requete = $db->query("SELECT  plat.libelle,plat.description,plat.prix,plat.image FROM plat 
INNER JOIN categorie
ON plat.id_categorie = categorie.id
WHERE categorie.libelle like 'Wraps';");
$plats = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <link rel="stylesheet" href="public/css/style.css">
    <title>Categorie_Wraps</title>
    
  </head>
<body>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($plats as $plat):?>
      <div class="col">
        <div class="card">
          <img
            src="../images_the_district/fooda_actuel/<?= $plat -> image?>"
            class=""
            
         />
          <div class="card-body" style="width: 500px">
            <h5 class="card-title"><?=$plat -> libelle?></h5>
          </div>
        </div>
      </div>
      
      <?php endforeach; ?>
    </div>
