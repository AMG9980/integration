<?php
echo $_GET['id_restaurant'];
include 'restaurant.php';
$c = new restaurant(1,1,1,1,1,1,1);
$result=$c->afficher($_GET['id_restaurant']);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AFFICHAGE </title>
    <link rel="stylesheet" href="style1.css">
</head>
<form class="box" action="update.php" method="post">
<h1> UPDATE UNE produit </h1>
<label for="id_restaurant"> id_restaurant: <input type="text"  name="id_restaurant"  placeholder="id_restaurant"></label>
<label for="adresse"> adresse: <input type="text"  name="adresse"  placeholder="adresse"></label>

<label for="nom"> nom: <input type="text" name="nom"  placeholder="nom"  ></label>
<label for="img1">img: <input type="file" name="img1"  placeholder="img" ></label>
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_restaurant"];
     document.getElementById("2").value = row["adresse"];
	     document.getElementById("3").value = row["nom"];


     

</script>
     <body>
</body>
</html>
