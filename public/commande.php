<?php
// $id = $_GET['id'];
include('DAO.php');
include('../header.php');

if (isset($_POST["plat"])) {
    $id_plat = $_POST["plat"];
}

$plat = afficherLesPlatsCommande($id_plat);

// var_dump($plats);
?>








<body>

    <?php include_once('../menu.php'); ?>
    <div class="container">
        <h1>Commande</h1>
        <div class="row">
            <div class="col-2 text-left">
                <img  src="./images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive mw-100" style="width:400px;" alt="..." />
            </div>
            <div class="col-4 text-left">
                <h5><?= $plat->libelle ?></h5>
                <p><?= $plat->prix ?>€</p>
                <p><?= $plat->description ?></p>

            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <form id="form-commande" action="commande_script.php" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <legend></legend>
                        <div class="form-group col-1 mb-2">
                            <label for="selection">Quantité</label>
                            <input type="number" id="quantite" min="1" name="quantite" value="1" required onchange="calculer_total(this)">

                        </div>
                        <div class="form-group col-4">
                            <span class="d-inline"> Prix Total : <span id="total" class="d-inline"></span></span>
                            
                        </div>

                        <div class="form-group mt-2">
                            <label for="nom">Entrez votre nom</label>
                            <input type="text" name="nom" class="form-control" id="nom"  size="50" maxlength="50" placeholder="Nom" required>
                        </div>

                        <div class="form-group">
                            <label for="adresse">Entrez votre Adresse</label>
                            <input type="text"  name="adresse"class="form-control" id="adresse" required>

                        </div>
                        <div class="form-group">
                            <label for="numero">Entrez votre numero</label>
                            <input type="numero" name="numero" class="form-control" id="numero"required>
                            <div class="form-group">
                                <label for="email">Entrez votre mail</label>
                                <input type="email" name="email" class="form-control" id="email" value=""required>
                            </div>
                        </div>
            </div>
        </div>


        </fieldset>
        <div class="d-grid gap-2 d-md-block">
                            <input type="hidden"  name="id_plat" class="form-control" value="<?= $plat->id ?>">
                            <input type="hidden" id="prix"  name="prix" class="form-control" value="<?= $plat->prix ?>">
                            <input type="hidden" id="plat"  name="plat" class="form-control" value="<?= $plat->libelle ?>">
                            <button class="btn btn-primary" type="submit">Commander</button>
                            <a href="/accueil.php" class="btn btn-primary">Retour</a>
                        </div>
        </form>
    </div>
    </div>
    <script>

    </script>


    <?php include_once "../footer.php"; ?>