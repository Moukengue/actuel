<?php
include "../db.php";
include('../../header.php');
$db = connexionBase();
$requete = $db->query("SELECT * FROM categorie");
$plats = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body class="new">
    <div class="container">
        <h1>Ajouter categorie</h1>
        <form class="row g-3" action="script/script_categorie_ajout.php" method="post" enctype="multipart/form-data">

            <div class="col-12">
                <label for="libelle">Libelle</label>
                <input type="text" class="form-control" placeholder="Enter Libelle" name="libelle" id="libelle">
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
                <a href="../../accueil.php" class="btn btn-primary">Retour</a>
            </div>
        </form>
        <?php
            
       
