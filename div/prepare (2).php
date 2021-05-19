<?php

include 'produit.php';
$c = new produit(1,1,1,1,1,1,1);
$result =$c->affichertout();
$img=$c->afficherimg();

   
  
?>
 <body onload="prepare()" >
       
      
<script>
function prepare() {
                    
                    var produit1=document.createElement("form");
                    
                    produit1.action="store-catalog.php";
                    produit1.method="post"
                    produit1.style.display= 'none';
                    var i=0;
                    while(i<3){
                    produit1.innerHTML+='<input type="number" id="'+i+'" name="'+i+'" value="'+i+'">'
                    i++;                
                    }
                     produit1.innerHTML+='<input type="submit" id="a">'
                     
                     document.body.appendChild(produit1);
                     
                    produit1.submit();
                }
 </script>
</body>