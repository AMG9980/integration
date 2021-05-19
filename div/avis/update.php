<?php
include 'avis.php';
$e = new avis($_POST['id_avis'],$_POST['id_utilisateur'],$_POST['nbetoile'],$_POST['typeavis'],$_POST['avis']);
$e->modifier();

?>