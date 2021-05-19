<?php
echo $_GET['id_catalog'];
include 'catalog.php';
$c = new catalog(1,1,1);
$result=$c->afficher($_GET['id_catalog']);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AFFICHAGE </title>
    <link rel="stylesheet" href="style1.css">
</head>
<form class="box">
<h1> AFFICHER UNE cataloge</h1>


<label for="id_catalog">id_catalog: <input type="text"  name="id_catalog" id="1" placeholder="id_catalog "  readOnly="readOnly">
<label for="nom">id_utilisateur: <input type="text" name="nom" id="2" placeholder="nom"  readOnly="readOnly" >
<label for="desc">texte: <input type="text" name="desc"  placeholder="desc" id="3"  readOnly="readOnly" >




<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_catalog"];
     document.getElementById("2").value = row["nom"];
	     document.getElementById("3").value = row["desc"];

    

     

</script>

</form>
<body>
</body>
</html>
