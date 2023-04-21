<?php
include "DAO.php";?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <link rel="stylesheet" href="/public/css/style.css">
    <title>Inscription</title>
    
  </head>
  <body class="image">
    



  <div class="register_container">
      <div class="ali">
     <!--vide-->
      </div>
      <div class="titreDiv">
<h1 class="titre"><b>Inscription</b></h1>
<span class="subtitre">Merci de nous avoir choisi!</span>
</div>
 <!---formsection-->
 <form action="#" method="POST">

 <div class="row grid">
  <!--Nom-->
    <div class="row">
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom" placeholder="Ervine" required>
 </div>
 <!--prenom-->
 <div class="row">
    <label for="nom">Votre prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Ervine" required>
 </div>
 <div class="row grid">
  <!--Mail-->
    <div class="row">
    <label for="email">Votre e-mail</label>
    <input type="email" id="email" name="email" placeholder="vividresse@mail.com" required>
 </div>
 <!--Password-->
<div class="row">
<label for="password">Mot de Passe</label>
<input type="password" id="password" name="mdp" placeholder="Saisissez votre mot de passe"required >
</div>

<!--bouton submit-->
<div class="row">
<input type="submit" id="submitbtn" name="submit" value="Valider" required>
<span class="enregistrer">Avez-vous deja un compte?</span><a href="public/inscription.php">Inscription</a></span>

</div>


    </div>
    </form>
  </body>

