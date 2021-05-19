<?php
if(isset($_POST['id_commentaire']) && strcmp($_POST['id_commentaire'],'')!=0 ){
    include 'commentaire.php';

    $c = new commentaire($_POST['id_commentaire'],$_POST['id_utilisateur'],$_POST['texte']);
    $c->ajouter();
echo "fadi";
    $result =$c->affichertout();




}


else{
 include 'commentaire.php';
 $c = new commentaire(1,1,1,1,1);
 $result =$c->affichertout();
 
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>AJOUTER </title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body onload="afficher()">
<form class="box" action="ajoutercommentaire.php" method="post">
<h1> AJOUTER VOTRE Commentaire</h1>

<label for="id_commentaire">id_commentaire: <input type="text"  name="id_commentaire" id="1" placeholder="id_commentaire">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur" >

<label for="texte">texte: <input type="text" name="texte"  placeholder="texte" id="4" >

<input type="submit"  value="Ajouter">
</form>
<script>

function afficher() {
   

var result =  '<?php echo json_encode($result); ?>;'

result=result.replace(";","");
var row=JSON.parse(result);

for(var i=0;i<row.length;i++){
  
creatediv(row[i],i);

}
var k =document.getElementById("button")
}


function creatediv(row,i) {
     

     var div = document.createElement('div');
     div.id = 'container';
 
           div.innerHTML='<h>avis'+(i+5)+'</h>'          
     div.innerHTML += '<label for="id_commentaire"> id_avis: <input type="text" style="width:100px" name="id_commentaire" id="a'+i+'" readOnly="readOnly">'
     div.innerHTML += ' <label for="id_utilisateur">id_utilisateur: <input type="text" style="width:100px" name="id_utilisateur" "placeholder="id_utilisateur" id="b'+i+'" readOnly="readOnly" >'

     div.innerHTML +='<label for="texte">avis: <input type="text" name="texte" style="width:100px"  placeholder="texte" id="e'+i+'" readOnly="readOnly">'
     document.body.appendChild(div);
     document.getElementById("a"+i).value = row["id_commentaire"];
          document.getElementById('b'+i).value = row["id_utilisateur"];
              
          document.getElementById('e'+i).value = row["texte"];

     
        
    
 
 
 }




</script>


</body >
</html>