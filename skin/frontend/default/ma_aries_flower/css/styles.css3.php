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


.select-lang:before {
width: 18px;
height: 18px;
background: #fff url(../images/select_lang.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 6px;
right: 3px;
pointer-events: none;
}

.footer .store-switcher .select-lang:before{
    background: #fff url(../images/select_toolbar.png) no-repeat scroll 50% 50%;
}

.select-sortby:before {
width: 19px;
height: 19px;
background: #fff url(../images/select_toolbar.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 4px;
right: 4px;
pointer-events: none;
}
.select-limiter:before {
width: 19px;
height: 19px;
background: #fff url(../images/select_toolbar.png) no-repeat scroll 50% 50%;
content: "";
display: block;
position: absolute;
top: 4px;
right: 57px;
pointer-events: none;
}

.pt_custommenu div.popup{
    box-shadow: 0 0 5px #ccc;
    -webkit-box-shadow: 0 0 5px #ccc;
    -moz-box-shadow: 0 0 5px #ccc;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
}
.newproductslider-item .item-inner .actions, .products-grid .item .item-inner .actions{
    transition: 1s ease-out;
    -webkit-transition: 1s ease-out;
    -moz-transition: 1s ease-out;
}
.newproductslider-item .item-inner .actions a, .products-grid .item .item-inner .actions a, button.button span, #back-top, .ma-thumbnail-container .flex-direction-nav a, .ma-newproductslider-container .flex-direction-nav a, .ma-brand-slider-contain .flex-direction-nav a, .ma-upsellslider-container .flex-direction-nav a, .ma-featuredproductslider-container .flex-direction-nav a, .ma-onsaleproductslider-container .flex-direction-nav a {
    transition: 0.5s ease-out;
    -webkit-transition: 0.5s ease-out;
    -moz-transition: 0.5s ease-out;
}

.top-cart-wrapper, .header .form-search button.button span, .banner-static2 .banner-box2 .content ul li a, .product-view .add-to-cart button.button span {
    transition: background-color 0.5s ease-out;
    -webkit-transition: background-color 0.5s ease-out;
    -moz-transition: background-color 0.5s ease-out;
}
.header .form-search input.input-text, .block-subscribe input.input-text, .block-subscribe .actions button.button span{
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
}
.ma-featuredproductslider-container .flex-direction-nav a, .ma-newproductslider-container .flex-direction-nav a, .ma-upsellslider-container .flex-direction-nav a, #back-top, .top-cart-wrapper, .header .form-search, .header .form-search button.button span, .ma-brand-slider-contain .flex-direction-nav a, .banner-static2 .banner-box2 .content ul li a, .pager .pages .current, .ma-thumbnail-container .flex-direction-nav a, .product-view .add-to-cart button.button span, .newproductslider-item .item-inner .actions a, .products-grid .item .item-inner .actions a, .ma-onsaleproductslider-container .flex-direction-nav a {
    border-radius: 40px;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
}

.pager .view-mode a.grid,.pager .view-mode a.list{
    transition: background 0.5s ease-out;
    -webkit-transition: background 0.5s ease-out;
    -moz-transition: background 0.5s ease-out;
}




.footer-static .footer-static-content .follow-us .content a:hover img, .banner-static2 .banner-box:hover img, .banner-static-contain .banner-box:hover img, .block-banner-left:hover img, .ma-brand-slider-contain .flexslider .slides li:hover img, .featuredproductslider-item .item-inner:hover img, .onsaleproductslider-item .item-inner:hover img, .newproductslider-item .item-inner:hover img, .products-list .product-image:hover img, .products-grid .product-image:hover img, .ma-upsellslider-container .product-image:hover img, .ma-relatedslider-container .product a.product-image:hover img, .block-banner-right:hover img, .images-banner:hover img{
    opacity: 0.8;
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
}
.pt_custommenu, .static_block_custom_menu .static-menu-img, .banner-static-contain .banner-box img, .ma-newproductslider-container, .ma-featuredproductslider-container, .block, .block-tags .block-content .tags-list a, .toolbar, .category-products .product-container, .products-list, .products-list button.button span, .product-view,  .product-view .product-img-box .more-views li.thumbnail-item a, .price-cart, .product-shop .product-options-bottom, .box-account, .fieldset, .my-account, .ma-featured-products, .ma-relatedslider-container .product, .cart .crosssell, .cart .discount, .cart .shipping, .cart .totals, .ma-onsaleproductslider-container, .navbar {
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
}
.pt_custommenu, .ma-newproductslider-container, .ma-featuredproductslider-container, .block, .toolbar, .category-products .product-container, .products-list, .product-view, .box-account, .fieldset, .my-account, .ma-banner7-container, .cart .crosssell, .cart .discount, .cart .shipping, .cart .totals, .ma-onsaleproductslider-container, .banner-static7 .banner-box .images-banner, .navbar{
    box-shadow: 0 2px 5px #ccc;
    -webkit-box-shadow: 0 2px 5px #ccc;
    -moz-box-shadow: 0 2px 5px #ccc;
}
.header .search-content, .top-cart-content, .newproductslider-item .item-inner, .products-list .product-shop .actions-inner, .product-view .product-img-box .product-image, .products-grid .item .item-inner, .featuredproductslider-item .item-inner, .onsaleproductslider-item .item-inner {
    border-radius: 8px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
}

.accordion span.head a, button.button{
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
}

.ma-banner7-container, .block-banner-right img, .banner-static7 .banner-box .images-banner{
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}

.newproductslider-item .item-inner:hover, .products-grid .item .item-inner:hover, .products-list .product-shop .actions-inner:hover,
.featuredproductslider-item .item-inner:hover, .onsaleproductslider-item .item-inner:hover{
    box-shadow: 0 0 6px #ccc;
    -webkit-box-shadow: 0 0 6px #ccc;
    -moz-box-shadow: 0 0 6px #ccc;
}

.featuredproductslider-item .item-inner button.button, .onsaleproductslider-item .item-inner button.button, .newproductslider-item .item-inner button.button{
    box-shadow: 0 3px 3px #d1e8b2;
    -webkit-box-shadow: 0 3px 3px #d1e8b2;
    -moz-box-shadow: 0 3px 3px #d1e8b2;
    margin-bottom: 5px;
}
.featuredproductslider-item .item-inner button.button:hover, .onsaleproductslider-item .item-inner button.button:hover, .newproductslider-item .item-inner button.button:hover{
    box-shadow: 0 3px 3px #999;
    -webkit-box-shadow: 0 3px 3px #999;
    -moz-box-shadow: 0 3px 3px #999;
}
