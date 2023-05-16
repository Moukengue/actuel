<?php

include "DAO.php";?>

<?php include('../header.php');?>

<body class="modif">
<form class="form_contact" method="POST" action="inscription_script.php">
          <h5 align="center">Inscription</h5>
        <h1>Merci de nous avoir choisi!</h1>
        <div class="separation"></div>
            <div class="corps-formulaire">
                <!--nom-->
                <div class="gauche">
                   <div class="groupe">
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom"  size="50" maxlength="50" placeholder="Macosso" required>
                <i class="fa-solid fa-user"></i>
                </div>
                <!--prenom-->
                <div class="groupe">
                <label for="nom">Votre prenom</label>
                <input class="inscrip" type="text" id="prenom" name="prenom" size="50" maxlength="50" placeholder="Ervine" require> 
                <i class="fa-solid fa-user"></i>
            </div>
            </div>
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
        <span class="enregistrer">Avez-vous deja un compte?</span><a href="connexion.php">Connexion</a></span>
        </div>
    </form>
</body>
</html>


