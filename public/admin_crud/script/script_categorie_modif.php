<?php 



// Récupération des valeurs :
$id = (isset($_get['categorie_id']) && $_get['categorie_id'] != "") ? $_get['gategorie_id'] : Null;
$libelle = (isset($_POST['libelle']) && $_POST['libelle'] != "") ? $_POST['libelle'] : Null;
$active = (isset($_POST['active']) && $_POST['active'] != "") ? $_POST['active'] : Null;

// En cas d'erreur, on renvoie vers le formulaire

if ($id == Null || $libelle == Null || $active == Null ) {
   
    header("Location:  ../categorie_admin.php" . $id);
    exit;
}
// Si la vérification des données est ok :
require "db.php"; 
$db = connexionBase();

try {
    // Construction de la requête UPDATE sans injection SQL :
    $requete = $db->prepare("UPDATE categorie SET disc_title = :disc_title, disc_year = :disc_year, disc_picture = :disc_picture, disc_label = :disc_label, disc_genre = :disc_genre, disc_price = :disc_price, artist_id = :artist_id  WHERE disc_id = :id;");
    $requete->bindValue(":id", $id, PDO::PARAM_INT);
    $requete->bindValue(":disc_title", $title, PDO::PARAM_STR);
    $requete->bindValue(":disc_year", $year, PDO::PARAM_STR);
    $requete->bindValue(":disc_picture", $disc_picture, PDO::PARAM_STR);
    $requete->bindValue(":disc_label", $label, PDO::PARAM_STR);
    $requete->bindValue(":disc_genre", $genre, PDO::PARAM_STR);
    $requete->bindValue(":disc_price", $price, PDO::PARAM_STR);
    $requete->bindValue(":artist_id", $artist, PDO::PARAM_STR);

    $requete->execute();
    $requete->closeCursor();
}

catch (Exception $e) {
    var_dump($_POST);
    echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
    die("Fin du script (script_disc_modif.php)");
}

// Si OK: redirection vers la page disc_detail.php
 header("Location: disc_detail.php?id=" . $id);
exit;

// On met les types autorisés dans un tableau (ici pour une image)
$aMimeTypes = array("img/gif", "img/jpeg", "img/pjpeg", "img/png", "img/x-png", "img/tiff");

// On extrait le type du fichier via l'extension FILE_INFO 
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($mimetype, $aMimeTypes))
{
    $image = (isset($_POST['image']) && $_POST['artist'] != "") ? $_POST['artist'] : Null;
} 
else 
{
   // Le type n'est pas autorisé, donc ERREUR

   echo "Type de fichier non autorisé";    
   exit;
}    

?>