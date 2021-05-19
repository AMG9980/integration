<?php
include 'livraison.php';
$e = new livraison(1,1,1,1);
$e->supprimer($_POST['id_livraison']);


?>