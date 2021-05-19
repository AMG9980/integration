include 'restaurant';

print_r($_FILES['img1']);
if (isset($_FILES['img1']))
{ 
        $fileName = basename($_FILES["img1"]["name"]);
        if ($_FILES['img1']['size'] <= 1000000)
        {
                
                $infosfichier = pathinfo($_FILES['img1']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
echo "fadi"; 
$e = new restaurant($_POST['id_restaurant'],$_POST['adresse'],$fileName,$_POST['nom']);
$e->modifier();
                        
                }
        }
}