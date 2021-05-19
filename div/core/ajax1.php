<?php


include 'produit.php';
$c = new produit(1,1,1,1,1,1,1);
$img=$c->afficherimg();

if(isset($_GET['name'])){
    echo base64_encode($img[(int)$_GET['name']]['img']);
exit;
}



?>
<body  onload="f()">
    
</body>
<script>
              function f(){  
                  var i=0;
 
                                    for(i=0;i<3;i++){
                                                        var xhr=new XMLHttpRequest();

                xhr.open('GET','ajax1.php?name='+i,true);


                   var a= xhr.onload =function(){
                       return  var i=this.response;

                        console.log("fad");
                    }
                     document.write('<img src="data:image/jpeg;base64,'+a+'"/>')

    
                        xhr.send();
                        
                delete xhr;
                                    }
                    }

                
                
    </script>