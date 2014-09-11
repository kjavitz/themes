<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

.mobilemenu>li.first {
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
.mobilemenu>li.last {
	-webkit-border-radius:0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
	behavior: url(<?php echo $url; ?>css/css3.htc);
	position: relative;
}
#Example_F {
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px#888;
	box-shadow: 0 0 5px 5px #888;
}

.banner-static-2 .banner-box .banner-box-container, .featuredproductslider-item .item-inner .item-container, .newproductslider-item .item-inner .item-container, .products-grid .item .item-inner .item-container, .products-list li.item .inbox .zoom-in {
    transition: all 1s ease-out;
    -webkit-transition: all 1s ease-out;
    -moz-transition: all 1s ease-out;
}

button.button span, #back-top, .ma-featuredproductslider-container .flex-direction-nav a, .featuredproductslider-item .item-inner .item-container .actions button.button span, .featuredproductslider-item .item-inner .item-container .actions .add-to-links a.link-wishlist, .newproductslider-item .item-inner .item-container .actions button.button span, .newproductslider-item .item-inner .item-container .actions .add-to-links a.link-wishlist, .products-grid .item .item-inner .item-container .actions .add-to-links a.link-wishlist, .products-grid .item .item-inner .item-container .actions .add-to-links a.link-compare, .ma-newproductslider-container .flex-direction-nav a, .itemMenu a.level1, .pager .view-mode a.grid, .pager .view-mode a.list, .quickview-button, .products-list li.item .inbox .zoom-in .actions .add-to-links a.link-wishlist, .products-list li.item .inbox .zoom-in .actions .add-to-links a.link-compare, .product-view .product-shop .add-to-links  .link-wishlist, .product-view .product-shop .add-to-links  .link-compare, .email-friend a, .header .links a, .header .form-language .drop-lang .drop-trigger a, .header .form-currency .drop-currency .currency-trigger a, .top-cart-wrapper, .ma-newproductslider-container .flex-direction-nav a, .ma-brand-slider-contain .flex-direction-nav a, .ma-upsellslider-container .flex-direction-nav a, .ma-thumbnail-container .flex-direction-nav a, .ma-relatedslider-container .flex-direction-nav a {
    transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
}

#va-accordion .va-slice h3 span {
    transition: background-color 0.5s ease-out;
    -webkit-transition: background-color 0.5s ease-out;
    -moz-transition: background-color 0.5s ease-out;
}

.banner-static-contain .banner-box3 a img.down{
    /*transform: scale(0);
    -webkit-transform: scale(0);
    -moz-transform: scale(0);
    transition: 1s ease-out;
    -webkit-transition: 1s ease-out;
    -moz-transition: 1s ease-out;
    opacity: 0;
    -webkit-opacity: 0;
    -moz-opacity: 0;*/
     transition: 0.5s ease-out;
    -webkit-transition: 0.5s ease-out;
    -moz-transition: 0.5s ease-out;
}
.banner-static-contain .banner-box3 a:hover img.down{
   /* transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    transform-origin: top right;
    -webkit-transform-origin: top right;
    -moz-transform-origin: top right;
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;*/
   right: 0;
}
.banner-static-contain .banner-box3 a img.up{
    transition: 0.5s ease-out;
    -webkit-transition: 0.5s ease-out;
    -moz-transition: 0.5s ease-out;
}
.banner-static-contain .banner-box3 a:hover img.up{
    left: -100%;
}
, .static-banner7 .banner-box2 a img.down{
    opacity: 0;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    
}

.banner-static-contain .banner-box .banner-hover, .static-banner7 .banner-box .banner-hover, .banner-static-contain .banner-box2 img, .banner-static-contain .banner-box1 img, .static-banner7 .banner-box1 img, .static-banner7 .banner-box2 a img.down, .banner-static3 .img1 .title1, .banner-static3 .img1 .title2, .banner-static3 .img2 .title, .drop-currency .sub-currency,
.drop-lang .sub-lang{
    transition: 1s ease-out;
    -webkit-transition: 1s ease-out;
    -moz-transition: 1s ease-out;
}    
 
.banner-static-contain .banner-box2:hover img, .banner-static-contain .banner-box1:hover img, .static-banner7 .banner-box1:hover img {
    opacity: 0.5;
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
}   

.static-banner7 .banner-box2 a:hover img.down{
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}    
.banner-static3 .img1 .title1, .banner-static3 .img1 .title2, .banner-static3 .img2 .title, .banner7-title, .footer-static .f-col1 .footer-static-content a:hover img{
    opacity: 0.8;
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
}    

  
    
    
    
    
    
    
    
    
    
    
    
    