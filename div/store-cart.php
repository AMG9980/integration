<?php
session_start();
if (isset($_GET['produit']) AND isset($_GET['prix']))
{
	 $i=0;

while ($i<count($_SESSION['count']) AND (in_array($_GET['produit'],$_SESSION['count'][$i])==false) ) {
 $i=$i+1;

}
if($i==count($_SESSION['count'])){
$objet=array ($_GET['produit'],1,$_GET['prix']);
array_push($_SESSION['count'],$objet);
}
}
if(isset($_GET['quantite0'])) 
{
for($i=0; $i<count($_SESSION['count']); $i++) 
{

    
    $_SESSION['count'][$i][1]=((int) $_GET['quantite'.$i]);

}
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

<body onload="create();">
    
        



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
                
                    <!--
                    <div class="nk-cart-dropdown">
                        
                        <div class="nk-widget-post">
                            <a href="store-product.html" class="nk-post-image">
                                <img src="assets/images/product-5-xs.jpg" alt="In all revolutions of">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="store-product.html">In all revolutions of</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                        </div>
                        
                        <div class="nk-widget-post">
                            <a href="store-product.html" class="nk-post-image">
                                <img src="assets/images/product-7-xs.jpg" alt="With what mingled joy">
                            </a>
                            <h3 class="nk-post-title">
                                <a href="#" class="nk-cart-remove-item"><span class="ion-android-close"></span></a>
                                <a href="store-product.html">With what mingled joy</a>
                            </h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                        </div>
                        
                        <div class="nk-gap-2"></div>
                        <div class="text-center">
                            <a href="store-checkout.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1 nk-btn-hover-color-white">Proceed to Checkout</a>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</div>
 END: Top Contacts 

    

    <!--
        START: Navbar

        Additional Classes:
            .nk-navbar-sticky
            .nk-navbar-transparent
            .nk-navbar-autohide
    -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                
                <a href="index.html" class="nk-nav-logo">
                    <img src="assets/images2/logo.jpeg" alt="GoodGames" width="199">
                </a>
                
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    
                <li class=" nk-drop-item">
            <a href="elements.html">
                Features
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="elements.html">
                Elements (Shortcodes)
                
            </a>
        </li>
        <li class=" nk-drop-item">
            <a href="forum.html">
                Forum
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="forum.html">
                Forum
                
            </a>
        </li>
        <li>
            <a href="forum-topics.html">
                Topics
                
            </a>
        </li>
        <li>
            <a href="forum-single-topic.html">
                Single Topic
                
            </a>
        </li>
                    </ul>
        </li>
        <li>
            
        </li>
        <li>
            <a href="coming-soon.html">
                Coming Soon
                
            </a>
        </li>
        <li>
            <a href="offline.html">
                Offline
                
            </a>
        </li>
        <li>
            <a href="404.html">
                404
                
            </a>
        </li>
                    </ul>
        </li>
        <li class=" nk-drop-item">
            <a href="blog-list.html">
                Blog
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="news.html">
                News
                
            </a>
        </li>
        <li class=" nk-drop-item">
            <a href="blog-grid.html">
                Blog With Sidebar
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="blog-grid.html">
                Blog Grid
                
            </a>
        </li>
        <li>
            <a href="blog-list.html">
                Blog List
                
            </a>
        </li>
                    </ul>
        </li>
        <li>
            <a href="blog-fullwidth.html">
                Blog Fullwidth
                
            </a>
        </li>
        <li>
            <a href="blog-article.html">
                Blog Article
                
            </a>
        </li>
                    </ul>
        </li>
        <li>
            <a href="gallery.html">
                Gallery
                
            </a>
        </li>
        
        </li>
        <li class="active nk-drop-item">
            <a href="store.php">
                Store
                
            </a><ul class="dropdown">
                        
        <li>
            <a href="store.php">
                Store
                
            </a>
        </li>
        <li>
            <a href="store-product.php">
                Product
                
            </a>
        </li>
        <li>
            <a href="store-catalog.html">
                Catalog
                
            </a>
        </li>
        <li>
            <a href="store-catalog-alt.html">
                Catalog Alt
                
            </a>
        </li>
        <li>
            <a href="store-checkout.php">
                Checkout
                
            </a>
        </li>
        <li class="active">
            <a href="store-cart.php">
                Cart
                
            </a>
        </li>
                    </ul>
        </li>
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

    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images2/logo.jpeg" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">

                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <!-- START: Breadcrumbs -->
<div class="nk-gap-1"></div>
<div class="container">
    <ul class="nk-breadcrumbs">
        
        
        <li><a href="index.html">Home</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><a href="store.php">Store</a></li>
        
        
        <li><span class="fa fa-angle-right"></span></li>
        
        <li><span>Cart</span></li>
        
    </ul>
</div>
<!-- END: Breadcrumbs -->
<script type="text/javascript" >

                    function create(){
                        
var result =  '<?php echo json_encode($_SESSION['count']); ?>;'
alert(result);

result=result.replace(";","");
var row=JSON.parse(result);
var i=0;
var somme=0;
var lig=document.createElement("br"); 
 for(i=0;i<row.length;i++){
            var quantite =document.createElement("div");
   
            quantite.innerHTML='<input style= "height:22px" id="q'+i+'" type="number"  value="'+row[i][1]+'" min="1" max="21" >'
            


var node = document.createElement("div");                
var textnode = document.createTextNode(row[i][0]);   
      node.appendChild(textnode); 
document.getElementById("1").appendChild(node);
document.getElementById("1").appendChild(lig);

    
var node = document.createElement("div");                
var textnode = document.createTextNode(row[i][2]);         
node.appendChild(textnode); 
document.getElementById("2").appendChild(node); 
document.getElementById("2").appendChild(lig);
document.getElementById("3").appendChild(quantite);
document.getElementById("3").appendChild(lig);

var total =document.createElement("div");
            var mon=parseInt(row[i][2]); 

            var qua=document.getElementById('q'+i).value;
            mon=mon*qua;
            somme=somme+mon;
            total.innerHTML='<input style= "height:22px" type="number" id="t'+i+'" value="'+mon+'" readonly>';
            document.getElementById("4").appendChild(total);
document.getElementById("4").appendChild(lig);


}
var textnode = document.createTextNode(somme);
document.getElementById("subtotal").appendChild(textnode);
var textnode = document.createTextNode(somme+6);
document.getElementById("total+del").appendChild(textnode);






                    }

 function updatecard(){
     
    
    
    
    
    var result =  '<?php echo json_encode($_SESSION['count']); ?>;'



result=result.replace(";","");
var row=JSON.parse(result);
var i=0;
var quantite="";
for(i=0;i<row.length;i++){
   quantite+='quantite'+i+'='+document.getElementById("q"+i).value;
   if(document.getElementById("q"+(i+1)) != null){
    quantite+='&'
   }
    
}
alert(quantite);

location.replace('store-cart.php?'+quantite);

}                   
        
</script>
<div  class="container">
    <div class="nk-store nk-store-cart">
        <div class="table-responsive">

            <!-- START: Products in Cart -->
            <table class="table nk-store-cart-products">
                <tbody>
                    
                        <tr>
                            
                            <td class="nk-product-cart-title" id="1">
                                <h5 class="h6">Product:</h5>
                                <h2 class="nk-post-title h4">
                                </h2>
                            </td>
                            <td class="nk-product-cart-price" id="2">
                                <h5 class="h6">Price:</h5>
                            </td>
                            <td class="nk-product-cart-quantity" id="3">
                                <h5 class="h6">Quantity:</h5>
                                 <div class="nk-form">
                                </div>
                            </td>
                            <td class="nk-product-cart-total" id="4">
                                <h5 class="h6">Total:</h5>

                            </td>
                            <td class="nk-product-cart-remove"><a href="#"><span class="ion-android-close"></span></a></td>
                        </tr>
                    


                    
                </tbody>                 
            </table>                  
                    
 
        </div>
        <div class="nk-gap-1"></div>
        <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" onclick="updatecard()">Update Cart</a>
        </form>  
        <div  class="clearfix"></div>
        <div class="nk-gap-2"></div>
        <div class="row vertical-gap">
            <div style ="color:gray;" class="col-md-6">

                

            </div>
            <div  style="width:100px" class="col-md-6">
                <!-- START: Cart Totals -->
                <h3 class="nk-title h4">Cart Totals</h3>
                <table class="nk-table nk-table-sm">
                    <tbody>
                        <tr class="nk-store-cart-totals-subtotal">
                            <td>
                                Subtotal
                            </td>
                            <td id="subtotal">

                            </td>
                        </tr>
                        <tr class="nk-store-cart-totals-shipping">
                            <td>
                            delivery
                            </td>
                            <td>
                                6dt
                            </td>
                        </tr>
                        <tr class="nk-store-cart-totals-total">
                            <td>
                                Total
                            </td>
                            <td name="total" id="total+del">
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END: Cart Totals -->
            </div>
        </div>
        <!-- START: Calculate Shipping -->
        <h3 class="nk-title h4">Calculate delivrey</h3>
                <form  style ="color:gray;" action="store-checkout.php" method="post" class="nk-form">
                    <label for="region-sel">region <span class="text-main-1">*</span>:</label>
                    <select name="region" class="form-control required" id="region-sel">
                        <option name="tunis" value="tunis"> Tunis</option>
                        <option name="beja" value="beja">  Beja</option>
                        <option name="ariana" value="ariana">  Ariana</option>
                        <option name="sousse" value="sousse">  Sousse</option>

                    </select>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-sm-6">
                            <label for="state">adresse <span class="text-main-1">*</span>:</label>
                            <input type="text" class="form-control required" name="adresse" id="adresse">
                        </div>
                        <div class="col-sm-6">
                            <label for="zip">Postcode / ZIP <span class="text-main-1">*</span>:</label>
                            <input type="number" class="form-control required" name="zip" id="zip">
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <a class="nk-btn nk-btn-rounded nk-btn-color-white float-right" onclick="">Update Totals</a>
                <!-- END: Calculate Shipping -->

        <div class="nk-gap-2"></div>
  <input type ="submit" class="nk-btn nk-btn-rounded nk-btn-color-main-1 float-right" value="Proceed to Checkout"/>
        <div class="clearfix"></div>
    </div>
</div>
</form>

<div class="nk-gap-2"></div>


        
            <!-- START: Footer -->
<footer class="nk-footer">

    <div class="container">
        <div class="nk-gap-3"></div>
        <div class="row vertical-gap">
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
                    <div class="nk-widget-content">
                        <form action="https://html.nkdev.info/goodgames/php/ajax-contact-form.php" class="nk-form nk-form-ajax">
                            <div class="row vertical-gap sm-gap">
                                <div class="col-md-6">
                                    <input type="email" class="form-control required" name="email" placeholder="Email *">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control required" name="name" placeholder="Name *">
                                </div>
                            </div>
                            <div class="nk-gap"></div>
                            <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
                            <div class="nk-gap-1"></div>
                            <button class="nk-btn nk-btn-rounded nk-btn-color-white">
                                <span>Send</span>
                                <span class="icon"><i class="ion-paper-airplane"></i></span>
                            </button>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">Latest</span> Posts</h4>
                    <div class="nk-widget-content">
                        <div class="row vertical-gap sm-gap">
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/post-1-sm.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">best FOOD ever ,thx man!!!</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span> AVR 24, 2021
                                        <span class="fa fa-comments"></span> <a href="#">4</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="nk-widget-post-2">
                                    <a href="blog-article.html" class="nk-post-image">
                                        <img src="assets/images/cris.jpg" alt="">
                                    </a>
                                    <div class="nk-post-title"><a href="blog-article.html">great food fast service ,total perfecting!!!!</a></div>
                                    <div class="nk-post-date">
                                        <span class="fa fa-calendar"></span>  , AVR 24, 2021
                                        <span class="fa fa-comments"></span> <a href="#">7</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="nk-widget">
                    <h4 class="nk-widget-title"><span class="text-main-1">In</span> Twitter</h4>
                    <div class="nk-widget-content">
                        <div class="nk-twitter-list" data-twitter-count="1"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-3"></div>
    </div>

    <div class="nk-copyright">
        <div class="container">
            <div class="nk-copyright-left">
                Copyright &copy; 2021 <a href="" target="_blank">nK</a>
            </div>
            <div class="nk-copyright-right">
                <ul class="nk-social-links-2">
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
        </div>
    </div>
</footer>
<!-- END: Footer -->

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="assets/images2/background.jpg" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->
    

    
        <!-- START: Login Modal -->
<div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Login Modal -->

    

    
<!-- START: Scripts -->




    
</body>

<!-- Mirrored from html.nkdev.info/goodgames/store-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:46 GMT -->
</html>
