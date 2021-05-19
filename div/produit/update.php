<?php
include 'produit.php';
$e = new produit($_POST['id_produit'],$_POST['description'],$_POST['id_categorie'],$_POST['quantite'],$_POST['prix'],1,$_POST['nom']);
echo $e->modifier();
echo 'fadi';
echo 'succe';
?>