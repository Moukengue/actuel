<?php 

// Contrôle de l'ID (si inexistant ou <= 0, retour à la liste) :
if (!(isset($_GET['id'])) || intval($_GET['id']) <= 0) GOTO TrtRedirection;
$id = $_GET['id'];

// Si la vérification est ok :
  
    include "../../DAO.php";
    supprimer_plats($id);

// Si OK: redirection vers la page disc.php
TrtRedirection:
header("Location: ../plats_admin.php");
exit;
?>