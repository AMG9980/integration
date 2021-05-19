<?php
include 'commentaire.php';
$e = new commentaire($_POST['id_commentaire'],$_POST['id_utilisateur'],$_POST['texte']);
$e->modifier();

?>