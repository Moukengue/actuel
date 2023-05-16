<?php

session_start();
 include "DAO.php";
 $db=connexionbase();

 if(isset($_POST["nom"])){
    //retirer les balises html avec la fonction php strip_tags()!!
    $nom_client = strip_tags($_POST["nom"]);
}
if(isset($_POST["prenom"])){
    $prenom_client = $_POST["prenom"];
}
if(isset($_POST["adresse"])){
    $adresse_client = $_POST["adresse"];
}

$nouveau_utilisateur = creation_utilisateur($id,$email,$nom,$prenom,$password,$numero);
if($nouveau_utilisateur == "ok"){
    // echo "Votre  enregistrément";
    header('Location: /accueil.php');
}else{
    echo "Une erreur est survenue. Veuillez réessayer.";
}


?>
