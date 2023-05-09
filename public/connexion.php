
<?php
include('../header.php');
include "DAO.php";?>



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