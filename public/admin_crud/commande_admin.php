<?php
include('../../header.php');
include "../db.php";
$db = connexionBase();
$requete = $db->query("SELECT commande.id,commande.id_plat,commande.quantite,commande.total,commande.date_commande,commande.etat,commande.nom_client,commande.telephone_client
,commande.email_client,commande.adresse_client FROM commande;");
$commandes = $requete->fetchAll(PDO::FETCH_OBJ);
$requete->closeCursor();
?>

<body>
    <?php include_once('menu_admin.php'); ?>
    <h1>Admin Commande</h1>
    <div class="division"></div>
    <div class="menu">
        <div class="spa">
        </div>

    </div>
    <!--meio da pagina-->
    <div class="meio">
        <div class="pagine">

            <table class="table table-responsive table-hover">
                <thead>
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
                </thead>
                <tbody>
                    <?php foreach ($commandes as $commande) : ?>
                        <tr>
                            <td><?= $commande->id ?></td>
                            <td><?= $commande->id_plat ?></td>
                            <td><?= $commande->quantite ?></td>
                            <td><?= $commande->total ?></td>
                            <td><?= $commande->date_commande ?></td>
                            <td><?= $commande->etat ?></td>
                            <td><?= $commande->nom_client ?></td>
                            <td><?= $commande->telephone_client ?></td>
                            <td><?= $commande->email_client ?></td>
                            <td><?= $commande->adresse_client ?></td>


                            <td>
                                <a href="commande_form_admin.php?id=<?= $commande->id ?>" type="button" class="btn btn-primary"><i class="fa-solid fa-pen-to-square fa-beat fa-xs"></i> Modifier</a>
                                <a href="script/script_commande_delete.php?id=<?= $commande->id ?>" type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>



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
</body>

</html>