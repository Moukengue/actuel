<?php
include('DAO.php');
include('../header.php');

if (isset($_GET["categorie_id"])){
    //var_dump($_GET["categorie_id"]);

    $categorie = $_GET["categorie_id"];


}
$mon_resultat_plats = afficherTousLesPlarParCategorie($categorie);

?>

<div class="row">
  <div class="mt-5">
    <h4>
      Tous les plats de la catégorie <?php echo $mon_resultat_plats[0]->categorie_libelle ?>
  </h4>
  </div>
  <?php
foreach ($mon_resultat_plats as $plat) :?>
  
  <div class="col-md-4 col-xs-12">
    <!-- <div class="card"> -->
    <a href="./public/categorie_detail.php?categorie_id=<?php echo $plat -> id; ?>">
      <img
        src="./images_the_district/fooda_actuel/<?=$plat-> image?>"
        class="img-responsive mw-100" style="width:400px;"
        alt="..."
     />
      <!-- <div class="card-body" style="width: 500px"> -->
        <h5 class="card-title"><?=$plat -> libelle?></h5>
      <!-- </div> -->
    <!-- </div> -->

  </a>
  </div>
  <?php endforeach; ?>
</div>

  
