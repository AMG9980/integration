<?php
include 'livraison.php';
echo $_POST['id_commande'];
$e = new livraison($_POST['id_commande'],$_POST['id_livreur'],$_POST['id_livraison'],$_POST['adresse']);

$e->ajouter();

?>