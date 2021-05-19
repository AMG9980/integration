<?php
include 'catalog.php';
$e = new catalog($_POST['id_catalog'],$_POST['nom'],$_POST['desc']);
$e->modifier();
echo "succes";
?>