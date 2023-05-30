<?php
function ConnexionBase() {

    try 
    {
        
        //connexion à la bdd phpmyadmin sur le serveur chez moi
       // $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'root', '');
        //connexion à la bdd phpmyadmin sur le serveur
        // $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=aline', 'aline', 'mpiervine');

        //connexion à la bdd phpmyadmin en local 
        $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=the_district', 'admin', 'mpiervine20');
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connexion;

    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
        die("Fin du script");
    }
}

?>