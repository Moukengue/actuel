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

<nav class="navbar navbar-expand-lg " id="img_color">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
          src="/public/images_the_district/the_district_brand/logo_transparent_sm.png" height="100px"
            alt="logo"
            
            
          />
          
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link fs-3" href="admin_crud/categorie.php">Categorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="admin_crud/plats.php">Plats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="admin_crud/utilisateur.php">Utilisateur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="admin_crud/commande.php">Commande</a>
            </li>

      
           
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="mt-3 mb-3 p-5">
      <div class="row">
        <div class="col-md-6 col-sm-12 mx-auto p-3" style="background-color:purple" >
        <form method="post" action="resultats_recherche.php" class="d-flex" role="search">
      <input
        class="form-control me-2"
        type="search"
        placeholder="Recherche"
        aria-label="Search"
      />
    </form>
        </div>
      </div>
    
    </div>
<div class="division"></div>
    <div class="menu">
        <div class="spa">

        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">
        <h1>The Distric</h1>
       

    </div>
    
    <!--footer-->
    <div class="footer">
            <div class="wrapper">
                <p class="text-center">2023 Deleloppé par-Moukengue Aline <a href="#">Vivi</a></p>
                
</div>
</body>
</html>