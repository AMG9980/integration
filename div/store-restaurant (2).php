<?php

session_start();



    include 'restaurant.php';
    $c = new restaurant(1,1,1,1);
    $result =$c->affichertout();
    $img=$c->afficherimg();
    if(isset($_GET['name'])){
        echo base64_encode($img[(int)$_GET['name']]['img']);
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

<!-- Mirrored from html.nkdev.info/goodgames/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>FOODIEZ | Store</title>

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
<body onload ="afficher()">
    
        



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
                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
                <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>

               
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
                
                
                <li>
                    <span class="nk-cart-toggle">
                        <span class="fa fa-shopping-cart"></span>
                        <span class="nk-badge">27</span>
                    </span>
                    <div class="nk-cart-dropdown">
                        
                        
                        
                        
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
            <a href="widgets.html">
                Widgets
                
            </a>
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
       
        </li>
        <li class="active nk-drop-item">
            <a href="store.html">
                Store
                
            </a><ul class="dropdown">
                        
        <li class="active">
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
            <a href="store-catalog.php">
                Catalog
                
            </a>
        </li>
        
        <li>
            <a href="store-checkout.php">
                Checkout
                
            </a>
        </li>
        <li>
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
                <img src="assets/images/logo.svg" alt="" width="120">
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
        
        <li><span>FOODIEZ</span></li>
        
    </ul>
</div>

< <div class="nk-gap-1"></div> 
<!-- END: Breadcrumbs -->

        

        
<div class="container">

    

    
    <script src="div1.js"> </script>
    <div class="nk-gap-2"></div>
    <div class="nk-gap-2"></div>

    <div class="nk-gap-2"></div>
    <div class="row vertical-gap" >
        <div class="col-lg-8",id="col-lg-8" >
            <!-- START: Products -->
<script >
            
                function afficher() {
                    

    var result =  '<?php echo json_encode($result); ?>;'
                var i=0;
                result=result.replace(";","");
                var row=JSON.parse(result);
                while(i<row.length){
                    
                   
createproduit(row,i);
i++;            


}
alert(document.getElementById('a'+0)); 

for(i=0;i<row.length;i++){
var f=[];
f[0]=i;

    var xhr=new XMLHttpRequest();

                xhr.open('GET','store-restaurant.php?name='+i,false);
                   xhr.onload =function() {
                    var img=this.response
                    document.getElementById('a'+f[0]).innerHTML = '<img src="data:image/jpeg;base64,'+img+'"/>';
                       
                       console.log("fad");
                    }
                    xhr.send();
                        delete xhr;
                    }
                    
                    
                    }


       
            
                
                
                
                function createproduit(row,i){

var img1=document.createElement('div');
img1.id = 'a'+i;
var contenaire= document.createElement('div');
contenaire.className="col-md-6";
var produit= document.createElement('div');
produit.className="nk-product-image";
produit.appendChild(img1);
                
produit.innerHTML+='<div class="nk-product-cont"><h3 class="nk-product-title h5"> <a href="store-product.html">'+row[i]['nom']+'</a></h3> <div class="nk-gap-1"></div>'
produit.innerHTML+='<span class="nk-product-rating"><span class="nk-product-rating-front" style="width: ;"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>'
   
produit.innerHTML+= '<span class="nk-product-rating-back"><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></span>'


produit.innerHTML+= '<div class="nk-gap-1"></div><div class="nk-product-price">'+row[i]['adresse']+'dt</div><div class="nk-gap-1"></div> <a href="ajouterreservation.php?produit='+row[i]['nom']+ '"class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">RESERVATION</a>'
produit.innerHTML+= '<div class="nk-gap-1"></div><div class="nk-gap-1"></div> <a href="ajouteravis.php?produit='+row[i]['nom']+'"class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">AJOUTER VOTRE AVIS</a>'


contenaire.appendChild(produit);

document.getElementById("row vertical-gap").appendChild(contenaire);
              
        
}


            
                
                
                
                
                
                </script>

            <div style="background:#2f4f4f		;" class="row vertical-gap" id="row vertical-gap">
                
             
                
                <div class="col-md-6">
                    
                </div>    
            </div> 

            <!-- END: Products -->

            <!-- 
            <div class="nk-gap-3"></div>
            <div class="nk-pagination nk-pagination-center">
                <a href="#" class="nk-pagination-prev">
                    <span class="ion-ios-arrow-back"></span>
                </a>
                <nav>
                    <a class="nk-pagination-current" href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <span>...</span>
                    <a href="#">14</a>
                </nav>
                <a href="#" class="nk-pagination-next">
                    <span class="ion-ios-arrow-forward"></span>
                </a>
            </div>
            <!-- END: Pagination -->
        </div>
        <div class="col-lg-4">
            <!--
                START: Sidebar

                Additional Classes:
                    .nk-sidebar-left
                    .nk-sidebar-right
                    .nk-sidebar-sticky
            -->
            <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type something...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>

<script>
function filtrer(){
if(document.getElementById('min').value !='' && document.getElementById('max').value != ''){
    location.replace("store-catalog.php?min="+document.getElementById('min').value+"&max="+document.getElementById('max').value);
}



}
</script>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
    <div class="nk-widget-content">
        <!--
            Social Links 3

            Additional Classes:
                .nk-social-links-cols-5
                .nk-social-links-cols-4
                .nk-social-links-cols-3
                .nk-social-links-cols-2
        -->
        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>

            <!-- Additional Social Buttons
                <li><a class="nk-social-behance" href="#"><span class="fab fa-behance"></span></a></li>
                <li><a class="nk-social-bitbucket" href="#"><span class="fab fa-bitbucket"></span></a></li>
                <li><a class="nk-social-dropbox" href="#"><span class="fab fa-dropbox"></span></a></li>
                <li><a class="nk-social-dribbble" href="#"><span class="fab fa-dribbble"></span></a></li>
                <li><a class="nk-social-deviantart" href="#"><span class="fab fa-deviantart"></span></a></li>
                <li><a class="nk-social-flickr" href="#"><span class="fab fa-flickr"></span></a></li>
                <li><a class="nk-social-foursquare" href="#"><span class="fab fa-foursquare"></span></a></li>
                <li><a class="nk-social-github" href="#"><span class="fab fa-github"></span></a></li>
                <li><a class="nk-social-linkedin" href="#"><span class="fab fa-linkedin"></span></a></li>
                <li><a class="nk-social-medium" href="#"><span class="fab fa-medium"></span></a></li>
                <li><a class="nk-social-odnoklassniki" href="#"><span class="fab fa-odnoklassniki"></span></a></li>
                <li><a class="nk-social-paypal" href="#"><span class="fab fa-paypal"></span></a></li>
                <li><a class="nk-social-reddit" href="#"><span class="fab fa-reddit"></span></a></li>
                <li><a class="nk-social-skype" href="#"><span class="fab fa-skype"></span></a></li>
                <li><a class="nk-social-soundcloud" href="#"><span class="fab fa-soundcloud"></span></a></li>
                <li><a class="nk-social-steam" href="#"><span class="fab fa-steam"></span></a></li>
                <li><a class="nk-social-slack" href="#"><span class="fab fa-slack"></span></a></li>
                <li><a class="nk-social-tumblr" href="#"><span class="fab fa-tumblr"></span></a></li>
                <li><a class="nk-social-vimeo" href="#"><span class="fab fa-vimeo"></span></a></li>
                <li><a class="nk-social-vk" href="#"><span class="fab fa-vk"></span></a></li>
                <li><a class="nk-social-wordpress" href="#"><span class="fab fa-wordpress"></span></a></li>
            -->
        </ul>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
    <div class="nk-widget-content">
        
        <div class="nk-widget-post">
            <a href="store-product.html" class="nk-post-image">
                <img src="assets/images2/kafteji.jpg" alt="So saying he unbuckled">
            </a>
            <h3 class="nk-post-title"><a href="store-product.html">kafteji</a></h3>
            
    <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 80%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

            <div class="nk-product-price">dt 5.00</div>
        </div>
        
        <div class="nk-widget-post">
            <a href="store-product.html" class="nk-post-image">
                <img src="assets/images2/pizza2.jpg" alt="However, I have reason">
            </a>
            <h3 class="nk-post-title"><a href="store-product.html">PIZZA</a></h3>
            
    <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 50%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

            <div class="nk-product-price">dt 6</div>
        </div>
        
        <div class="nk-widget-post">
            <a href="store-product.html" class="nk-post-image">
                <img src="assets/images2/lablebi2.jpg" alt="It was some time before">
            </a>
            <h3 class="nk-post-title"><a href="store-product.php">lablebi</a></h3>
            
    <span class="nk-product-rating">
        <span class="nk-product-rating-front" style="width: 100%;">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </span>
        <span class="nk-product-rating-back">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </span>
    </span>

            <div class="nk-product-price"> 4 dt</div>
        </div>
        
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span>Instagram</span></h4>
    <div class="nk-widget-content">
        <div class="nk-instagram row sm-gap vertical-gap multi-column"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span>Our Twitter</span></h4>
    <div class="nk-widget-content">
        <div class="nk-twitter-list" data-twitter-count="2"></div>
    </div>
</div>

            </aside>
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

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
</div>
<!-- END: Login Modal -->




<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->



</body>

<!-- Mirrored from html.nkdev.info/goodgames/store.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 00:35:43 GMT -->
</html>