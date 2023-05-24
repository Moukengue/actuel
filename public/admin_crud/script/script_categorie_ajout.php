<?php
include "DAO.php";
$db=connexionbase();


//instruction exécute du code si une condition est vraie et un autre code si cette condition est fausse.
    // Récupération du libelle :
    if (isset($_POST['libelle']) && $_POST['libelle'] != "") {
        $libelle = $_POST['libelle'];
    }
    else {
        $title = Null;
    }

    // Récupération active  :
 if (isset($_POST['active']) && $_POST['active'] != "") {
    $artist = $_POST['active'];
}
else {
    $artist = Null;
}
// En cas d'erreur, on renvoie vers le formulaire
if ($libelle == Null || $active == Null || $image == Null  ) {
    header("Location: disc_new.php");
    exit;
}
 // S'il n'y a pas eu de redirection vers le formulaire (= si la vérification des données est ok) :
    include "db.php"; 
    $db = connexionBase();
    // A supprimer apres la gestion d'image
    $categorie_image = "Nom provisoire.png";
    



?> 