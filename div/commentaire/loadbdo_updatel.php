<?php
echo $_GET['id_commentaire'];
include 'commentaire.php';
$c = new commentaire(1,1,1);
$result=$c->afficher($_GET['id_commentaire']);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AFFICHAGE </title>
    <link rel="stylesheet" href="style1.css">
</head>
<form class="box" action="commentaire/update.php" method="post">
<h1> UPDATE UNE commentaire </h1>



<label for="id_commentaire">id_commentaire: <input type="text"  name="id_commentaire" id="1" placeholder="id_avis "  readOnly="readOnly">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur"   >
<label for="texte">texte: <input type="text" name="texte"  placeholder="texte" id="3"   >
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'


result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_commentaire"];
     document.getElementById("2").value = row["id_utilisateur"];
	     document.getElementById("3").value = row["texte"];



</script>

</script>
     <body>
</body>
</html>
