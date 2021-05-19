<?php
include 'commentaire.php';
$e = new commentaire(1,1,1);
$e->supprimer($_POST['id_commentaire']);


?>