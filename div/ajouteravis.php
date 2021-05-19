<?php
if(isset($_POST['id_avis'])){
    include 'avis.php';
    

    $c = new avis($_POST['id_avis'],$_POST['$id_utilisateur'],$_POST['nbetoile'],$_POST['typeavis'],$_POST['avis']);
    $c->ajouter();

    $result =$c->affichertout();




echo "fadi";
}


else{
 include 'avis.php';
 $c = new avis(1,1,1,1,1);
 $result =$c->affichertout();
 
print_r($result);
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
<form class="box" action="ajouteravis.php" method="post">
<h1> AJOUTER VOTRE AVIS</h1>

<label for="id_avis">id_avis: <input type="text"  name="id_avis" id="1" placeholder="id_avis">
<label for="id_utilisateur">id_utilisateur: <input type="text" name="id_utilisateur" id="2" placeholder="id_utilisateur" >
<label for="typeavis">typeavis: <input type="text" name="typeavis"  placeholder="typeavis" id="3" >
<label for="nbretoile">nbretoile: <input type="number" name="nbretoile"  placeholder="nbretoile" step="0.01" min="0" max="5" id="6" >
<label for="avis">avis: <input type="text" name="avis"  placeholder="avis" min="0" max="20" id="4" >

<input type="submit"  value="Ajouter">
</form>

<input type="submit"  value="RETOUR" onlick="retour()">


<script>
    alert("je suit la")

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
     div.innerHTML += '<label for="id_avis"> id_avis: <input type="text" style="width:100px" name="id_avis" id="a'+i+'" readOnly="readOnly">'
     div.innerHTML += ' <label for="id_utilisateur">id_utilisateur: <input type="text" style="width:100px" name="id_utilisateur" "placeholder="id_utilisateur" id="b'+i+'" readOnly="readOnly" >'
     div.innerHTML +='<label for="typeavis">typeavis: <input type="text" name="typeavis" style="width:100px" placeholder="typeavis" id="c'+i+'" readOnly="readOnly" >'
     div.innerHTML +='<label for="nbretoile">nbretoile: <input type="text" name="nbretoile" style="width:100px"  placeholder="nbretoile" min="0" max="20" id="d'+i+'" readOnly="readOnly">'
     div.innerHTML +='<label for="avis">avis: <input type="text" name="avis" style="width:100px"  placeholder="avis" id="e'+i+'" readOnly="readOnly">'
     document.body.appendChild(div);
     document.getElementById("a"+i).value = row["id_avis"];
          document.getElementById('b'+i).value = row["id_utilisateur"];
              document.getElementById('c'+i).value = row["typeavis"];
     
          document.getElementById('d'+i).value = row["nbetoile"];
          document.getElementById('e'+i).value = row["avis"];

     
        
    
 
 
 }




</script>


</body >
</html>