<?php
echo $_GET['id_reservation'];
include 'reservation.php';
$c = new reservation(1,1,1,1);
$result=$c->afficher($_GET['id_reservation']);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AFFICHAGE </title>
    <link rel="stylesheet" href="assets/css/style1.css"">
</head>
<form class="box" action="supprimer.php" method="post">
<h1> SUPPRIMER UNE reservation</h1>
<label for="id_reservation">id_reservation: <input type="text"  name="id_reservation" id="1" placeholder="id_reservation "  readOnly="readOnly">
<label for="id_restaurant">id_restaurant: <input type="text" name="id_restaurant" id="2" placeholder="id_restaurant"  readOnly="readOnly" >
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur"  placeholder="id_utilisateur" id="3"  readOnly="readOnly" >
<label for="date_reservation">date_reservation: <input type="text" name="date_reservation" id="4" placeholder="date_reservation"  readOnly="readOnly" >
<input type="submit"  value="Supprimer">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_reservation"];
     document.getElementById("2").value = row["id_restaurant"];
	     document.getElementById("3").value = row["id_utilisateur"];

     document.getElementById("4").value = row["date_reservation"];


</script>
     <body>
</body>
</html>
