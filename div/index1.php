<?php
session_start();
$_SESSION['count']=[];
$_SESSION['nom']="fadi";
$_SESSION['prenom']="haboubi";
$_SESSION['email']="fadihaboubi@qsd.fr";
$_SESSION['phone']="548484548";

?>

<html>
<input type="button" value="enter" onclick=fadi()>
</html>
<script>
function fadi(){
window.location.assign("store.php")
}
</script>