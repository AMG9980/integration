<?php
include 'commande.php';
$e = new commande($_POST['id_commande'],$_POST['id_utilisateur'],$_POST['id_livreur'],$_POST['prix']);
$e->ajouter();

?>

