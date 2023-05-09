<?php
include('../../header.php');
include "../db.php";
$db = connexionBase();
$requete = $db->query("SELECT * FROM utilisateur;");
$utilisateurs = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body>
<?php include_once('menu_admin.php');?>
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
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Numero</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php foreach ($utilisateurs as $utilisateur) :?>
                <tr>
                    <td><?=$utilisateur-> id?></td>
                    <td><?=$utilisateur-> nom?></td>
                    <td><?=$utilisateur -> prenom?></td>
                    <td><?=$utilisateur -> email?>l</td>
                    <td><?=$utilisateur-> numero?></td>
                    <td>
                    <a href="utilisateur_form_admin.php?id=<?= $utilisateur-> id ?>" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i> Modifier</a>
                    <a href="script/script_utilisateur_delete.php?id=<?= $utilisateur->id ?>" type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
                        
                        </td>
                        
                        
                        
                    
                </tr>
                <?php endforeach; ?>
                </tbody>
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