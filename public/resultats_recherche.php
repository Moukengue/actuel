<?php
include_once 'public/DAO.php';

if(isset($_POST["recherche"]))
{
    // var_dump($_POST["recherche"]);
    $recherche = $_POST["recherche"];

    $resultat = cherche_plat($recherche);
    if(count($resultat)>0)
    {
        ?>
        <h4>Plats correspondant à votre recherche : <?php  echo '"' . $recherche . '"' ?></h4>
        <?php
        foreach($resultat as $rs):
            ?>
            <a href="plat_detail.php?plat_id=<?php echo $rs->id; ?>">
                <div class="card m-3">
                    <img src= "public/images_the_district/fooda_actuel/<?=$rs ->image;?> "class="img-responsive mw-100" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"><?=$rs -> libelle?></h5>
                    </div>
                </div>
            </a>
        <?php endforeach; 
    }
    echo "Votre recherche n'a donné aucun resultat";


}?>