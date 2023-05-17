<?php
require "db.php";
function afficherCommandes()
{
    if (require("db.php")) {
        $requete =  $db->query("SELECT date_commande,nom_client,telephone_client,email_client,adresse_client,prix FROM commande
        INNER JOIN plat ON commande.id_plat = plat.id;");
        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function afficherPlats()
{
    if (require("db.php")) {
        $requete =  $db->query("SELECT plat.libelle,categorie.libelle FROM plat
        INNER JOIN categorie ON 
        plat.id_categorie = categorie.id;; ");

        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function afficherCategories()
{
    if (require("../db.php")) {
        $requete =  $db->query("SELECT categorie.libelle, COUNT(plat.id) FROM  categorie 
        INNER JOIN plat
        ON  plat.id_categorie = categorie.id WHERE plat.active = 'yes' GROUP  BY categorie.libelle;");

        return $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}
/*les catégories les plus populaires (6) */
function afficherCategoriesPopulaire()
{
    $db = ConnexionBase();
    $requete =  $db->query("SELECT categorie.image, categorie.libelle, categorie.id FROM  categorie 
        INNER JOIN plat
        ON  plat.id_categorie = categorie.id WHERE plat.active = 'yes' GROUP  BY categorie.libelle ORDER BY COUNT(plat.id) desc limit 6;");

    $categoriesPopulaire = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $categoriesPopulaire;
}

///afficher tous le splats par categorie (l'id de la catégorie est passé en paramètre)

function afficherTousLesPlatsParCategorie($categorie_id)
{
    $db = ConnexionBase();
    $requete = $db->prepare("SELECT plat.id, plat.libelle, plat.description, plat.prix, plat.image, categorie.libelle as categorie_libelle 
                            FROM plat 
                            JOIN categorie ON plat.id_categorie = categorie.id
                            WHERE id_categorie = :id_categorie");
    $requete->bindValue(':id_categorie', $categorie_id);
    $requete->execute();
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);

    return $tableau;
}
//afficher les détails d'un plat pour le fichier plat_detail.php l'id du plat est en paramétre
function afficherLesPlats($plat_id)
{
    $db = ConnexionBase();
    $requete =  $db->prepare("SELECT id, libelle, description, image FROM plat
    where id = :id_plat;");

    $requete->bindValue(':id_plat', $plat_id);
    $requete->execute();
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);

    return $tableau;
}


/*a liste des plats les plus vendus*/
function lesPlatsLesPlusVendus()
{
    $db = ConnexionBase();
    $requete =  $db->query(" SELECT plat.id, plat.image, plat.libelle, SUM(quantite ) AS quantites  FROM commande 
        INNER JOIN  plat ON commande.id_plat = plat.id GROUP BY libelle ORDER  BY SUM(quantite) DESC LIMIT 3;
        ");
    $lesPlatsLesPlusVendus = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $lesPlatsLesPlusVendus;
}
/*afficher les catégories "actives" (afficher un nombre maximum de 6 catégories )*/
function lesCategoriesActive()
{
    $db = ConnexionBase();
    $requete =  $db->query(" SELECT id, libelle,image FROM  categorie 
        WHERE categorie .active = 'yes' limit 6;");

    $lesCategoriesActive = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $lesCategoriesActive;
}
/*afficher 6 plats avec le libellé, la description, le prix et un bouton qui permette de passer une commande.*/
function affichePlat()
{
    $db = ConnexionBase();
    $requete =  $db->query(" SELECT *FROM plat  LIMIT 6; ");

    $pagePlat = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return $pagePlat;
}




function listelesRenumere()
{
    if (require("db.php")) {
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
function listeChifaffaire()
{
    if (require("db.php")) {
        $requete =  $db->query("SELECT nom_client, SUM(total) AS total FROM commande GROUP BY nom_client ORDER  BY  SUM(total)  DESC ; ");


        $discs = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}

function categoriePasta()
{
    if (require("../db.php")) {
        $requete =  $db->query("SELECT *FROM plat 
        INNER JOIN categorie
        ON plat.id_categorie = categorie.id
        WHERE categorie.libelle like 'Pasta'; ");


        $plats = $requete->fetchAll(PDO::FETCH_OBJ);
        $requete->closeCursor();
    }
}
//les functions du dossier admin.supprimer_categorie
function supprimer_categorie($id)
{
    $db = ConnexionBase();
    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db->prepare("DELETE FROM categorie WHERE id = ?");
        $requete->execute(array($id));
        $requete->execute();
        $requete->closeCursor();
    } catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_categorie_delete.php)");
    }
}
//supprime les plat_admin
function supprimer_plats($id)
{
    $db = ConnexionBase();
    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db->prepare("DELETE FROM plat WHERE id = ?");
        $requete->execute(array($id));
        $requete->execute();
        $requete->closeCursor();
    } catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_plat_delete.php)");
    }
}
//supprime les utilisateur_admin
function supprimer_utilisateur($id)
{
    $db = ConnexionBase();
    try {
        // Construction de la requête DELETE sans injection SQL :
        $requete = $db->prepare("DELETE FROM utilisateur WHERE id = ?");
        $requete->execute(array($id));
        $requete->execute();
        $requete->closeCursor();
    } catch (Exception $e) {
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_utilisateur_delete.php)");
    }
}
// form_categorie
function get_categorie($id)
{
    if (!(isset($id)) || intval($id) <= 0) {
        return null;
    } else {
        $db = ConnexionBase();
        $requete =  $db->prepare("SELECT * FROM categorie WHERE id = ?");
        $requete->execute(array($id));
        $categorie = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $categorie;
    }
}
//form_plat
function get_plat($id)
{
    if (!(isset($id)) || intval($id) <= 0) {
        return null;
    } else {
        $db = ConnexionBase();
        $requete =  $db->prepare("SELECT * FROM plat WHERE id = ?");
        $requete->execute(array($id));
        $plat = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $plat;
    }
}

//chercher plat par mot saisi
function cherche_plat($recherche)
{
    $db = ConnexionBase();


    $search1 = '%' . $recherche . '%';
    $search2 = '%' . $recherche . '%';

    $requete = $db->prepare("Select * from plat where libelle like :search1 or description like :search2");
    $requete->bindValue(':search1', $search1);
    $requete->bindValue(':search2', $search2);

    $requete->execute();
    $resultat = $requete->fetchAll(PDO::FETCH_OBJ);
    return $resultat;
}
//affiche les plats fiche commande
function afficherLesPlatsCommande($id)
{
    $db = ConnexionBase();
    $requete =  $db->prepare(" SELECT id, prix,libelle,description,image FROM plat WHERE id = :id ");
    $requete->bindValue(':id', $id);
    $requete->execute();
    $resultat = $requete->fetch(PDO::FETCH_OBJ);
    $requete->closeCursor();
    return  $resultat;
}
//insert la table commande 
function creation_commande($id_plat, $quantite_client, $total, $date_commande, $etat_commande, $nom_client, $numero_client, $email_client, $adresse_client)
{

    $db = ConnexionBase();

    try {
        $db->beginTransaction();
        $requete = $db->prepare("INSERT INTO commande (id_plat,quantite,total,date_commande,etat,nom_client,telephone_client,email_client,adresse_client) 
                                values (:id_plat,:quantite_client,:total,:date_commande,:etat_commande,:nom_client,:numero_client,:email_client,:adresse_client)");
        $requete->bindValue(':id_plat', $id_plat);
        $requete->bindValue(':quantite_client', $quantite_client);
        $requete->bindValue(':total', $total);
        $requete->bindValue(':date_commande', $date_commande);
        $requete->bindValue(':etat_commande', $etat_commande);
        $requete->bindValue(':nom_client', $nom_client);
        $requete->bindValue(':numero_client', $numero_client);
        $requete->bindValue(':email_client', $email_client);
        $requete->bindValue(':adresse_client', $adresse_client);

        $requete->execute();
        $db->commit();
        $reponse = "OK";
    } catch (PDOException $e) {
        // En cas d'erreur, annuler la transaction
        $db->rollback();
        $reponse = "KO";
        echo "Erreur : " . $e->getMessage();
    }
    return $reponse;
}





//insert la table commande 
function creation_utilisateur($email, $nom, $prenom, $password, $numero)
{

    $db = ConnexionBase();

    try {
        $db->beginTransaction();
        $requete = $db->prepare("INSERT INTO utilisateur(email,nom,prenom,password,numero) values (:email,:nom,:prenom,:password,:numero)");

      
        $requete->bindValue(':email', $email,PDO::PARAM_STR);
        $requete->bindValue(':nom', $nom,PDO::PARAM_STR);
        $requete->bindValue(':prenom', $prenom,PDO::PARAM_STR);
        $requete->bindValue(':password', $password,PDO::PARAM_STR);
        $requete->bindValue(':numero', $numero,PDO::PARAM_STR);
        $requete->execute();
        $db->commit();
        $reponse = "OK";
    } catch (PDOException $e) {
        // En cas d'erreur, annuler la transaction
        $db->rollback();
        $reponse = "KO";
        echo "Erreur : " . $e->getMessage();
    }
    return $reponse;
}
