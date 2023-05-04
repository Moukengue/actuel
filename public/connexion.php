
<?php
include "DAO.php";?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Connexion</title>
</head>

<body class="modif">
<form class="form_contact" method="POST" action="connexion_script.php">
         <h5 align="center">Connexion</h5>
        <h1>Bienvenue sur notre site</h1>
        <div class="separation"></div>
            <div class="corps-formulaire">
                <!--Mail-->
                <div class="gauche">
                    <div class="groupe">
                    <label for="email">Votre e-mail</label>
                     <input type="email" id="email" name="email" placeholder="vividresse@mail.com" required>
                     <i class="fa-solid fa-envelope"></i>
                    </div>
                    <!--Password-->
                    <div class="groupe">
                    <label for="password">Mot de Passe</label>
                    <input type="password" id="password" name="mdp" placeholder="Saisissez votre mot de passe"required > 
                        <i class="fa-solid fa-lock"></i>
                        
                    </div>
                </div>
                <!--bouton submit-->

        </div>
        <div class="pied-formulaire" align="center">
        <input type="submit" id="submitbtn" name="submit" value="Valider" required>
       <span class="enregistrer">Premiere connexion?</span><a href="inscription.php">Créer mon compte</a></span>
        </div>
    </form>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>