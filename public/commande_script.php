<?php


// session_start();
 include "DAO.php";
 $db=connexionbase();
// if(isset($_POST['submit'])){ 

//     if(!empty($_POST['email']) and !empty($_POST['mdp'])){
//         $email = htmlspecialchars($_POST['email']);
//         $mdp = $_POST['mdp'];
       
        
//         $recupUser =$db->prepare('SELECT* FROM utilisateur WHERE email = ? AND password = ?');
//         $recupUser->execute(array($email,$mdp));
//         if($recupUser->rowcount() > 0){
//             $_SESSION['email'] = $email;
//             $_SESSION['id'] = $recupUser->fetch()['id'];
          
//            header('Location: ../accueil.php');
//            exit;
 
 
//         }
        
//     }else{
//         echo "Votre mot de passe ou adresse email  est incorrect";
//     }

   
// }else{
//     echo "Veuillez compléter tous les champs";
// }
// var_dump($_POST);
$id_plat = $_POST["id_plat"];
$prix = $_POST["prix"];

if(isset($_POST["nom"])){
    //retirer les balises html avec la fonction php strip_tags()!!
    $nom_client = strip_tags($_POST["nom"]);
}
if(isset($_POST["adresse"])){
    $adresse_client = $_POST["adresse"];
}

if(isset($_POST["quantite"])){
    $quantite_client = $_POST["quantite"];
    $total = $quantite_client * $prix;
}
if(isset($_POST["numero"])){
    $numero_client = $_POST["numero"];
}
if(isset($_POST["email"])){
    $email_client = $_POST["email"];
}

$date_commande = date("Y-m-d h:i:s");
$etat_commande = "En cours de préparation";

// var_dump($id_plat, $prix, $nom_client, $adresse_client, $numero_client, $email_client, $quantite_client, $total, $date_commande);

$nouvelle_commande = creation_commande($id_plat, $quantite_client, $total, $date_commande, $etat_commande, $nom_client, $numero_client, $email_client, $adresse_client);
   
if($nouvelle_commande == "OK"){
    // echo "Votre commande a été enregistrée";
    header('Location: /accueil.php');
}else{
    echo "Une erreur est survenue. Veuillez réessayer.";
}



?>