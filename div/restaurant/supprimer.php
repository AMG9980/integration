<?php
include 'restaurant.php';
$e = new restaurant(1,1,1,1);
$e->supprimer($_POST['id_restaurant']);


?>