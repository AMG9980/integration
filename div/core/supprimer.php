<?php
include 'commande.php';
$e = new commande(1,1,1,1,1,1);
$fadi=$e->supprimer($_POST['id_commande']);


?>