<?php

session_start();
 include "DAO.php";
 $db=connexionbase();
if(isset($_POST['submit'])){ 

    if(!empty($_POST['email']) and !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);
       
        
        $recupUser =$db->prepare('SELECT* FROM utilisateur WHERE uti_mail = ? AND uti_mdp = ?');
        $recupUser->execute(array($email,$mdp));
        if($recupUser->rowcount() > 0){
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $recupUser->fetch()['id'];
          
           header('Location: accueil.php');
           exit;
 
 
        }
        
    }else{
        echo "Votre mot de passe ou adresse email  est incorrect";
    }

   
}else{
    echo "Veuillez compléter tous les champs";
}
   







?>