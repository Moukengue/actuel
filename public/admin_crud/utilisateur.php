<?php
include "../db.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM utilisateur;");
$utilisateurs = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
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
<h3>Admin Utilisateur</h3>

<div class="division"></div>
    <div class="menu">
        <div class="spa">

        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">
        <i class="fa-solid fa-users"></i>
        <table class= "tbl-full">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Numero</th>

                <th>Action</th>
                <?php foreach ($utilisateurs as $utilisateur) :?>
                <tr>
                    <td><?=$utilisateur-> id?></td>
                    <td><?=$utilisateur-> nom?></td>
                    <td><?=$utilisateur -> prenom?></td>
                    <td><?=$utilisateur -> email?>l</td>
                    <td><?=$utilisateur-> numero?></td>
                    <td>
                        <a href="" class="update">Modifier</a>
                        <i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i>
                        <a href="" class="delete">Supprimer</a><i class="fa-sharp fa-solid fa-delete-right fa-bounce fa-sm"></i>
                        
                        </td>
                        
                        
                        
                    
                </tr>
                <?php endforeach; ?>
            </tr>
        </table>
        </div>
    </div>
    
    <!--footer-->
    <div class="footer">
            <div class="wrapper">
                <p class="text-center">2023 Deleloppé par-Moukengue Aline <a href="#">Vivi</a></p>
                
</div>
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
</body>
</html>