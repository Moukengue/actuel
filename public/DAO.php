<?php
require "../db.php";
function afficherCommandes(){
    if(require("db.php")){
        $requete =  $db->query("SELECT date_commande,nom_client,telephone_client,email_client,adresse_client,prix FROM commande
        INNER JOIN plat ON commande.id_plat = plat.id;");
        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function afficherPlats(){
    if(require("db.php")){
        $requete =  $db->query("SELECT plat.libelle,categorie.libelle FROM plat
        INNER JOIN categorie ON 
        plat.id_categorie = categorie.id;; ");

        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function afficherCategories (){
    if(require("../db.php")){
        $requete =  $db->query("SELECT categorie.libelle, COUNT(plat.id) FROM  categorie 
        INNER JOIN plat
        ON  plat.id_categorie = categorie.id WHERE plat.active = 'yes' GROUP  BY categorie.libelle;");

        return $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}
       /*les catégories les plus populaires (6) */
function afficherCategoriesPopulaire(){
        $db = ConnexionBase();
        $requete =  $db->query("SELECT categorie.image, categorie.libelle, categorie.id FROM  categorie 
        INNER JOIN plat
        ON  plat.id_categorie = categorie.id WHERE plat.active = 'yes' GROUP  BY categorie.libelle ORDER BY COUNT(plat.id) desc limit 6;");

        $categoriesPopulaire = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $categoriesPopulaire;

}
       /*a liste des plats les plus vendus*/
function lesPlatsLesPlusVendus(){
        $db = ConnexionBase();
        $requete =  $db->query(" SELECT plat.id, plat.image, plat.libelle, SUM(quantite ) AS quantites  FROM commande 
        INNER JOIN  plat ON commande.id_plat = plat.id GROUP BY libelle ORDER  BY SUM(quantite) DESC LIMIT 3;
        ");
        $lesPlatsLesPlusVendus = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $lesPlatsLesPlusVendus;
}
      /*afficher les catégories "actives" (afficher un nombre maximum de 6 catégories )*/
function lesCategoriesActive(){
        $db = ConnexionBase();
        $requete =  $db->query(" SELECT libelle,image FROM  categorie 
        WHERE categorie .active = 'yes' limit 6;");
        
        $lesCategoriesActive = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $lesCategoriesActive;
}
/*afficher 6 plats avec le libellé, la description, le prix et un bouton qui permette de passer une commande.*/
function pagePlat(){
    $db = ConnexionBase();
    $requete =  $db->query(" SELECT *FROM plat  LIMIT 6; ");

    $pagePlat= $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $pagePlat;
}




function listelesRenumere(){
    if(require("db.php")){
        $requete =  $db->query("SELECT plat.libelle, SUM(commande.total) 
        FROM plat 
        JOIN commande ON commande.id_plat = plat.id 
        GROUP BY plat.id 
        ORDER BY SUM(commande.total) DESC 
        LIMIT 1;
         ");

        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}
function listeChifaffaire(){
    if(require("db.php")){
        $requete =  $db->query("SELECT nom_client, SUM(total) AS total FROM commande GROUP BY nom_client ORDER  BY  SUM(total)  DESC ; ");
       

        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function categoriePasta(){
    if(require("../db.php")){
        $requete =  $db->query("SELECT *FROM plat 
        INNER JOIN categorie
        ON plat.id_categorie = categorie.id
        WHERE categorie.libelle like 'Pasta'; ");
       

        $plats= $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}



?>