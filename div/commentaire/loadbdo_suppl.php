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
    <link rel="stylesheet" href="assets/css/style1.css"">
</head>
<form class="box" action="commentaire/supprimer.php" method="post">
<h1> SUPPRIMER UNE commentaire</h1>


<label for="id_commentaire">id_commentaire: <input type="text"  name="id_commentaire" id="1" placeholder="id_avis "  readOnly="readOnly">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur"  readOnly="readOnly" >

<label for="texte">texte: <input type="text" name="texte"  placeholder="texte" id="3"  readOnly="readOnly" >
<input type="submit"  value="Supprimer">
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
     <body>
</body>
</html>
