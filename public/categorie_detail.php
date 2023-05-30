<?php
include('DAO.php');
include('header.php');

if (isset($_GET["categorie_id"])) {
  //var_dump($_GET["categorie_id"]);

  $categorie = $_GET["categorie_id"];
}
$mon_resultat_plats = afficherTousLesPlatsParCategorie($categorie);

?>
<?php include_once('menu.php'); ?>

<div class="row">
  <div class="mt-5">
    <h4 class="text-center">
      <!--Tous les plats de la catégorie--> <?php echo $mon_resultat_plats[0]->categorie_libelle ?>
    </h4>
  </div>
  <?php
  // var_dump($mon_resultat_plats);

  foreach ($mon_resultat_plats as $plat) : ?>
    <div class="row">
      <div class="col-9 mx-auto">
        <div class="card my-2 ">
          <div class="row">
            <div class="col-4">
              <div>
                <a href="plat_detail.php?plat_id=<?php echo $plat->id; ?>">
                  <img src="images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive w-100" style="max-width:400px;" alt="..." />
                </a>
              </div>
            </div>
            <div class="col-8">
              <h5 class="card-title"><?= $plat->libelle ?></h5>
              <div>
                <p><?= $plat->description ?></p>
              </div>
              <form method="post" action="commande.php">
            <input type="hidden" name="plat" value="<?php echo $plat->id; ?>" />
          <button type="submit">Commander</button>
        <!-- </a> -->
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php include_once('footer.php') ?>