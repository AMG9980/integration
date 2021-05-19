<?php
echo $_GET['id_produit'];
include 'avis.php';
$c = new avis(1,1,1,1,1);
$result=$c->afficher($_GET['id_produit']);
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
<h1> UPDATE UNE reservation </h1>
<form class="box" action="supprimer.php" method="post">
<h1> SUPPRIMER UNE reservation </h1>
<label for="id_avis">id_avis: <input type="text"  name="id_avis" id="1" placeholder="id_avis "  readOnly="readOnly">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur"  >
<label for="nbetoile">nbetoile: <input type="text" name="nbetoile"  placeholder="nbetoile" id="3"  >
<label for="typeavis">typeavis: <input type="text" name="typeavis" id="4" placeholder="typeavis"  >
<label for="avis">avis: <input type="text" name="avis" id="5" placeholder="avis" id="5"  >
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_avis"];
     document.getElementById("2").value = row["id_utilisateur"];
	     document.getElementById("3").value = row["nbetoile"];

     document.getElementById("4").value = row["typeavis"];
     document.getElementById("5").value = row["avis"];



</script>

</script>
     <body>
</body>
</html>
