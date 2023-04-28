<?php

?>
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
    <title>Admin</title>
</head>
<body>
<h1>Admin The Distric</h1>
<div class="division"></div>
    <div class="menu">
        <div class="spa">

        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">
        <h1>The Distric</h1>
        <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="public/admin_crud/categorie.php">Categorie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="public/admin_crud/plats.php">Plats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="public/admin_crud/utilisateur.php">Utilisateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="public/admin_crud/commande.php">Commande</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Lien déroulant
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Connexion</a></li>
            <li><a class="dropdown-item" href="public/admin_crud/des_administrateurs.php">Administrateurs</a></li>
            <li><a class="dropdown-item" href="#">Clients</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div lass="form-group">
<label for="text">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Moukengue" required>
</div>
<!--prenom-->
<div class="form-group">
                <label for="nom">Votre prenom</label>
                <input class="inscrip" type="text" id="prenom" name="prenom" placeholder="Aline" require> 
                
            </div>
 
        </div >
        
    </div>
    
    <!--footer-->
    <div class="footer">
            <div class="wrapper">
                <p class="text-center">2023 Deleloppé par-Moukengue Aline <a href="#">Vivi</a></p>
                
</div>
</body>
</html>