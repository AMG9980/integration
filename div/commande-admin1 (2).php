<?php


include 'commande.php';
function afficher(){
$c = new commande(1,1,1,1);
return $result=$c->affichertout();

}

function trier(string $var){
    $c = new commande(1,1,1,1);
    return $result=$c->trier($var);
}
if(isset($_GET['name'])){
    echo json_encode(trier($_GET['name']));
    exit;

}

?>
<!DOCTYPE html>
<!--
    Name: GoodGames - Game Portal / Store and eSports HTML Template
    Version: 1.5.1
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://1.envato.market/goodgames
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2019.
-->
    
<html lang="en">

<!-- Mirrored from html.nkdev.info/goodgames/store-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>GoodGames | Cart</title>

    <meta name="description" content="GoodGames - Bootstrap template for communities and games store">
    <meta name="keywords" content="game, gaming, template, HTML template, responsive, Bootstrap, premium">
    <meta name="author" content="_nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cOpen+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- IonIcons -->
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- Seiyria Bootstrap Slider -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.min.css">

    <!-- Summernote -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/summernote/dist/summernote-bs4.css">

    <!-- GoodGames -->
    <link rel="stylesheet" href="assets/css/goodgames.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>


<!--
    Additional Classes:
        .nk-page-boxed
-->

    
        



<!--
    Additional Classes:
        .nk-header-opaque
-->
<header class="nk-header nk-header-opaque">

    
    
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-left">
            <ul class="nk-social-links">
                <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>
                <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

                <!-- Additional Social Buttons
                    <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                    <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                    <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                    <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                    <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                    <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                    <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                    <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                    <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                    <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                    <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                    <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                    <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                    <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                    <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                    <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                    <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                    <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                    <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                    <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
                    <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
                -->
            </ul>
        </div>
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                
                
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalLogin">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
                
                
                <li style ="left: 100%;">
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge">0</span>
                    </span>
                </li>

                <a href="store-product.html" class="nk-post-image"></a>
                
                    
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images2/logo.jpeg" alt="GoodGames" width="199">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    
        
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    
                        <li class="single-icon d-lg-none">
                            <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->

</header>





        
       
            
               
            


        
            

     <body>


</div>
<script src="div1.js"> </script>

    

<script type="text/javascript">

function afficher() {
    if (document.getElementById("AFFICHER").hasChildNodes()) {
alert("yes");
delete result;
document.getElementById("AFFICHER").innerHTML = '';

}

var result =  '<?php echo json_encode(afficher()); ?>;'
alert(result);
result=result.replace(";","");

var row=JSON.parse(result);
alert(result);

for(var i=0;i<row.length;i++){
  
creatediv(row[i],i);
}
var k =document.getElementById("button")

}
function trier() {
    if (document.getElementById("AFFICHER").hasChildNodes()) {
alert("yes");
delete result;
document.getElementById("AFFICHER").innerHTML = '';

}

var xhr=new XMLHttpRequest();
                xhr.open('GET','commande-admin1.php?name='+document.getElementById('option').value ,true);
                   xhr.onload =function() {
                    var result=this.response
                       alert(result);
                       result=result.replace(";","");


var row=JSON.parse(result);

for(var i=0;i<row.length;i++){
  
creatediv(row[i],i);
}
                    
                }
                xhr.send();

            }






</script>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2021 <a href="" target="_blank">nK</a>
            </div>
        </div>     
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images2/background.jpg" alt="">



    <link rel="stylesheet" href="styl.css">

    <form class="ajouter" id ="fad" action="commande/ajouter.php" method="post">

<h1> AJOUTER UNE commande</h1>

<label for="id_commande"> id_commande: <input type="text"  name="id_commande"  placeholder="id_commande"></label>
<label for="id_utilisateur"> id_utilisateur: <input type="text" name="id_utilisateur"  placeholder="id_utilisateur" ></label>
<label for="id_livreur">id_livreur: <input type="text" name="id_livreur"  placeholder="id_livreur"  ></label>
<label for="prix">prix: <input type="number" name="prix"  placeholder="prix" step="0.01" min="0"   ></label>


<input type="submit"  value="Ajouter">

</form>
<div class="box" >
<h1> afficher UNE commande</h1>
 
<label for="id_commande1" > id_commande: <input  type="text" id="id_commande" name="id_commande1" ></label>

<input type="submit"  value="Supprimer" onclick="supprimer()">
<input type="submit"  value="Modifier" onclick="modifier()">
<input type="submit"  value="Rechercehr" onclick="rechercehr()">

<script>
        function modifier() {
            var idcommande =document.getElementById("id_commande").value;
            alert(idcommande)
            window.open(
              "commande/loadbdo_update?id_commande="+idcommande, "_blank");
        }
        function supprimer() {
            var idcommande =document.getElementById("id_commande").value;
            alert(idcommande)
            window.open(
              "commande/loadbdo_supp?id_commande="+idcommande, "_blank");
        }
        function rechercehr() {
            var idcommande =document.getElementById("id_commande").value;
            alert(idcommande)
            window.open(
              "commande/loadbdo_affiche?id_produit="+idcommande, "_blank");
        }
    </script>
</div>
<body>
 
    
<div class="container" style="height: 200px;">

</div>
<h1>AFFICHAGE DES commande </h1>
<input type="button" id="button" value="AFFICHER" onclick="afficher()">

<input type="button" id="button1" value="Refresh" onclick="window.location.reload();">
<input type="text" id="option"  placeholder="option :">

<input type="button" id="button" value="TRIER" onclick="trier()">

<div id="AFFICHER" >

</div>


</body>

</html>
