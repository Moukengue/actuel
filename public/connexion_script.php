<?php

session_start();
 include "DAO.php";
 $db=connexionbase();
if(isset($_POST['submit'])){ 

    if(!empty($_POST['email']) and !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = $_POST['mdp'];
       
        
        $recupUser =$db->prepare('SELECT prenom FROM utilisateur WHERE email = ? AND password = ?');
        $recupUser->execute(array($email,$mdp));
        if($recupUser->rowcount() > 0){
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $recupUser->fetch()['id'];
            $_SESSION['prenom'] = $prenom;
          
           header('Location: ../accueil.php');
           exit;
 
 
        }
        
    }else{
        echo "Votre mot de passe ou adresse email  est incorrect";
    }

   
}else{
    echo "Veuillez compléter tous les champs";
}
   







?>