<?php
if(isset($_POST['id_reservation']) && strcmp($_POST['id_reservation'],'')!=0 ){
    include 'reservation.php';

    $c = new reservation($_POST['id_reservation'],$_POST['id_restaurant'],$_POST['id_utilisateur'],$_POST['datereservation']);
    $c->ajouter();

    $result =$c->affichertout();




}


else{
 include 'reservation.php';
 $c = new reservation(1,1,1,1,1);
 $result =$c->affichertout();
 
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AJOUTER </title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body onload="afficher()">
<form class="box" action="ajouterreservation.php" method="post">
<h1> AJOUTER VOTRE reservation</h1>

<label for="id_reservation">id_reservation: <input type="text"  name="id_reservation" id="1" placeholder="id_reservation">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur" >
<label for="id_restaurant">id_restaurant: <input type="text" name="id_restaurant"  placeholder="id_restaurant" id="3" readonly >

<label for="datereservation">datereservation: <input type="datetime-local" name="datereservation"  placeholder="datereservation" id="4" >

<input type="submit"  value="Ajouter">
</form>

<script>
var result =  '<?php echo json_encode($_GET['produit']); ?>;'
result=result.replace('"',"");
result=result.replace('"',"");
result=result.replace(";","");


document.getElementById('3').value =result;

</script>

</body >
</html>