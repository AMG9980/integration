<?php
include 'catalog.php';
$e = new catalog(1,1,1);
$e->supprimer($_POST['id_catalog']);


?>