<?php
include('DAO.php');
include('../header.php');

if (isset($_GET["plat_id"])){
    //var_dump($_GET["plat_id"]);

    $plat_id = $_GET["plat_id"];


}
// $mon_plat = afficherTousLesDetailsParPlat($plat);
$mon_plats = afficherLesPlats($plat_id);
?>




<div class="row">
  <div class="mt-5">
    <h4>
      <!-- Tous les plats<?php echo $mon_plats[0]->plat_libelle ?> -->
  </h4>
  </div>
  <?php
foreach ($mon_plats as $plat) :?>
  
  <div class="col-md-4 col-xs-12">
    <!-- <div class="card"> -->
    <a href="./public/categorie_detail.php?plat_id=<?php echo $plat -> id; ?>">
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