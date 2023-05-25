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
       
        
        $recupUser =$db->prepare('SELECT * FROM utilisateur WHERE email = ? AND password = ?');
        $recupUser->execute(array($email,$mdp));
        $recupUser = $requete->fetch(PDO::FETCH_OBJ);
        $requete->closeCursor();
        return $recupUser;
        
        var_dump($recupUser);

       /* if= a si*/ if($recupUser->rowcount() > 0){
        //$_SESSION : définit et/ou retourne les informations d'une session.superglobal
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            $_SESSION['prenom'] = $prenom;
            $_SESSION['role'] = $recupUser->fetch()['role'];
           
            if  ($role == "admin") {
                header("public/admin_crud/plats_admin.php");
                echo "redirection admin";
            } else {
                header("Location: ../accueil.php");
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