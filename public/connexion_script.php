<?php

session_start();
 include "DAO.php";
 $db=connexionbase();
 // La fonction isset() vérifie l'existence d'une variable peu importe si elle est vide ou pas. 
if(isset($_POST['submit'])){ 
//La fonction ! empty() vérifie si une variable n'est pas vide peu importe si elle existe ou pas. 
    if(!empty($_POST['email']) and !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = $_POST['mdp'];
        $utilisateur = connexionUtilisateur($email);

        if($utilisateur != null and password_verify($mdp, $utilisateur->password)){
            //$_SESSION : définit et/ou retourne les informations d'une session.superglobal
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $utilisateur-> id;
            $_SESSION['role'] = $utilisateur->role;
            $_SESSION['numero'] = $utilisateur->numero;
            $role = $utilisateur->role;
        
            if ($role == "admin") {
                header("Location: admin_crud/plats_admin.php");
                echo "redirection admin.php";
            } else {
                header("Location: accueil.php");
                echo "redirection accueil";
            }
        } else /*alors*/  {
            echo "Votre mot de passe ou adresse email  est incorrect";
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }    



        
  

   
}
   







?>