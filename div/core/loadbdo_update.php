<?php
echo $_GET['id_commande'];
include 'commande.php';
$c = new commande(1,1,1,1,1,1);
$result=$c->afficher($_GET['id_commande']);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AFFICHAGE </title>
    <link rel="stylesheet" href="style.css">
</head>
<form class="box" action="update.php" method="post">
<h1> UPDATE UNE COMMANDE </h1>
<label for="id_commande"> id_commande: <input type="text"  name="id_commande" id="1" readOnly="readOnly" >
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur">
<label for="id_livreur">id_livreur: <input type="text" name="id_livreur"  placeholder="id_livreur" id="3" >
<label for="quantite">quantite: <input type="text" name="quantite"  placeholder="quantite" min="0" max="20" id="4">
<label for="id_produit">id_produit: <input type="text" name="id_produit"  placeholder="id_produit" id="5" >
<label for="prix"> prix: <input type="text" name="prix"  placeholder="prix" step="0.01" min="0" max="50" id="6" >
<input type="submit"  value="Update">
</form>
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");




var row=JSON.parse(result);



	 document.getElementById("1").value = row["id_commande"];
     document.getElementById("2").value = row["id_utilisateur"];
	     document.getElementById("3").value = row["id_livreur"];

     document.getElementById("4").value = row["quantite"];

     document.getElementById("5").value = row["id_produit"];
     document.getElementById("6").value = row["prix"];

</script>
     <body>
</body>
</html>