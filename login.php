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
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Connexion</title>
</head>
<body class="vida">

<div class="todo">
    <nav>
        <a href="" class="logo">
        <img
          src="/public/images_the_district/the_district_brand/logo_transparent_sm.png" height="100px"
            alt="logo"
            
            
          />
        </a>

        <ul>
            <li><a href="#">lien1</a></li>
            <li><a href="#">lien1</a></li>
            <li><a href="#">lien1</a></li>
            <li><a href="#">lien1</a></li>
            <li><a href="#">lien1</a></li>
            <li>
                <button class="btn" id="dispayform">Se connecter</button>
            </li>
        </ul>
    </nav>

    <section>
        <div class="sec-container">
            <div class="form-wrapper">
                <div class="card">
                    <div class="card-header">
                        <div id="pour login" class="form-header active">Se connecter</div>
                        <div id="pour enregistrer" class="form-header">S'inscrire</div>
                
                    </div> 
                    <div class="card-body" id="formContainer">
                        <form id="formLogin">
                        <input type="email" class="form-control" name="email" placeholder="vividresse@mail.com" required>
                        <input type="password" class="form-control" name="mdp" placeholder="Saisissez votre mot de passe"required >
                        <button class="formButton">connexion</button>
                        </form>
                        <form id="form-inscription" class="toggleForm">
                        <input type="email" class="form-control" name="email" placeholder="vividresse@mail.com" required>
                        <input type="password" class="form-control" name="mdp" placeholder="Saisissez votre mot de passe"required >
                        <input type="password" class="form-control" name="mdp" placeholder="Confirmer votre mot de passe"required >
                        <button class="formButton">Inscription</button>

                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>

</div>






























<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>