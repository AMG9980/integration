<?php
include 'C:\wamp64\www\div\produit.php';


if (isset($_FILES['img1']))
{echo "fadi"; 
        $fileName = basename($_FILES["img1"]["name"]);
        if ($_FILES['img1']['size'] <= 1000000)
        {
                
                $infosfichier = pathinfo($_FILES['img1']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
echo "fadi"; 
$e = new produit($_POST['id_produit'],$_POST['description'],$_POST['id_categorie'],$_POST['quantite'],$_POST['prix'],$fileName,$_POST['nom']);
$e->ajouter();
                        
                }
        }
}

?>