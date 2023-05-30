<?php

session_start();
 include "DAO.php";
 $db=connexionbase();

 if(isset($_POST["nom"])){
    //retirer les balises html avec la fonction php strip_tags()!!
    $nom= strip_tags($_POST["nom"]);
}
if(isset($_POST["prenom"])){
    $prenom =  strip_tags  ($_POST["prenom"]);
}

if(isset($_POST["numero"])){
    $numero = $_POST["numero"];
}
if(isset($_POST["mdp"])){
    $password = password_hash($_POST["mdp"], PASSWORD_DEFAULT) ;
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}


$nouveau_utilisateur = creation_utilisateur($email,$nom,$prenom,$password,$numero);
if($nouveau_utilisateur == "OK"){
    // echo "Votre  enregistrément";
    header('Location:accueil.php');
}else{
    echo "Une erreur est survenue. Veuillez réessayer.";
}


?>
