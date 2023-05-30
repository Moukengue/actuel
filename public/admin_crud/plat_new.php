<?php
include "../db.php";
include('../header.php');
$db = connexionBase();
$requete = $db->query("SELECT * FROM plat");
$plats = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body class="new">
    <div class="container">
        <h1>Ajouter un plat</h1>
        <form class="row g-3" action="script/script_plats_ajout.php" method="post" enctype="multipart/form-data">
            <div class="col-12">
                <label for="libelle">Libelle</label>
                <input type="text" class="form-control" placeholder="Enter Libelle" name="libelle" id="libelle">
            </div>
            <div class="col-12">
                <label for="description">Description </label>
                <input type="text" class="form-control" placeholder="Entrer la description" name="description" id="description">
            </div>
            <div class="col-12">
                <label for="prix">prix </label>
                <input type="text" class="form-control" placeholder="Entrer le prix" name="prix" id="prix">
            </div>
            <div class="col-12">
                <label for="id_categorie">Id_categorie</label>
                <select class="form-select" aria-label="id_categorie" name="id_categorie" id="id_categorie">
                    <option value="" disabled selected>Veuillez sélectionner la categorie</option>
                    <?php foreach ($plats as $plat) : ?>
                        <option value="<?= $plat->id_categorie ?>"><?= $plat->libelle ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12">
                <label for="active">Active</label>
                <input type="text" class="form-control" placeholder="Entrer active" name="active" id="active">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" class="form-control" placeholder="Aucun fichier choisi" name="imaage" id="image">
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="submit">Ajouter</button>
                <a href="../accueil.php" class="btn btn-primary">Retour</a>
            </div>
        </form>
        <?php
       
     
            
     