<?php
echo $_GET['id_livraison'];
include 'livraison.php';
$c = new livraison(1,1,1,1);
$result=$c->afficher($_GET['id_livraison']);
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
<h1> SUPPRIMER UNE livraison </h1>
<label for="id_livrasion">id_livraison: <input type="text"  name="id_livraison" id="1" placeholder="id_livraison"  readOnly="readOnly">
<label for="id_commande">id_commande: <input type="text" name="id_commande" id="2" placeholder="id_commande"   >
<label for="id_livreur">id_livreur: <input type="text" name="id_livreur"  placeholder="id_livreur" id="3"   >
<label for="adresse">adresse: <input type="text" name="adresse"  placeholder="adresse" id="4"   >
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_livraison"];
     document.getElementById("2").value = row["id_commande"];
	     document.getElementById("3").value = row["id_livreur"];

     document.getElementById("4").value = row["adresse"];


</script>

</script>
     <body>
</body>
</html>
