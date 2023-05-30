<?php
include "../db.php";
include('../header.php');
$db = connexionBase();
$requete = $db->query("SELECT plat.id,plat.libelle,plat.description,plat.prix,plat.image,plat.id_categorie,plat.active FROM plat;");
$plats = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body>
<?php include_once('./menu_admin.php');?>
    <h1>Admin Plats</h1>
    <div class="division"></div>
    <div class="menu">
        <div class="spa">

        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">
            <table class="table table-responsive table-hover">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
         <a class=" btn btn-primary mx-3" href="plat_new.php" role="button">Ajouter</a>
      </div>
                <thead>
               
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Libelle</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Image</th>
                        <th class="text-nowrap">Id Categorie</th>
                        <th class="text-center">Active</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($plats as $plat) : ?>
                    <tr>
                        <td class="text-center"><?= $plat->id ?></td>
                        <td class="text-center"><?= $plat->libelle ?></td>
                        <td class="text-center"><?= $plat->description ?></td>
                        <td class="text-center"><?= $plat->prix ?>€</td>
                        <td class="text-center"><?= $plat->image ?></td>
                        <td class="text-center"><?= $plat->id_categorie ?></td>
                        <td class="text-center"><?= $plat->active ?></td>
                        <td class="d-flex justify-content-around">
                            <a href="plat_form_admin.php?id=<?= $plat-> id ?>"type="button" class="btn btn-primary m-2"><i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i> Modifier</a>
                            <a href="script/script_plats_delete.php?id=<?= $plat->id ?>" type="button" class="btn btn-danger m-2"><i class="fa-solid fa-trash"></i> Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!--footer-->
    <div class="footer">
        <div class="wrapper">
            <p class="text-center">2023 Deleloppé par-Moukengue Aline <a href="#">Vivi</a></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>