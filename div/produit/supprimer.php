<?php
include 'produit.php';
$e = new produit(1,1,1,1,1,1,1);
$e->supprimer($_POST['id_produit']);


?>