<?php
echo $_GET['id_produit'];
echo 'fadi';
include 'produit.php';
$c = new produit(1,1,1,1,1,1,1);
$result=$c->afficher($_GET['id_produit']);
print_r($result);
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

<label for="id_produit"> id_produit: <input type="text" id="1" name="id_produit"  placeholder="id_produit" readonly></label>
<label for="prix"> prix: <input type="text" name="prix" id="2"  placeholder="prix" ></label>
<label for="nom">i nom: <input type="text" name="nom"  id="3"  placeholder="nom"  ></label>
<label for="description">description: <input type="text" id="4" name="description"  placeholder="description"  ></label>
<label for="quantite">quantite: <input type="number" name="quantite" id="5"   placeholder="quantite"  min="0" max="50" ></label>
<label for="id_categorie">id_categorie: <input type="text" name="id_categorie" id="6"  placeholder="id_categorie"  ></label>
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_produit"];
     document.getElementById("2").value = row["prix"];
	     document.getElementById("3").value = row["nom"];

     document.getElementById("4").value = row["description"];
document.getElementById("5").value = row["quantite"];
document.getElementById("6").value = row["id_categorie"];

     

</script>
     <body>
</body>
</html>
