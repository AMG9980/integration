<?php
include 'reservation.php';
$e = new reservation($_POST['id_reservation'],$_POST['id_restaurant'],$_POST['id_utilisateur'],$_POST['date_reservation']);
$e->ajouter();

?>