<?php
echo $_GET['id_commentaire1'];
include 'commentaire.php';
$e = new commentaire($_POST['id_commentaire'],$_POST['id_utilisateur'],$_POST['texte']);
$e->ajouter();

?>