<?php
include 'reservation.php';
$e = new reservation(1,1,1,1);
$e->supprimer($_POST['id_reservation']);


?>