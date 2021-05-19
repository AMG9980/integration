<?php
include 'livraison.php';
$e = new livraison($_POST['id_commande'],$_POST['id_livreur'],$_POST['id_livraison'],$_POST['adresse']);
$e->modifier();

?>