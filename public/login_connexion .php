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
    <title>Formulaire de connexion</title>
    
  </head>
  <body>


    <div class="form_container">
      <div class="ovelay">
     <!---->
      </div>
      <div class="titreDiv">
<h1 class="titre"><b>Connexion</b></h1>
<span class="subtitre">Bienvenue sur notre site!</span>
</div>
 <!---formsection-->
 <form method="POST" action="login_script.php">
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
<span class="enregistrer">Premiere connexion?</span><a href="public/inscription.php">Créer mon compte</a></span>

</div>


    </div>
    </form>
    



  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
<div>

