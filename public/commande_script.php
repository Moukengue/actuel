<?php


// session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

 include "DAO.php";
 $db=connexionbase();

// var_dump($_POST);
$id_plat = $_POST["id_plat"];
$prix = $_POST["prix"];
$plat =$_POST["plat"];

if(isset($_POST["nom"])){
    //retirer les balises html avec la fonction php strip_tags()!!
    $nom_client = strip_tags($_POST["nom"]);
}
if(isset($_POST["adresse"])){
    $adresse_client = $_POST["adresse"];
}

if(isset($_POST["quantite"])){
    $quantite_client =  ($_POST["quantite"]);
    $total = $quantite_client * $prix;
}
if(isset($_POST["numero"])){
    $numero_client =  ($_POST["numero"]);
}
if(isset($_POST["email"])){
    $email_client =  strip_tags ($_POST["email"]);
}

$date_commande = date("Y-m-d h:i:s");
$etat_commande = "En cours de préparation";

// var_dump($id_plat, $prix, $nom_client, $adresse_client, $numero_client, $email_client, $quantite_client, $total, $date_commande);

$nouvelle_commande = creation_commande($id_plat, $quantite_client, $total, $date_commande, $etat_commande, $nom_client, $numero_client, $email_client, $adresse_client);
   
// var_dump($nouvelle_commande); die();

if($nouvelle_commande == "OK"){

    //il faut instancier le PHP Mailer!

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host       = 'localhost'; 
    $mail->SMTPAuth   = false; 
    // On configure le port SMTP (MailHog)
   $mail->Port       = 1025; 
   $mail->setFrom('from@sender.com', 'The District Company');

   $to = $email_client;
   $mail->addAddress($to, $nom_client); 

   $mail->Subject = 'Sujet';

   // On précise si l'on veut envoyer un email sous format HTML 
    $mail->isHTML(true);
   // Corps du message
   $mail->Body = "<div> 
                    <h4>On vous remercie pour votre confiance,Vous trouverez ci-dessous les détails de votre commande du " .$date_commande . ":</h4>
                    <br>
                    <p> Plat : " . $plat . "</p><br>
    Prix : ".  $prix. ",<br> Quantité : " . $quantite_client . ",<br> Total : " . $total . " euros.</div>" ;
    
    // On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if ($mail){
    try {
        $mail->send();
        // echo 'Email envoyé avec succès';
        header('Location:accueil.php');
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $e->getMessage();
        }
    }
    // $x = mail($to, 'subject' . time(), 'Test email working', 'From: ' . $from);
    // var_dump($x); die();// true means successfull.

    // echo "Votre commande a été enregistrée";
    // header('Location: /accueil.php');
    
    
}else{
    echo "Une erreur est survenue. Veuillez réessayer.";
}



?>