<?php
include('DAO.php');
include('../header.php');

if (isset($_GET["plat_id"])) {
  //var_dump($_GET["plat_id"]);

  $plat_id = $_GET["plat_id"];
}
// $mon_plat = afficherTousLesDetailsParPlat($plat);
$mon_plats = afficherLesPlats($plat_id);
?>


<?php include_once('../menu.php'); ?>

<div class="row">
  <div class="mt-5">
    <h4>
      <!-- Tous les plats<?php echo $mon_plats[0]->plat_libelle ?> -->
    </h4>
  </div>
  <?php
  foreach ($mon_plats as $plat) : ?>

    <div class="col-md-9 col-xs-12 mx-auto">
      <div class="row">
        <div class="col-4">
          <!-- <div class="card"> -->
          <img src="./images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive mw-100" style="width:400px;" alt="..." />
        </div>
        <div class="col-5">
          <h5 class="card-title"><?= $plat->libelle ?></h5>
          <p><?= $plat->description ?></p>
          <!-- <a href="commande.php?id=<?php echo $plat->id; ?>"> -->
          <form method="post" action="commande.php">
            <input type="hidden" name="plat" value="<?php echo $plat->id; ?>" />
          <button type="submit">Commander</button>
        <!-- </a> -->
          </form>
            
        </div>
      </div>
    </div>

</div>
<?php endforeach; ?>
</div>
<?php include_once('../footer.php') ?>