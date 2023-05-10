<?php
include('DAO.php');
include('../header.php');

if (isset($_GET["plat_id"])) {
    //var_dump($_GET["plat_id"]);

    $plat_id = $_GET["plat_id"];
}
$mon_plats = afficherLesPlats($plat_id);
?>








<body>

    <?php include_once('../menu.php'); ?>
    <div class="container">
        <h1>Commande</h1>
        <div class="col-6">
            <form  action="public/commande_script.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>

                    <div class="form-group">
                        <label for="nom">Entrez votre nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Entrez votre prenom</label>
                        <input type="prenom" class="form-control" id="prenom">
                    </div>
                    <div class="form-group">
                        <label for="numero">Entrez votre numero</label>
                        <input type="numero" class="form-control" id="numero">
                        <div class="form-group">
                            <label for="email">Entrez votre mail</label>
                            <input type="email" class="form-control" id="email" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <label for="total">Total</label>
                            <input type="total" class="form-control" id="total">
                        </div>

                    <div class="col-md-4">
                        <label for="selection">Quantité</label>
                        <select id="selection" class="form-select">
                        <option selected>Choisir...</option>
                            <option value=""></option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            </optgroup>

                        </select>
                    </div>
                    <h4>
      <!-- Tous les plats<?php echo $mon_plats[0]->plat_libelle ?>-->
  </h4>
                    <?php foreach ($mon_plats as $plat) : ?>
                    <div class="mb-3 col-2">
            <label for="image" class="form-label">Image</label>
                <img src="./images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive" style="width: 18rem;">
            </div>
            <?php endforeach; ?>

                </fieldset>
            </form>
        </div>
    </div>


    <?php include_once "../footer.php"; ?>