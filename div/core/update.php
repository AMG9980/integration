<?php
include 'commande.php';
$e = new commande($_POST['id_commande'],$_POST['id_utilisateur'],$_POST['id_livreur'],$_POST['id_produit'],$_POST['quantite'],$_POST['prix']);
$e->modifier();
echo "succes";
?>