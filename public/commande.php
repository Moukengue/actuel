<?php
// $id = $_GET['id'];
include('DAO.php');
include('../header.php');

if(isset($_POST["plat"])){
    $id_plat = $_POST["plat"];
}

$plat = afficherLesPlatsCommande($id_plat);

// var_dump($plats);
?>








<body>

    <?php include_once('../menu.php'); ?>
    <div class="container">
        <h1>Commande</h1>
        <div class="row">
            <div class="col-2 text-left">
                <img src="./images_the_district/fooda_actuel/<?= $plat->image ?>" class="img-responsive mw-100" style="width:400px;" alt="..." />
            </div>
            <div class="col-4 text-left">
            <h5 ><?= $plat->libelle ?></h5>
            <p><?= $plat->prix ?>€</p>
                <p><?= $plat->description ?></p>
               
            </div>
        </div>
        <div class="row">
        <div class="col-6">
            <form action="commande_script.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend></legend>
                    <div class="form-group col-1">
                        <label for="selection">Quantité</label>
                        <input type="number" name="quantite" value=1 />
                        
                    </div>
                    <div class="form-group col-2">
                                <label for="total"> Prix Total</label>
                                
                        <input type="total" name="total" class="form-control" id="total"  value="<?= $plat->prix ?>" readonly>
                    </div>

                    <div class=" mx 2">
                        <label for="nom">Entrez votre nom</label>
                        <input type="text" name="" class="form-control" id="nom" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="prenom">Entrez votre prenom</label>
                        <input type="prenom" class="form-control" id="prenom">
                       
                    </div>
                    <div class="form-group">
                        <label for="numero">Entrez votre numero</label>
                        <input type="numero" name=""class="form-control" id="numero">
                        <div class="form-group">
                            <label for="email">Entrez votre mail</label>
                            <input type="email" name="" class="form-control" id="email" value="">
                        </div>
                    </div>
                    

                    
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" type="submit">Commander</button>
                        <a href="accueil.php" class="btn btn-primary">Retour</a>
                    </div>
                    

                      
                  
        </div>
        </div>
        

        </fieldset>
        </form>
    </div>
    </div>
<script>
    
</script>


    <?php include_once "../footer.php"; ?>