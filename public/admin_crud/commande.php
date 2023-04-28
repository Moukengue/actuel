<?php

include "../../db.php";
$db = connexionBase();
$requete = $db->query("SELECT commande.id,commande.id_plat,commande.quantite,commande.total,commande.date_commande,commande.etat,commande.nom_client,commande.telephone_client
,commande.email_client,commande.adresse_client FROM commande;");
$commandes = $requete->fetchAll(PDO::FETCH_OBJ);
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
    <title>Admin Commande</title>
</head>
<body>
<h1>Admin Commande</h1>
<div class="division"></div>
    <div class="menu">
        <div class="spa">
        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">
        <h1>The Distric</h1>
        <table class= "tbl-full">
            <tr>
                <th>Id</th>
                <th>Id_plat</th>
                <th>Quantite</th>
                <th>Total</th>
                <th>Date_commande</th>
                <th>Etat</th>
                <th>Nom_client</th>
                <th>Telephone_client</th>
                <th>Email_client</th>
                <th>Adresse_client</th>

                <th>Action</th>
                <?php foreach ($commandes as $commande) :?>
                <tr>
                    <td><?=$commande-> id?></td>
                    <td><?=$commande-> id_plat?></td>
                    <td><?=$commande-> quantite?></td>
                    <td><?=$commande-> total?></td>
                    <td><?=$commande-> date_commande?></td>
                    <td><?=$commande-> etat?></td>
                    <td><?=$commande-> nom_client?></td>
                    <td><?=$commande-> telephone_client?></td>
                    <td><?=$commande-> email_client?></td>
                    <td><?=$commande-> adresse_client?></td>


                    <td>
                        <a href="" class="ajouter">Ajouter</a>
                        <a href="" class="update">Modifier</a>
                        <i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i>
                        <a href="" class="delete">Supprimer</a>
                        <i class="fa-sharp fa-solid fa-delete-right fa-bounce fa-xs"></i>
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
</body>
</html>