<?php
include('DAO.php');

if (isset($_GET["categorie_id"])){
    //var_dump($_GET["categorie_id"]);

    $categorie = $_GET["categorie_id"];


}
$mon_resultat_plats = afficherTousLesPlarParCategorie($categorie);
foreach ($mon_resultat_plats as $plat) :?>
    <!-- <a href="./public/categorie_detail.php?categorie_id=<?php echo $plat -> id; ?>"> -->
    <div class="col">
      <div class="card">
        <img
          src="http://127.0.0.1:8000/public/images_the_district/fooda_actuel/<?=$plat-> image?>"
          class=""
          alt="..."
       />
        <div class="card-body" style="width: 500px">
          <h5 class="card-title"><?=$plat -> libelle?></h5>
        </div>
      </div>
    </div>
    </a>
    <?php endforeach; ?>
  </div>

