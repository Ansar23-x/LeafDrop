<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>LeafDrop Corp | @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css --> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <style>/*--------------------------------------------------------------------- File Name: style.css ---------------------------------------------------------------------*/


/*--------------------------------------------------------------------- import Fonts ---------------------------------------------------------------------*/

@import url('https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700');
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

/*****---------------------------------------- 1) font-family: 'Rajdhani', sans-serif;
 2) font-family: 'Poppins', sans-serif;
 ----------------------------------------*****/


/*--------------------------------------------------------------------- import Files ---------------------------------------------------------------------*/

@import url(animate.min.css);
@import url(normalize.css);
@import url(meanmenu.css);
@import url(owl.carousel.min.css);
@import url(slick.css);
@import url(jquery-ui.css);
@import url(nice-select.css);

/*--------------------------------------------------------------------- skeleton ---------------------------------------------------------------------*/

* {
     box-sizing: border-box !important;
     transition: ease all 0.5s;
}

html {
     scroll-behavior: smooth;
}

body {
     color: #666666;
     font-size: 14px;
      font-family: poppins;
     line-height: 1.80857;
     font-weight: normal;
     overflow-x: hidden;
}

a {
     color: #1f1f1f;
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}

h1,
h2,
h3,
h4,
h5,
h6 {
     letter-spacing: 0;
     font-weight: normal;
     position: relative;
     padding: 0 0 10px 0;
     font-weight: normal;
     line-height: normal;
     color: #111111;
     margin: 0
}

h1 {
     font-size: 24px
}

h2 {
     font-size: 22px
}

h3 {
     font-size: 18px
}

h4 {
     font-size: 16px
}

h5 {
     font-size: 14px
}

h6 {
     font-size: 13px
}

*,
*::after,
*::before {
     -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
     box-sizing: border-box;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
     color: #212121;
     text-decoration: none!important;
     opacity: 1
}

button:focus {
     outline: none;
}

ul,
li,
ol {
     margin: 0px;
     padding: 0px;
     list-style: none;
}

p {
     margin: 0px;
     font-weight: 300;
     font-size: 15px;
     line-height: 24px;
}

a {
     color: #222222;
     text-decoration: none;
     outline: none !important;
}

a,
.btn {
     text-decoration: none !important;
     outline: none !important;
     -webkit-transition: all .3s ease-in-out;
     -moz-transition: all .3s ease-in-out;
     -ms-transition: all .3s ease-in-out;
     -o-transition: all .3s ease-in-out;
     transition: all .3s ease-in-out;
}

img {
     max-width: 100%;
     height: auto;
}

 :focus {
     outline: 0;
}

.btn-custom {
     margin-top: 20px;
     background-color: transparent !important;
     border: 2px solid #ddd;
     padding: 12px 40px;
     font-size: 16px;
}

.lead {
     font-size: 18px;
     line-height: 30px;
     color: #767676;
     margin: 0;
     padding: 0;
}

.form-control:focus {
     border-color: #ffffff !important;
     box-shadow: 0 0 0 .2rem rgba(255, 255, 255, .25);
}

.navbar-form input {
     border: none !important;
}

.badge {
     font-weight: 500;
}

blockquote {
     margin: 20px 0 20px;
     padding: 30px;
}

button {
     border: 0;
     margin: 0;
     padding: 0;
     cursor: pointer;
}

.full {
     float: left;
     width: 100%;
}

.layout_padding {
     padding-top: 90px;
     padding-bottom: 90px;
}

.layout_padding_2 {
     padding-top: 75px;
     padding-bottom: 75px;
}

.light_silver {
     background: #f9f9f9;
}

.theme_bg {
     background: #38c8a8;
}

.margin_top_30 {
     margin-top: 30px !important;
}

.full {
     width: 100%;
     float: left;
     margin: 0;
     padding: 0;
}


/**-- heading section --**/

.main_heading {
     text-align: center;
     display: flex;
     justify-content: center;
     position: relative;
     margin-bottom: 50px;
}

.main_heading h2 {
     padding: 0;
     font-size: 48px;
     line-height: 60px;
     font-weight: 400;
     position: relative;
     letter-spacing: -0.5px;
     color: #114c7d;
     border-left: solid #38c8a8 10px;
     padding-left: 15px;
}

.main_heading h2 strong {
     background: #38c8a8;
     color: #fff;
     font-weight: 600;
     padding: 0 15px;
     line-height: 68px;
}

.white_heading_main h2 {
     color: #fff;
}

.small_main_heading {
     margin-top: 25px;
     float: left;
     width: 100%;
     border-bottom: solid rgba(0, 0, 0, 0.07) 1px;
     margin-bottom: 25px;
}

.small_main_heading h2 {
     padding: 2px 0 20px 0;
     color: #114c7d;
     font-weight: 400;
     font-size: 28px;
     background-image: url('../images/fevicon.png');
     background-repeat: no-repeat;
     padding-left: 55px;
     letter-spacing: -0.5px;
}

.small_main_heading h2 strong {
     color: #38c8a8;
     font-weight: 600;
}

.main_bt {
     background: #ee580f;
     color: #fff;
     padding: 15px 60px 15px 60px;
     float: left;
     font-size: 15px;
     font-weight: 400;
     border: solid #ee580f 2px;
     border-radius: 30px;
     margin: 15px 0px 60px 0px;
}

a.readmore_bt {
     color: #fff;
     font-weight: 300;
     text-decoration: underline !important;
}

.main_bt:hover,
.main_bt:focus {
     background: #000;
     border: solid #000 2px;
     color: #fff;
}


/**-- list icon --**/

.ul_list_info_icon ul {
     list-style: none;
}

.ul_list_info_icon ul li {
     display: inline;
     float: left;
     width: 100%;
}

.ul_list_info_icon ul li img {
     width: 75px;
}


/*---------------------------- preloader area ----------------------------*/

.loader_bg {
     position: fixed;
     z-index: 9999999;
     background: #fff;
     width: 100%;
     height: 100%;
}

.loader {
     height: 100%;
     width: 100%;
     position: absolute;
     left: 0;
     top: 0;
     display: flex;
     justify-content: center;
     align-items: center;
}

.loader img {
     width: 280px;
}


/*---------------------------- scroll to top area ----------------------------*/

.scrollup {
     float: right;
     position: absolute;
     color: #fff;
     right: 20px;
     padding: 0px 5px;
     text-transform: uppercase;
     font-weight: 600;
     background: #38c8a8;
     position: fixed;
     bottom: 20px;
     z-index: 99;
     text-align: center;
     color: #fff;
     cursor: pointer;
     border-radius: 0px;
     opacity: 0;
     backface-visibility: hidden;
     -webkit-backface-visibility: hidden;
     transform: scale(1);
     -moz-transform: scale(1);
     -o-transform: scale(1);
     -webkit-transform: scale(1);
     transition: .2s all ease;
     -moz-transition: .2s all ease;
     -o-transition: .2s all ease;
     -webkit-transition: .2s all ease;
     width: 50px;
     height: 50px;
     border-radius: 100%;
     line-height: 48px;
     font-size: 16px;
}

.scrollup.b-show_scrollBut {
     opacity: 1;
     visibility: visible;
}

.top_awro {
     background: #ee4a79 none repeat scroll 0 0;
     cursor: pointer;
     padding: 6px 8px;
     position: fixed;
     bottom: 59px;
     right: 20px;
     display: none;
     height: 45px;
     width: 45px;
     border-radius: 50%;
     text-align: center;
     line-height: 30px;
     transition: all 0.5s ease;
}

.sale_pro {
     background: #f25252 !important;
}

.margin_top_50 {
     margin-top: 50px;
}

.margin_bottom_30_all {
     margin-bottom: 30px;
}

.text_align_center {
     text-align: center;
}


/*--------------------------------------------------------------------- header area ---------------------------------------------------------------------*/

.header {
     font-family: poppins;
     padding: 10px 0px;
    background: #052501;
     background-repeat: no-repeat;
background-size: 100% 100%;
background-position: center center;
}

.logo {
     float: left;
     position: relative;
     padding-top: 2px;
}

nav.main-menu {
     float: right;
     margin-left: 0;
}

ul.top_icon {
     float: right;
     padding-top: 17px;
}

ul.top_icon li {
     float: left;
     color: #fff;
     display: flex;
     flex-wrap: wrap;
     align-items: center;
     padding-right: 20px;
}

ul.top_icon li:last-child {
     padding-right: 0px;
}

ul.top_icon li a {
     color: #fff;
}

.menu-area-main li:hover a,
.menu-area-main li:focus a {
     color: #ffff;
}

.menu-area-main li.active a {
     color: #fff;
}

.right_cart_section {
     float: right;
     width: auto;
}

.right_cart_section ul {
     float: left;
     min-height: auto;
     margin: 0;
     padding: 12px 0 0;
}

.right_cart_section .cart_icons {
     padding: 18px 0 0;
}
.last {padding-right: 0px;}
.main-menu ul>li nth:child(7) a {
     padding-right: 0px;
}

.right_cart_section ul li {
     float: left;
     font-size: 17px;
     font-weight: 400;
     color: #fff;
     margin-right: 30px;
}

.right_cart_section ul.cart_update li {
     font-size: 13px;
     color: #ccc;
     line-height: normal;
     margin: 0;
     font-weight: 300;
}

.right_cart_section ul.cart_update li span {
     font-size: 18px;
     font-weight: 300;
     color: #fff;
     line-height: 21px;
}

.right_cart_section ul li i {
     margin-right: 10px;
     margin-top: 5px;
     float: left;
     color: #fff;
     font-size: 21px;
}

.right_cart_section ul li a {
     color: #fff;
}


/*-- end header middle --*/

.top-bar-info {
     background: #111111;
     padding: 5px 0px;
}

.top-menu-left {
     float: left;
}

.top-menu-left li {
     position: relative;
     display: inline-block;
     margin-right: 11px;
     padding-right: 12px;
}

.top-menu-left li::before {
     content: '';
     position: absolute;
     right: 0;
     top: 9px;
     height: 10px;
     border-right: 1px dotted #999;
}

.top-menu-left li:last-child::before {
     display: none;
}

.top-menu-left li:last-child {
     padding: 0px;
     margin: 0px;
}

.top-menu-left li a {
     color: #ffffff;
     font-size: 12px;
     text-transform: uppercase;
     text-decoration: none;
}

.top-menu-left li a:hover {
     color: #38c8a8;
}

.right-dropdown-language {
     float: right;
     margin-left: 12px;
}

.dropdown-bar .dropdown-link {
     position: absolute;
     z-index: 1009;
     top: 40px;
     left: 0;
     right: auto;
     min-width: 50px;
     padding: 15px;
     background: #ffffff;
     list-style: none;
     border: 2px solid #38c8a8;
     opacity: 0;
     visibility: hidden;
     -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     -webkit-transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     -o-transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     transition: opacity 0.2s ease 0s, visibility 0.2s linear 0s;
     text-align: left;
}

.dropdown-bar:hover .dropdown-link {
     opacity: 1;
     visibility: visible;
     top: 25px;
}

.dropdown-bar.right-dropdown-language>a::after {
     font-family: 'FontAwesome';
     content: "\f107";
     text-decoration: none;
     padding-left: 4px;
     color: #ffffff;
}

.right-dropdown-language>a {
     line-height: 10px;
     padding: 5px 5px;
     cursor: pointer;
}

.dropdown-bar .dropdown-link li a {
     color: #111111;
     display: block;
     font-size: 12px;
     line-height: 15px;
     padding: 5px 0;
}

.dropdown-bar .dropdown-link li a:hover {
     color: #38c8a8;
}

.dropdown-bar .dropdown-link li a img {
     margin-right: 7px;
}

.dropdown-bar .dropdown-link li.active {
     font-weight: bold;
}

.right-dropdown-language .dropdown-link {
     min-width: 100px;
     padding: 7px 10px;
     color: #111111;
}

.dropdown-bar {
     position: relative;
     padding: 0 5px;
     font-size: 13px;
}

.dropdown-bar .dropdown-link.right-sd {
     left: auto;
     right: 0;
}

.right-dropdown-currency {
     float: right;
     margin-left: 12px;
}

.dropdown-bar.right-dropdown-currency>a::after {
     font-family: 'FontAwesome';
     content: "\f107";
     text-decoration: none;
     padding-left: 4px;
     color: #ffffff;
}

.right-dropdown-currency>a {
     line-height: 10px;
     padding: 5px 5px;
     cursor: pointer;
     color: #ffffff;
}

.right-dropdown-currency .dropdown-link {
     min-width: 100px;
     padding: 7px 10px;
     color: #111111;
}

.right-dropdown-currency .dropdown-link {
     min-width: 55px;
     padding: 7px 10px;
}

.right-dropdown-currency .dropdown-link li a span.symbol {
     margin-right: 7px;
}

#login-modal .modal-content {
     border-radius: 0px;
}

#login-modal .modal-content .modal-header {
     background: #38c8a8;
     border-radius: 0;
}

#login-modal .modal-content .modal-body .form-group input {
     background: #ffffff;
     border: 1px solid #c8c8c8;
     border-radius: 0px;
}

#login-modal .modal-content .modal-body .form-group input:focus {
     border: 1px solid #c8c8c8 !important;
}

#login-modal .modal-content form {
     margin-bottom: 10px;
}

.modal-title {
     padding: 0px;
     color: #ffffff;
     font-size: 18px;
     text-transform: uppercase;
}

.btn-template-outlined {
     background: #111111;
     color: #ffffff;
     border: none;
     border-radius: 0px;
}

.btn-template-outlined i {
     padding-right: 10px;
}

.text-muted {
     padding: 10px 0px;
}

.slogan-line {
     float: right;
     color: #ffffff;
     font-size: 13px;
}

.middle-area {
     padding: 30px 0px;
}

.header-search {
     padding: 3px 0px;
}

.header-search form {
     position: relative;
     -webkit-box-shadow: 0px 1px 10px -1px rgba(0, 0, 0, 0.2);
     box-shadow: 0px 1px 10px -1px rgba(0, 0, 0, 0.2);
}

.header-search .btn-group.bootstrap-select {
     position: absolute;
     left: 0px;
     top: 0px;
}

.header-search input {
     width: 100%;
     min-height: 45px;
     border-radius: 0px;
     border: none;
     padding-left: 15px;
     border: 1px solid #e0e7ed;
}

.header-search form .search-btn {
     position: absolute;
     right: 0;
     top: 0;
     border: 0;
     color: #fff;
     font-size: 20px;
     padding: 4px 15px;
     border-radius: 0px;
     background-color: #38c8a8;
     cursor: pointer;
}

.header-search form .search-btn:hover {
     background: #111111;
}

.cart-box {
     float: right;
     margin-left: 10px;
     position: relative;
}

.cart-content-box {
     position: absolute;
     z-index: 1009;
     top: 40px;
     left: auto;
     right: 0;
     min-width: 250px;
     max-width: 250px;
     padding: 15px;
     background: #ffffff;
     list-style: none;
     border: 2px solid #38c8a8;
     opacity: 0;
     visibility: hidden;
     -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     text-align: left;
     -webkit-transform: scaleY(0);
     transform: scaleY(0);
     -webkit-transform-origin: 0 0 0;
     transform-origin: 0 0 0;
     -webkit-transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
}

.cart-box:hover .cart-content-box {
     opacity: 1;
     visibility: visible;
     top: 100%;
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
}

.inner-cart {
     background: #38c8a8;
     border-radius: 2px;
     padding: 0px;
     color: #ffffff;
     position: relative;
     width: 40px;
     height: 40px;
     text-align: center;
}

.cart-box .inner-cart:hover {
     color: #ffffff;
}

.line-cart {
     float: left;
     line-height: 40px;
     margin-right: 9px;
}

.cart-box a {
     display: inline-block;
}

.cart-box a:hover {
     color: #38c8a8;
}

.cart-box a span.icon {
     background: #38c8a8;
     width: 30px;
     height: 40px;
     display: inline-block;
     line-height: 40px;
     text-align: center;
     color: #ffffff;
     position: relative;
     border-radius: 2px;
}

.cart-box a .p-up {
     position: absolute;
     right: -8px;
     top: -8px;
     line-height: initial;
     background: #38c8a8;
     padding: 3px;
     border-radius: 50%;
     width: 17px;
     height: 17px;
     font-size: 12px;
     text-align: center;
     line-height: 10px;
}

.wish-box {
     float: right;
}

.wish-box a {
     display: inline-block;
}

.wish-box a:hover {
     color: #38c8a8;
}

.wish-box a span.icon {
     background: #38c8a8;
     width: 40px;
     height: 40px;
     display: inline-block;
     line-height: 40px;
     text-align: center;
     color: #ffffff;
     position: relative;
     border-radius: 2px;
}

.wish-box a span.icon:hover {
     background: #111111;
}

.cart-content-right {
     padding: 5px 0px;
}

.cart-content-box .items {
     text-align: center;
}

.product-media {
     width: 60px;
     float: left;
     position: relative;
}

.cart-content-box .items:hover .product-media::before {
     transform: scale(1);
     -webkit-transform: scale(1);
     -moz-transform: scale(1);
     -ms-transform: scale(1);
     -o-transform: scale(1);
}

.product-media::before {
     position: absolute;
     content: '';
     z-index: 2;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: #38c8a8;
     opacity: 0.4;
     transform: scale(0);
     -webkit-transform: scale(0);
     -moz-transform: scale(0);
     -ms-transform: scale(0);
     -o-transform: scale(0);
     transition: all 0.5s ease;
     -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
     -o-transition: all 0.5s ease;
}

.cart-content-box .items .item .remove {
     position: absolute;
     right: 0px;
     top: 0px;
     background: #38c8a8;
     color: #ffffff;
     width: 20px;
     height: 20px;
     line-height: 18px;
     border-radius: 2px;
}

.cart-content-box .items .item {
     margin-bottom: 10px;
     padding-bottom: 10px;
     border-bottom: 1px solid #e0e7ed;
     position: relative;
}

.cart-content-box .items .item .product-info {
     padding-top: 10px;
     padding-left: 71px;
     text-align: left;
}

.cart-content-box .items .item .remove:hover {
     background: #111111;
}

.subtotal {
     text-align: left;
     text-transform: capitalize;
     color: #38c8a8;
     font-weight: 500;
     margin-bottom: 15px;
}

.subtotal span {
     font-weight: bold;
     color: #111111;
     padding-left: 15px;
     float: right;
}

.actions .btn-process {
     padding: 5px 16px;
     color: #ffffff;
     font-family: 'Roboto', sans-serif;
     font-size: 14px;
     border-radius: 2px;
     overflow: hidden;
}

.actions .btn-process:hover {
     color: #ffffff;
}

.line-cart {
     position: relative;
}

.wish-box a span.icon span {
     position: absolute;
     right: -8px;
     top: -8px;
     line-height: initial;
     background: #38c8a8;
     padding: 3px;
     border-radius: 50%;
     width: 17px;
     height: 17px;
     font-size: 12px;
}

.main-menu {
     text-align: center;
}

.main-menu ul {
     margin: 0;
     list-style-type: none;
     margin-bottom: 10px;
}

.main-menu ul>li {
     display: inline-block;
     position: relative;
}

.main-menu ul>li a {
     line-height: 20px;
     font-size: 16px;
     display: block;
     font-weight: 500;
     color: #fff;
     padding: 19px 17px;
}



.main-menu ul li:last-child a {
     padding-right: 0;
}
.sub-down li {
     background: #ffffff;
}
.main-menu ul>li .sub-down li a {
     color: #114c7d;
     font-size: 15px;
     text-transform: capitalize;
     font-weight: 300;
     padding: 12px 5px;
     position: relative;
     border-bottom: solid #eee 1px;
}
.main-menu ul>li .sub-down li a::before {}
.main-menu ul>li .sub-down li a:hover {
     color: #111111;
}
.main-menu ul>li .sub-down li a:hover::before {}
.main-menu ul li:first-child {
     margin-left: 0;
}
.main-menu ul>li>ul {
     opacity: 0;
     position: absolute;
     text-align: left;
     top: 100%;
     -webkit-transform: scaleY(0);
     transform: scaleY(0);
     -webkit-transform-origin: 0 0 0;
     transform-origin: 0 0 0;
     -webkit-transition: all 0.3s ease 0s;
     transition: all 0.3s ease 0s;
     visibility: hidden;
     width: 240px;
     z-index: 999;
     background: #fff;
     -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
     box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
}
.main-menu>ul>li:hover>ul {
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
     visibility: visible;
     opacity: 1;
}
.main-menu ul>li>ul>li {
     margin: 0px;
     position: relative;
     display: block;
}
.main-menu ul>li>ul>li:hover>ul {
     -webkit-transform: scaleY(1);
     transform: scaleY(1);
     visibility: visible;
     opacity: 1;
     left: 100%;
     top: 10px;
}
.main-menu ul>li>ul>li>a {
     background: none !important;
}
.mean-container .mean-nav {
     margin-top: 0px;
     position: absolute;
     top: 100%;
}
.main-menu ul>li {
     position: inherit;
     display: inline-block;
     vertical-align: middle;
}
.main-menu ul>li:nth-child  {
     padding-right: 0px;
}
.nav>li {
     position: inherit;
     display: inline-block;
     vertical-align: middle;
}
.megamenu .sub-down {
     max-width: 1140px;
     width: 100%;
     left: 0;
     margin: 0 auto;
     right: 0;
     padding: 15px 0px;
}
.sub-full {}
.simple-down {
     padding: 15px;
}
.megamenu-categories {
     padding: 10px 0px;
}
.sub-full.megamenu-categories li {
     display: block;
}
.megamenu .sub-full.megamenu-categories ol li a {
     padding: 5px 0px;
     font-size: 15px !important;
     font-weight: 500;
}
.sub-full.megamenu-categories ol li .category-title {
     padding: 15px 0px;
     font-size: 16px;
     font-weight: 600;
     text-transform: uppercase;
}
.sub-full.megamenu-categories ol li .category-box a {
     padding: 5px 0px;
}
.menu-add {
     padding: 30px 15px;
}
.menu-add img {
     width: 100%;
}
.main-w img {
     width: 100%;
}
.women-box {
     position: relative;
}
.women-box::before {
     content: "";
     position: absolute;
     background: rgba(0, 0, 0, 0.3);
     width: 100%;
     height: 100%;
}
.banner-up-text {
     position: absolute;
     bottom: 10px;
     left: 0px;
     right: 0px;
     text-align: center;
}
.text-a {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 40px;
     font-weight: 700;
}
.text-b {
     color: #fff;
     font-size: 28px;
     text-transform: uppercase;
     line-height: 30px;
     padding: 20px 0px;
}
.text-c {
     color: #ffffff;
     font-size: 31px;
     font-weight: 300;
     text-transform: uppercase;
     line-height: 30px;
     padding-bottom: 20px;
}
.megamenu .sub-full.megamenu-categories .women-box .banner-up-text a {
     background: #111111;
     color: #ffffff !important;
     display: inline-block;
     padding: 10px 16px;
     border-radius: 2px;
     overflow: hidden;
     font-size: 16px;
}
.sticky-wrapper .sticky-wrapper-header {
     z-index: 20 !important;
     background: #ffffff;
}
.is-sticky .sticky-wrapper-header .middle-area {
     padding: 10px 0px
}
.sticky-wrapper:not(.is-sticky) {
     height: auto !important;
}
.hover-btn {
     display: inline-block;
     vertical-align: middle;
     -webkit-transform: perspective(1px) translateZ(0);
     transform: perspective(1px) translateZ(0);
     box-shadow: 0 0 1px rgba(0, 0, 0, 0);
     position: relative;
     background: #111111;
     -webkit-transition-property: color;
     transition-property: color;
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
}
.hover-btn::before {
     content: "";
     position: absolute;
     z-index: -1;
     top: 0;
     bottom: 0;
     left: 0;
     right: 0;
     background: #38c8a8;
     -webkit-transform: scaleX(0);
     transform: scaleX(0);
     -webkit-transform-origin: 50%;
     transform-origin: 50%;
     -webkit-transition-property: transform;
     transition-property: transform;
     -webkit-transition-duration: 0.3s;
     transition-duration: 0.3s;
     -webkit-transition-timing-function: ease-out;
     transition-timing-function: ease-out;
     display: block !important;
}
.hover-btn:hover::before,
.hover-btn:focus::before,
.hover-btn:active::before {
     -webkit-transform: scaleX(1);
     transform: scaleX(1);
}
.hover-btn:hover,
.hover-btn:focus,
.hover-btn:active {
     color: white;
     box-shadow: none;
}
.btn-secondary.focus,
.btn-secondary:focus {
     box-shadow: none;
}
.img-responsive {
     max-width: 100%;
}
.padding_right_15_inner {
     padding-right: 15px;
}
.padding_left_15_inner {
     padding-left: 15px;
}
.dark_bg {
     background: #114c7d;
}

/*--------------------------------------------------------------------- top banner area ---------------------------------------------------------------------*/
.top-banner-slider {
     overflow: hidden;
     clear: both;
     height: 600px;
}
.top-banner-slider .heroslider {
     margin: 0px;
     padding: 0px;
     border: none;
     position: relative;
     border-radius: 0;
}
.swiper-overlay {
     height: 100%;
     position: relative;
}
.swiper-overlay {
     background: rgba(0, 0, 0, 0.5);
     content: "";
     width: 100%;
     height: 100%;
     left: 0px;
     top: 0px;
}
.heroslider .container {
     position: relative;
     height: 100%;
     padding-left: 0;
     padding-right: 0;
     z-index: 5;
}
.swiper-container {
     width: 100%;
     height: 100%;
}
.heroslider .slider-01 {
     width: 100%;
     background-image: url(../images/slider-01.jpg);
     background-size: cover;
     background-position: center;
}
.heroslider .slider-02 {
     width: 100%;
     background-image: url(../images/slider-02.jpg);
     background-size: cover;
     background-position: center;
}
.heroslider .slider-03 {
     width: 100%;
     background-image: url(../images/slider-03.jpg);
     background-size: cover;
     background-position: center;
}
.heroslider .slides li {
     height: 600px;
}
.top-banner-slider .heroslider .slides li::before {
     content: "";
     position: absolute;
     background: rgba(0, 0, 0, 0.4);
     height: 100%;
     width: 100%;
     left: 0px;
     top: 0px;
}
.top-banner-slider .flex_caption3 {
     position: absolute;
     z-index: 30;
     left: 0;
     right: 0;
     bottom: 50px;
     margin: 0 -15px;
     display: flex;
}
a.slide_banner {
     position: relative;
     display: inline-block;
     margin: 0 12px 0 15px;
}
.slide1_banner1 {
     width: 570px;
}
.slide1_banner2 {
     width: 270px;
}
.slide1_banner3 {
     width: 270px;
}
.top-banner-slider .flex_caption1 {
     text-align: center;
     position: absolute;
     z-index: 30;
     left: 0;
     right: 0;
     margin: 0 auto;
     top: 31%;
     max-width: 720px;
     width: 100%;
     text-transform: uppercase;
     color: #333;
}
.top-banner-slider .flex_caption1 .title1 {
     font-size: 36px;
     font-weight: 300;
     color: #ffffff;
}
.top-banner-slider .flex_caption1 .title2 {
     font-size: 60px;
     font-weight: 900;
     color: #ffffff;
}
.top-banner-slider .flex_caption2 {
     text-align: center;
}
.top-banner-slider .flex_caption2 {
     position: absolute;
     z-index: 30;
     left: 0;
     top: 20%;
     display: table;
     width: 177px;
     height: 177px;
     background-color: #242424;
}
.top-banner-slider .flex_caption2 .middle {
     display: table-cell;
     vertical-align: middle;
     text-transform: uppercase;
     text-align: center;
     font-weight: 700;
     line-height: 31px;
     font-size: 26px;
     color: #fff;
     transition: all 0.1s ease-in-out;
     -webkit-transition: all 0.1s ease-in-out;
}
.top-banner-slider .flex_caption2 .middle:hover {
     background: #38c8a8;
}
.top-banner-slider .flex_caption2 span {
     display: block;
     font-weight: 100;
     line-height: 36px;
     font-size: 34px;
}
a.slide_banner::before {
     content: '';
     position: absolute;
     left: 0;
     top: 0;
     right: 0;
     bottom: 0;
     opacity: 0;
     border: 2px solid #ffffff;
     transition: all 0.1s ease-in-out;
     -webkit-transition: all 0.1s ease-in-out;
}
a.slide_banner:hover::before {
     left: -7px;
     top: -7px;
     right: -7px;
     bottom: -7px;
     opacity: 1;
}
.flex-control-nav {
     background: #38c8a8;
     bottom: 0px;
     position: relative;
}
.flex-control-nav li {
     line-height: 10px;
}
.flex-control-paging li a {
     background: rgba(255, 255, 255, 1);
     border: 2px solid #ffffff;
}
.flex-control-paging li a.flex-active {
     border: 2px solid #ffffff;
}
.flex-direction-nav a {
     background: #111111;
     text-align: center;
}
.heroslider:hover .flex-direction-nav .flex-prev:hover {
     background: #38c8a8;
}
.heroslider:hover .flex-direction-nav .flex-next:hover {
     background: #38c8a8;
}
.flex-direction-nav a::before {
     color: #ffffff;
}
.top-banner-slider .swiper-pagination {
     padding: 10px 0px;
}
.heroslider .swiper-pagination {
     bottom: 0px;
     background: #38c8a8;
}
.heroslider .swiper-pagination .swiper-pagination-bullet-active {
     background: #fff;
}
.heroslider .swiper-pagination::before {
     content: "";
     width: 22px;
     height: 22px;
     position: absolute;
     left: -10px;
     top: 4px;
     z-index: -1;
     background: #e12d4f;
     -webkit-transform: rotate(45deg);
     transform: rotate(45deg);
}
.heroslider .swiper-pagination::after {
     content: "";
     width: 22px;
     height: 22px;
     position: absolute;
     right: -10px;
     top: 4px;
     z-index: -1;
     background: #e12d4f;
     -webkit-transform: rotate(45deg);
     transform: rotate(45deg);
}
.heroslider .swiper-pagination.swiper-pagination-bullets-dynamic {
     overflow: visible;
     width: 110px !important;
}
.heroslider .swiper-pagination .swiper-pagination-bullet {
     opacity: 1;
}
input[type="checkbox"].styled:checked+label:after,
input[type="radio"].styled:checked+label:after {
     font-family: 'FontAwesome';
     content: "\f00c";
}
input[type="checkbox"] .styled:checked+label::before,
input[type="radio"] .styled:checked+label::before {
     color: #fff;
}
input[type="checkbox"] .styled:checked+label::after,
input[type="radio"] .styled:checked+label::after {
     color: #fff;
}

/*--------------------------------------------------------------------- layout new css ---------------------------------------------------------------------*/

.search {
    position: relative;
    top: 12px;
margin-right: 30px;
}

.search input.form-control {
    width: 100%;
    font-size: 15px;
    padding: 7px 35px 7px 15px;
}


.search button {
    position: absolute;
top:0px;
right: 0;
height: 39px;
width: 109px;
text-align: center;
z-index: 1;
background: #052501;
}

.location_icon_bottum_tt {
width: 100%;
}

.location_icon_bottum_tt ul li {
     display: inline-block;
padding: 27px 60px;
color: #fff;
font-size: 15px;
font-weight: 500;
}
.location_icon_bottum_tt ul li img {padding-right: 10px;}



.location_icon_bottum {
   
    position: relative;
    z-index: 999;
    background: #090501;
    margin-left: 31px;
    top: 0;
    margin-bottom: -43px;

     }
.location_icon_bottum::before {
     position: absolute;
content: "";
top: 0px;
background: url(../icon/wfe4.png);
background-repeat: repeat;
width: 67px;
height: 67px;
background-repeat: no-repeat;
left: -35px;
}
.location_icon_bottum ul li {
     display: inline-block;
padding: 0px 10px;
color: #fff;
font-size: 15px;
font-weight: 500;
}
.location_icon_bottum ul li img {padding-right: 10px;}

/** banner **/

.relative {
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     text-align: left;
     bottom: auto;
}

.banner-main {
     position: relative;
     font-family: poppins;
}
.carousel-indicators li {
    width: 25px;
    height: 25px;
    border-radius: 15px;
    background-color: #052501;
   
}
#myCarousel .carousel-indicators li { margin-bottom: 40px;}
.banner-main .carousel-item img {width: 100%;}
#myCarousel a.carousel-control-prev {display: none;}
#myCarousel a.carousel-control-next {display: none;}
.carousel-indicators .active {background-color:#4bc714;}

.banner-main .carousel-caption span {
     font-size: 50px;
     font-weight: bold;
     line-height: 60px;
     color: #4bc714;
     text-transform: uppercase;
     padding-bottom: 10px;
     display: block;
}

.banner-main .carousel-caption h1 {
     color: #fff;
     font-size: 110px;
     line-height: 84px;
     font-weight: bold;
     padding-bottom: 20px;
     text-transform: uppercase;
}

.banner-main .carousel-caption p {
     font-size: 25px;
     line-height: 31px;
     padding: 6px 0px 50px 0px;
}

.banner-main .carousel-caption .buynow  {
border: #fff solid 1px;
background: #fff;
width: 190px;
padding: 8px 0;
display: inline-block;
font-weight: 500;
font-size: 17px;
line-height: 30px;
color: #000;
text-align: center;
border-radius: 10px;
margin-right: 20px;
}

.banner-main .carousel-caption .buynow:hover {
     border: #052501 solid 1px;
     background: #052501;
     color: #fff;
}

#myCarousel a.carousel-control-next {
     position: absolute;
     top: 40% !important;
     left: inherit !important;
     right: 17px !important;
     width: 70px;
     height: 70px;
     border-radius: 35px;
}

#myCarousel a.carousel-control-prev {
     position: absolute;
     top: 40% !important;
     left: 17px !important;
     width: 70px;
     height: 70px;
     border-radius: 35px;
}

ul.social_icon {
     list-style: none;
     padding-top: 5px;
}
ul.social_icon li {
     float: left;
color: #fff;
align-items: center;
padding-right: 10px;
margin-top: 17px;
}
ul.social_icon li:last-child {
     padding-right: 0px;
}
ul.social_icon li a {
color: #fff;
width: 40px;
height: 40px;
border: solid #fff 1px;
float: left;
text-align: center;
line-height: 40px;
border-radius: 100%;
font-size: 18px;
} 

ul.social_icon li a:hover {
     background: #ff0000;
border: solid #ff0000 1px;        
color: #fff;
}
/** end banner **/
.black {
    color: #63ce33;
    font-weight: 208;
}

.title {text-align: center; padding-bottom: 60px;}

.title h2 {
    padding: 0px 0px 6px 0px;
text-transform: uppercase;
font-weight: 500;
color: #052501;
line-height: 46px;
border-bottom: #052501 solid 1px;
font-size: 50px;
max-width: 374px;
width: 100%;
margin: 0 auto;

}







/** about **/
.about {
     padding: 90px 0;
}

.about .about_img figure {
     margin: 0px;
}

.about .about_box {
     text-align: left;
     
}

.about .about_box h2 {
     font-weight: 500;
     font-size: 43px;
     color: #163f03;
     line-height: 55px;
     padding-bottom: 7px;
    display: block;
    text-transform: uppercase;
        padding: 0px 0px 6px 0px;
            border-bottom: #163f03 solid 1px;
}

.about .about_box p {
     font-size: 17px;
     line-height: 33px;
     color: #4c4a49;
     padding: 40px 0px;
     font-weight: 500;
}
.about .about_box a {
         color: #fff;
    font-size: 17px;
    line-height: 29px;
    background: #052501;
    border: #052501 solid 1px;
    padding: 12px 40px;
    display: inline-block;
    width: 231px;
text-align: center;
border-radius: 18px;
}
.about .about_box a:hover {
    color: #fff;
    background: #4bc714;
    border: #4bc714 solid 1px;
}
.about_img {margin-top: 25px;}
.about_img figure {margin: 0;}
.about_img figure img {width: 100%;}
/** end about **/


/** for_box **/
.for_box_bg {
     background: #052501;
      padding: 70px 0px;
 }
.for_box_bg .for_box {
     text-align: center; 
     box-sizing: border-box;
}
.for_box_bg .for_box span {
     font-weight: bold; 
     font-size:51px; 
     line-height: 51px; 
     color: #4bc714; 
     display: block;
     padding: 20px 0px;
}
.for_box_bg .for_box h3  {font-size: 30px; line-height: 33px; color: #fff;}


/** end for_box **/

/** offer **/
.offer {
     padding-top: 90px;
   }

.offer-bg {
     background: #052501;
     padding: 90px 0px;
    
}

.margin {
     margin-bottom: 30px;
}


.offer .offer-bg {
     background: #052501;
     text-align: center;
     padding: 60px 0px;
}
.offer .offer-bg .offer_box {text-align: center;}
.offer .offer-bg .offer_box figure {margin: 0;}
.offer .offer-bg .offer_box figure img {
    width: 100%;
}
.offer .offer-bg .offer_box h3 {
     font-size: 30px;
     font-weight: 500;
     color: #fff;
    padding-bottom: 30px;
}
.offer .offer-bg .offer_box p {padding-top: 35px; font-size: 17px; line-height: 23px; color: #fff;}

.read-more { 
font-family: poppins;
max-width: 212px;
margin: 0 auto;
margin-top: 0px;
display: block;
background: #fff;
color: #000 !important;
padding: 12px 0px;
width: 100%;
font-size: 17px;
float: left;
border-radius: 10px;
margin-top: -100px;
}

.read-more:hover {
     background: #30880d;
     color: #fff !important;
}


.margin_ttt {margin-top: 100px;}
.margin-lkk {margin-top: 200px;}
/** end offer **/





/** product **/

.product {padding: 90px 0px 60px 0px;}
.product .title h2 {max-width: 425px;
 width: 100%; 
}
.product .product_box {margin-bottom: 30px;}
.product .product_box figure {margin: 0px; position: relative;}
.product .product_box figure h3 {
 position: absolute;
bottom: 0;
text-align: center;
width: 100%;
background: #052501d4;
padding: 10px 13px 13px 13px;
font-size: 30px;
line-height: 40px;
font-weight: 500;
color: #fff;
box-sizing: border-box;
}
.product .product_box figure img {width: 100%; height: 248px;}








/** end product **/
.clients {
     background: #fff;
   
} 
.clients .titlepage {padding-bottom: 0px;}
.clients .titlepage h2 {
     color: #000;
}

.clients_red {
     background: #fff;
     padding-bottom: 50px;
} 

.cross_inner h3 {
    text-align: left;
    padding-left: 60px;
    padding-top: 58px;   
    font-size: 30px;
    line-height: 25px;
    padding-bottom: 58px;
text-transform: uppercase;
}

.pa_right {padding-right: 0px;}
.pa_left {padding-left: 0px;}

.testimonial_cont p {color: #fff;
background: #052501;
padding: 40px 50px;}
#testimonial_slider .carousel-indicators {
     bottom: -50px;
}

#testimonial_slider .carousel-indicators li {
     width: 25px;
height: 25px;
background-color: #052501;
border-radius: 50px;
}
#testimonial_slider .carousel-indicators li.active {
     background-color: #4bc714;
}


.testimonial_cont {
    background: #fff;
    min-height: 295px;
}
.text_align_center {
    text-align: center;}
.ornage_color {
     color: #4bc714;
text-transform: none;
font-size: 20px;
line-height: 10px;
}
.testomonial_img {position: relative;}
.testomonial_img:after {
    position: absolute;
content: "";

background: url(../images/bg1.png);
background-repeat: no-repeat;
width: 61px;
height: 61px;
right: 0px;
bottom: -61px;;
z-index: 9999;
}
.testomonial_img i img { border: #4bc714 solid 13px; width: 100%;}
/* transform: skew(190deg); */

.testimonial_cont h3 { color: #000; font-family: poppins;}


     







/** contact **/


.contact {
    margin-top: 90px;
    
}


.map_section {
    border-top: #052501 solid 6px;
}
#map {
    height: 100%;
    min-height: 670px;
}

.padddd {
    padding: 0px;
}

.main_form {
    position: absolute;
    z-index: 990;
    background: #052501;
   margin-top: 80px;
    padding: 60px 40px;
}

.form-control {
    border: #fff solid 1px;
    border-radius: inherit;
    margin-bottom: 20px;
    padding: 8px 20px;
    font-family: poppins;
}

.form-control:focus {
    box-shadow: inherit;
    border: #fff solid 1px !important;
}

.textarea {
    font-family: poppins;
    border: #fff solid 2px;
    margin-bottom: 20px;
    padding: 0px 20px;
    padding-top: 0px;
    width: 100%;
    padding-top: 30px;
}

.send {
    font-family: poppins;
    float: left;
    margin: 0 auto;
    display: block;
    background: #fff;
    color: #000;
    max-width: 165px;
    padding: 13px 0px;
    width: 100%;
    font-size: 18px;
    border-radius: 10px;
}

.send:hover {
    background: #30880d;
    color: #fff;
}


/** end contact **/

.footer {background: #052501; padding: 90px 0px;}


 
 ul.loca li {
    color: #fff;
padding-bottom: 10px;
display: flex;
font-size: 16px;
flex-wrap: wrap;
}
 ul.loca li:last-child {
    padding-right: 0;
}
 ul.loca li a {
   padding-right: 16px;
color: #fff;
margin-top: 4px;
}
 
 ul.Links_footer {
     list-style: none;
     margin: 0;
     padding: 0;
     width: 100%;
     float: left;
}
 ul.Links_footer li a {
    display: block;
     color: #fff;
     font-size: 17px;
     padding-left: 16px;
     margin-top: -34px;
}
 ul.Links_footer li a:hover{
    color: #30880d;
}
 ul.Links_footer li {
    padding-bottom: 15px;
    color: #3e7f21;
}
 
 

 .hhh {
    margin-bottom: 15px;
}
 .footer .newsletter h3 {
     color: #fff;
     font-size: 17px;
     line-height: 30px;
     display: block;
     padding-bottom: 25px;
     text-transform: uppercase;
}
 .footer .address .form-control {
     padding: 10px 15px;
     border: #ddd solid 1px;
     margin-bottom: 20px;
     box-shadow: inherit;
     border-radius: 10px;
}
 .address  h3 {
color: #fff;
font-size: 29px;
font-weight: 500;
padding-top: 15px;
padding-bottom: 3px;
border-bottom: #3e7f21 solid 4px;
margin-bottom: 20px;
width: 226px;
 }
.address img {padding-bottom: 10px;}

 .address p {
     color: #fff;
     padding-bottom: 20px;
     font-size: 18px;
line-height: 30px;}
 .form-control:focus, .form-control:hover {
     border: #ddd solid 1px !important;
}
 .footer .address .submit-btn {
   padding: 8px 45px;
border: #30880d solid 1px;
background: #30880d;
color: #fff;
font-weight: 500;
font-size: 19px;
border-radius: 10px;
}
 .footer .address .submit-btn:hover {
     background: #fff;
     border: #fff solid 1px;
     color: #30880d;
}
.copyright {
     background: #30880d;
     padding: 20px 0px 20px 0;
}
.copyright p {
     color: #fff;
     font-size: 16px;
     text-align: center;
     text-align: center;
     margin: 0 auto;
}
.copyright a {
     color: #ffff;
}
.copyright a:hover {
     color: #000;
}
.btn-primary.focus,
.btn-primary:focus {
     box-shadow: inherit;
}

/*--------------------------------------------------------------------- inner_page css ---------------------------------------------------------------------*/

.brand_color {
     background-color: #ddd;
}
.brand_color .titlepage {
     margin-top: 90px;
     padding-bottom: 90px;
}

.brand_color .abouttitle h2 {
     color: #fff;
     text-transform: uppercase;
     font-size: 40px;
     line-height: 45px;
     padding: 40px 0;
     font-weight: 500;
     text-align: center;
}
.contact-page .Contact {
     margin-top: 0px;
}
.contact-page .form-control {
     margin-bottom: 20px;
}

/** slider arrow **/

#myCarousel .carousel-control-prev,
#myCarousel .carousel-control-next {
     width: 62px;
     height: 60px;
     background: #fffdfd;
     opacity: 1;
     font-size: 30px;
     color: #000;
}

#myCarousel .carousel-control-prev:hover,
#myCarousel .carousel-control-next:hover,
#myCarousel .carousel-control-prev:focus,
#myCarousel .carousel-control-next:focus {
     background: #ff0000 ;
     color: #fff;
}

#myCarousel a.carousel-control-prev {
     position: absolute;
     left: 82px;
     bottom: 10px;
     top: inherit;
}

#myCarousel a.carousel-control-next {
     position: absolute;
     left: 10px;
     top: inherit;
     bottom: 10px;
}

.special-page .relative  {text-align:center !important; }

.special-page .footer {margin-top: 90px;}</style>
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]
    -->
    @stack('css')
    </head>
    
<!-- body -->

<body class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('images/logo.png') }}" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="location_icon_bottum_tt">
                            <ul>
                                <li><img src="{{ asset('icon/loc1.png') }}" />Indonesia</li>
                                <li><img src="{{ asset('icon/email1.png') }}" />leafdc@gmail.com</li>

                                <li><img src="{{ asset('icon/call1.png') }}" />(+62)85678056</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="#Home">Home</a> </li>
                                                <li> <a href="#about">About</a> </li>
                                                <li> <a href="#ofer">Documentation</a></li>
                                                <li><a href="#product">Resources</a></li>
                                                <li><a href="#testimonial">Team</a></li>
                                                <li><a href="#footer">Booking</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <form class="search">
                                    <input class="form-control" type="text" placeholder="Search">
                                    <button><img src="{{ asset('images/search_icon.png') }}"></button>
                                </form>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="{{ asset('images/hiking1.jpg') }}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Ingin mencoba backpacking tetapi tidak tahu harus mulai dari mana? Tour semalam dengan kami menekankan pembelajaran dan pengembangan keterampilan. Harga tour sudah termasuk makan, izin, logistik, dan perlengkapan </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="{{ asset('images/hiking2.jpg') }}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Tujuan utama kami adalah memimpin perjalanan yang aman dan melestarikan hutan kami. Tour dipimpin oleh Wilderness First Responder bersertifikat dan memegang prinsip Leave No Trace (™) . </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="{{ asset('images/hiking3.jpg') }}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>LEAFDROP</h1>
                            <span>HIKING DISCOVER CORP</span>

                            <p>Ransel ringan, tenda, dan kantong tidur/bantalan tersedia untuk disewa dan sudah termasuk dalam harga tour. Kami akan menjadwalkan sesi zoom/telepon untuk membahas pemilihan peralatan guna memastikan semua orang siap untuk perjalanan semalam dengan kami. </p>
                            <a class="buynow" href="#about">About us</a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_box">
                        <h2>About leafdrop<br><strong class="black"> Hiking discover corp</strong></h2>
                        <p>Misi Leafdrop Corp adalah membuat hutan belantara dapat diakses dan menyenangkan bagi semua orang. 
                        Kami percaya jalan setapak ada untuk semua orang di setiap fase kehidupan dan kami menyambut semua pejalan kaki, 
                        terlepas dari latar belakang atau tingkat kemampuan mereka. Kami berusaha keras untuk memberikan pengalaman on-trail yang aman 
                        dengan pemandu yang menarik, berpengetahuan luas, dan terlatih dengan baik. Kami merangkul dan mendorong keragaman di jalan 
                        dan kami mengikuti prinsip-prinsip Leave No Trace. Semua panduan Leafdrop corp disertifikasi dalam Pertolongan Pertama Wilderness 
                        (atau lebih tinggi) dan CPR.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{ asset('images/about.png') }}" alt="img" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- for_box -->
    <div class="for_box_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/1.png') }}" alt="#"/></i>
                        <span>>100</span>
                        <h3>Destinasi</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/2.png') }}" alt="#"/></i>
                        <span>360'</span>
                        <h3>Derajat Pandangan</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/3.png') }}" alt="#"/></i>
                        <span>10</span>
                        <h3>Tahun Pengalaman</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 co-sm-l2">
                    <div class="for_box">
                        <i><img src="{{ asset('images/4.png') }}" alt="#"/></i>
                        <span>87</span>
                        <h3>Pemandu professional</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end for_box -->
    <!-- offer -->
    <div id="ofer" class="offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Spesial <strong class="black"> Documentasi</strong></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="offer-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                        <div class="offer_box">
                            <h3>Air Terjun</h3>
                            <figure><img src="{{ asset('images/offer1.jpg') }}" alt="img" /></figure>
                            <p>tempat air terjun terindah untuk melepas penat kerja</p>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin_ttt">
                        <div class="offer_box">
                            <h3>Puncak</h3>
                            <figure><img src="{{ asset('images/offer2.jpg') }}" alt="img" /></figure>
                            <p>setelah mendaki yang menguras tenaga akan terbayarkan dengan memandang sunset yang indah</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin-lkk">
                        <div class="offer_box">
                            <h3>Tour Pemula</h3>
                            <figure><img src="{{ asset('images/offer3.jpg') }}" alt="img" /></figure>
                            <p>dikhususkan untuk yang baru memulai mendaki, tetapi pemandangannya tidak kalah cantik</p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end offer -->

    <!-- product -->
    <div id="product" class="product">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Leafdrop <strong class="black"> resources</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu1.jpg') }}" alt="#" />
                                    <h3>Penyewaan Perlengkapan </h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu2.jpg') }}" alt="#" />
                                    <h3>Logistik  </h3>
                                </figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu3.jpg') }}" alt="#" />
                                    <h3>Sepatu untuk mendaki yang nyaman </h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu4.jpg') }}" alt="#" />
                                    <h3>Panduan dalam Pendakian</h3></figure>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="product_box">
                                <figure><img src="{{ asset('images/menu5.jpg') }}" alt="#" />
                                    <h3> List Perlengkapan</h3></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- end product -->
    <!-- clients -->
    <div id="testimonial" class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        @yield('content')
    </div>
  
    <!-- end clients -->
    <!-- contact -->

    <!-- <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Get In <strong class="black"> Toucgh</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid padddd">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 padddd">
            <div class="map_section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <form class="main_form">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="map">
                </div>

            </div>
        </div>
    </div> -->

   
    <!-- end contact -->

    <br>
        </br>

    <!-- footer -->
    <!--  footer -->
    <footr>
        <div id= "footer" class="footer top_layer ">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <a href="#Home"> <img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
                            <p>Tujuan utama kami adalah memimpin perjalanan yang aman dan melestarikan hutan kami. Tour dipimpin oleh Wilderness First Responder bersertifikat dan memegang prinsip Leave No Trace (™) </p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Quick links</h3>
                            <ul class="Links_footer">
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Join Us</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Maintenance</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Language Packs</a> </li>
                                <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">LearnPress</a> </li>
                                <!-- <li><img src="{{ asset('icon/3.png') }}" alt="#" /> <a href="#">Booking</a> </li> -->
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Subcribe email</h3>
                            <p>Untuk mendapatkan informasi terbaru kami, masukkan e-mailmu : </p>
                            <input class="form-control" placeholder="Your Email" type="type" name="Your Email">
                            <button class="submit-btn">Submit</button>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="address">
                            <h3>Kontak kami</h3>

                            <ul class="loca">
                                <li>
                                    <a href="#"><img src="{{ asset('icon/loc.png') }}" alt="#" /></a>Malang
                                    <br>Indonesia </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/email.png') }}" alt="#" /></a>leafdc@gmail.com </li>
                                <li>
                                    <a href="#"><img src="{{ asset('icon/call.png') }}" alt="#" /></a>(+62)85678056</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footr>

    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: -7.983908,
                    lng: 112.621391
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: -7.983908,
                    lng: 112.621391
                },
                map: map,
                icon: image
            });
        }
    </script> -->
    <!-- google map js -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script> -->
    <!-- end google map js -->
    @stack('script')
</body>

</html>
