<?php
echo $_GET['id_catalog'];
include 'catalog.php';
$c = new catalog(1,1,1);
$result=$c->afficher($_GET['id_catalog']);
print_r( $result);
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
<h1> UPDATE UNE commentaire </h1>



<label for="id_catalog">id_catalog: <input type="text"  name="id_catalog" id="1" placeholder="id_catalog "  readOnly="readOnly">
<label for="nom">nom: <input type="text" name="nom" id="2" placeholder="nom"   >
<label for="desc">desc: <input type="text" name="desc"  placeholder="desc" id="3"   >
<input type="submit"  value="UPDATE">
<script>

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace("[","");
result=result.replace("]","");
result=result.replace(";","");
var row=JSON.parse(result);
document.getElementById("1").value = row["id_catalog"];
     document.getElementById("2").value = row["nom_catalog"];
	     document.getElementById("3").value = row["descr"];



</script>

</script>
     <body>
</body>
</html>
