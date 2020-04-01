<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="theme-color" content="#000000">
      <title>JP Infra</title>
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700">
      <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <style>
         body {
         font-family: 'Ubuntu', sans-serif;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
         overflow-x: hidden;
         color: #4e4e4e;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         position: relative;
         left: 0;
         }
         body > .over-menu {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         position: fixed;
         height: 100%;
         content: '';
         width: 100%;
         left: 0;
         top: 0;
         visibility: hidden;
         opacity: 0;
         background: rgba(0, 0, 0, 0.6);
         z-index: 9;
         }
         body.open-menu {
         left: -250px;
         }
         body.open-menu > .over-menu {
         visibility: visible;
         opacity: 1;
         }
         body.open-menu .menu-container {
         right: 0 !important;
         }
         a {
         text-decoration: none !important;
         outline: none;
         }
         .hidden {
         display: none;
         }
         section {
         position: relative;
         width: 100%;
         float: left;
         }
         header {
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         -ms-transition: all 0.3s ease;
         -o-transition: all 0.3s ease;
         transition: all 0.3s ease;
         background-color: transparent;
         width: 100%;
         float: left;
         position: fixed;
         z-index: 10;
         }
         header::before {
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         -ms-transition: all 0.3s ease;
         -o-transition: all 0.3s ease;
         transition: all 0.3s ease;
         transform-origin: 0;
         background: #FFF;
         position: absolute;
         width: 100%;
         content: '';
         top: 0;
         right: 0;
         height: 0;
         }
         header .desk-menu {
         position: relative;
         width: 100%;
         float: left;
         }
         header .desk-menu .logo {
         position: absolute;
         float: left;
         }
         header .desk-menu .logo-adn {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         margin: 20px 0 0;
         position: relative;
         display: table;
         z-index: 1;
         }
         header .desk-menu .logo-adn a {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         background-image: url("https://www.dotwisedigital.com/jpuat/img/JP%20Infra%20Logo.png");
         background-position: 0;
         color: rgba(0, 0, 0, 0);
         background-repeat: no-repeat;
         background-size: contain;
         display: block;
         width: 150px;
         height: 49px;
         font-size: 0;
         }
         header .desk-menu .box-menu {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         position: relative;
         padding: 16px 0 0;
         display: block;
         margin: 0 auto;
         float: right;
         text-align: center;
         }
         header .desk-menu .menu-container {
         float: left;
         }
         header .desk-menu .menu-container .menu-head,
         header .desk-menu .menu-container .menu-foot {
         width: 100%;
         float: left;
         display: none;
         }
         header .desk-menu .menu-container .menu-head {
         background: #ffffff;
         padding: 16px 10px;
         }
         header .desk-menu .menu-container .menu-head .e1 {
         padding: 3px 0;
         float: left;
         }
         header .desk-menu .menu-container .menu-head .e1 img {
         width: 60%;
         float: left;
         height: auto;
         }
         header .desk-menu .menu-container .menu-head .client {
         color: #FFF;
         float: right;
         }
         header .desk-menu .menu-container .menu-head .client span {
         font-family: 'Ubuntu', sans-serif;
         text-transform: uppercase;
         padding: 5px 42px 5px  0;
         position: relative;
         line-height: 100%;
         font-size: 9px;
         display: block;
         }
         header .desk-menu .menu-container .menu-head .client i {
         position: absolute;
         font-size: 30px;
         right: 0;
         top: 0;
         }
         header .desk-menu .menu-container .menu-foot {
         position: absolute;
         bottom: 0;
         padding: 15px 0;
         }
         header .desk-menu .menu-container .menu-foot .social {
         display: table;
         margin: 0 auto;
         }
         header .desk-menu .menu-container .menu-foot .social a {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         display: inline-block;
         position: relative;
         margin: 0 5px 0 0;
         color: #FFF;
         font-size: 13px;
         text-align: center;
         padding: 5px 0;
         border-radius: 50%;
         background: #797c82;
         width: 29px;
         height: 29px;
         }
         header .desk-menu .menu-container .menu-foot .social a:last-child {
         margin: 0;
         }
         header .desk-menu .menu-container .menu-foot .social a:hover {
         background: #a4a7ac;
         }
         header .desk-menu .menu-container .menu-foot hr {
         margin: 15px auto 20px;
         display: table;
         width: calc(100% - 20px);
         }
         header .desk-menu .menu-container .menu-foot address {
         position: relative;
         text-align: left;
         padding: 0 15px;
         margin: 0;
         }
         header .desk-menu .menu-container .menu-foot address i {
         position: absolute;
         left: 0;
         top: 0;
         }
         header .desk-menu .menu-container .menu-foot address span {
         padding: 0 0 0 20px;
         position: relative;
         margin-bottom: 5px;
         font-size: 12px;
         display: block;
         }
         header .desk-menu .menu-container .menu {
         float: left;
         padding: 0;
         margin: 0 20px 0 0;
         list-style: none;
         position: relative;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         }
         header .desk-menu .menu-container .menu li.back {
         display: none;
         }
         header .desk-menu .menu-container .menu > li {
         -webkit-transition: all 0.33s ease;
         -moz-transition: all 0.33s ease;
         -ms-transition: all 0.33s ease;
         -o-transition: all 0.33s ease;
         transition: all 0.33s ease;
         margin: 0 0 0 10px;
         float: left;
         cursor: pointer;
         position: relative;
         overflow: inherit;
         }
         header .desk-menu .menu-container .menu > li a {
         position: relative;
         text-transform: uppercase;
         font-family: 'Ubuntu', sans-serif;
         font-size: 13.9px;
         padding: 19px 8px;
         display: block;
         color: #4e4e4e;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children > a {
         padding: 19px 20px 19px 8px;
         position: relative;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children > a::before, header .desk-menu .menu-container .menu > li.menu-item-has-children > a::after {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         background-color: #4e4e4e;
         position: absolute;
         content: '';
         height: 1px;
         width: 7px;
         top: 26px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children > a::before {
         -webkit-transform: rotate(45deg);
         -moz-transform: rotate(45deg);
         -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
         transform: rotate(45deg);
         right: 10px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children > a::after {
         -webkit-transform: rotate(-45deg);
         -moz-transform: rotate(-45deg);
         -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
         transform: rotate(-45deg);
         right: 6px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu {
         box-shadow: 1px 2px 4px rgba(46, 61, 73, 0.2);
         -webkit-transition: all 0.1s ease-in-out;
         -moz-transition: all 0.1s ease-in-out;
         -ms-transition: all 0.1s ease-in-out;
         -o-transition: all 0.1s ease-in-out;
         transition: all 0.1s ease-in-out;
         -webkit-overflow-scrolling: touch;
         min-width: 200px;
         position: absolute;
         list-style: none;
         background: #FFF;
         padding: 0;
         float: left;
         display: table;
         left: 0;
         width: 100%;
         float: left;
         display: none;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li {
         width: 100%;
         -webkit-transition: all 0.33s ease;
         -moz-transition: all 0.33s ease;
         -ms-transition: all 0.33s ease;
         -o-transition: all 0.33s ease;
         transition: all 0.33s ease;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li > a {
         color: #4e4e4e;
         padding: 12px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li .sub-menu {
         display: none;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::before, header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::after {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         background-color: #4e4e4e;
         position: absolute;
         content: '';
         height: 1px;
         width: 7px;
         top: 24px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::before {
         transform: rotate(45deg);
         right: 6px;
         top: 19px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::after {
         transform: rotate(-45deg);
         right: 6px;
         top: 23px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children:hover > a {
         display: block;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children:hover .sub-menu {
         display: block;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li:hover > a {
         color: #4285f4;
         background-color: #eeeff1;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li:hover > a::before {
         -webkit-transform: rotate(142deg);
         -moz-transform: rotate(142deg);
         -ms-transform: rotate(142deg);
         -o-transform: rotate(142deg);
         transform: rotate(142deg);
         top: 23px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li:hover > a::after {
         -webkit-transform: rotate(42deg);
         -moz-transform: rotate(42deg);
         -ms-transform: rotate(42deg);
         -o-transform: rotate(42deg);
         transform: rotate(42deg);
         right: 11px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu .sub-menu {
         left: 100%;
         margin-top: -43px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a {
         text-align: left;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a:hover {
         margin-top: 0;
         }
         header .desk-menu .menu-container .menu > li.line {
         -webkit-transition: all 0.3s;
         -moz-transition: all 0.3s;
         -ms-transition: all 0.3s;
         -o-transition: all 0.3s;
         transition: all 0.3s;
         position: absolute;
         bottom: 11px;
         left: 0;
         height: 0px;
         pointer-events: none;
         border: 1px solid #4285f4;
         background: #4285f4;
         -webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1);
         -webkit-transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
         transition-timing-function: cubic-bezier(1, 0.01, 0, 1.22);
         opacity: 0;
         display: block;
         }
         header .desk-menu .menu-container .menu > li:hover > a {
         color: #4285f4;
         }
         header .desk-menu .menu-container .menu > li:hover > a::before {
         -webkit-transform: translateX(5px) rotate(-45deg);
         -moz-transform: translateX(5px) rotate(-45deg);
         -ms-transform: translateX(5px) rotate(-45deg);
         -o-transform: translateX(5px) rotate(-45deg);
         transform: translateX(5px) rotate(-45deg);
         width: 10px;
         right: 12px;
         }
         header .desk-menu .menu-container .menu > li:hover > a::after {
         -webkit-transform: rotate(45deg);
         -moz-transform: rotate(45deg);
         -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
         transform: rotate(45deg);
         width: 10px;
         right: 7px;
         }
         header .desk-menu .menu-container .menu > li:hover.menu-item-has-children .sub-menu {
         display: block;
         }
         header .hamburger-menu {
         display: none;
         }
         header.small::before {
         box-shadow: 0px 5px 25px 0 rgba(46, 61, 73, 0.2);
         height: 100%;
         }
         header.small .desk-menu .menu-container .menu > li.menu-item-has-children > a::before, header.small .desk-menu .menu-container .menu > li.menu-item-has-children > a::after {
         background-color: #4e4e4e;
         }
         header.small .desk-menu .logo-adn {
         margin-top: 14px;
         }
         header.small .desk-menu .logo-adn a {
         background-image: url("../img/empresa-1-logo.svg");
         height: 30px;
         width: 140px;
         }
         header.small .desk-menu .box-menu {
         padding: 0;
         }
         header.small .desk-menu .box-menu ul li a {
         color: #4e4e4e;
         }
         @media (max-width: 991px) {
         header {
         height: 60px;
         }
         header .hamburger-menu {
         -webkit-transition: all 0.3s ease;
         -moz-transition: all 0.3s ease;
         -ms-transition: all 0.3s ease;
         -o-transition: all 0.3s ease;
         transition: all 0.3s ease;
         display: block;
         position: absolute;
         top: 45px;
         bottom: 0;
         margin: auto;
         width: 40px;
         height: 40px;
         cursor: pointer;
         right: 0;
         z-index: 11;
         }
         header .hamburger-menu span {
         text-transform: uppercase;
         left: calc(-100% + -5px);
         padding: 8px 9px 8px 0;
         top: calc(50% - 18px);
         position: absolute;
         font-size: 13px;
         color: #FFF;
         }
         header .hamburger-menu .bar,
         header .hamburger-menu .bar::after,
         header .hamburger-menu .bar::before {
         width: 35px;
         height: 3px;
         }
         header .hamburger-menu .bar {
         position: relative;
         -webkit-transform: translateY(25px);
         -moz-transform: translateY(25px);
         -ms-transform: translateY(25px);
         -o-transform: translateY(25px);
         transform: translateY(25px);
         -webkit-transition: all 0.1s ease;
         -moz-transition: all 0.1s ease;
         -ms-transition: all 0.1s ease;
         -o-transition: all 0.1s ease;
         transition: all 0.1s ease;
         background: #4e4e4e;
         top: -7px;
         }
         header .hamburger-menu .bar::before, header .hamburger-menu .bar::after {
         position: absolute;
         background: #4e4e4e;
         content: '';
         left: 0;
         border-radius: 5px;
         }
         header .hamburger-menu .bar::before {
         bottom: 10px;
         -webkit-transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -moz-transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -ms-transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -o-transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         transition: bottom 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         }
         header .hamburger-menu .bar::after {
         top: 10px;
         -webkit-transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -moz-transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -ms-transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -o-transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         transition: top 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms cubic-bezier(0.23, 1, 0.32, 1);
         }
         header .hamburger-menu .bar.animate {
         background: rgba(255, 255, 255, 0);
         }
         header .hamburger-menu .bar.animate::after {
         top: 0;
         -webkit-transform: rotate(45deg);
         -moz-transform: rotate(45deg);
         -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
         transform: rotate(45deg);
         -webkit-transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -moz-transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -ms-transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -o-transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         transition: top 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         }
         header .hamburger-menu .bar.animate::before {
         bottom: 0;
         -webkit-transform: rotate(-45deg);
         -moz-transform: rotate(-45deg);
         -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
         transform: rotate(-45deg);
         -webkit-transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -moz-transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -ms-transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         -o-transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         transition: bottom 300ms cubic-bezier(0.23, 1, 0.32, 1), transform 300ms 300ms cubic-bezier(0.23, 1, 0.32, 1);
         }
         header .desk-menu .box-menu ul li a {
         color: #FFF !important;
         border-bottom: 1px solid #eaeaea;
         }
         header .desk-menu .menu-container {
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         background: #FFF;
         position: fixed;
         height: 100%;
         width: 250px;
         right: -250px;
         top: 0;
         }
         header .desk-menu .menu-container .menu-header-container {
         position: relative;
         float: left;
         }
         header .desk-menu .menu-container .menu-header-container ul {
         padding: 10px !important;
         }
         header .desk-menu .menu-container .menu {
         margin: 0;
         }
         header .desk-menu .menu-container .menu li.back {
         position: relative;
         display: block;
         }
         header .desk-menu .menu-container .menu li.back a {
         padding: 12px 12px 12px 35px !important;
         }
         header .desk-menu .menu-container .menu li.back a::before, header .desk-menu .menu-container .menu li.back a::after {
         background-color: #4e4e4e;
         position: absolute;
         content: '';
         height: 2px;
         width: 7px;
         top: 23px;
         }
         header .desk-menu .menu-container .menu li.back a::before {
         -webkit-transform: rotate(-45deg) !important;
         -moz-transform: rotate(-45deg) !important;
         -ms-transform: rotate(-45deg) !important;
         -o-transform: rotate(-45deg) !important;
         transform: rotate(-45deg) !important;
         top: 20px !important;
         right: inherit !important;
         left: 15px !important;
         }
         header .desk-menu .menu-container .menu li.back a::after {
         -webkit-transform: rotate(45deg) !important;
         -moz-transform: rotate(45deg) !important;
         -ms-transform: rotate(45deg) !important;
         -o-transform: rotate(45deg) !important;
         transform: rotate(45deg) !important;
         top: 24px !important;
         left: 15px !important;
         }
         header .desk-menu .menu-container .menu li.line {
         display: none !important;
         }
         header .desk-menu .menu-container .menu > li {
         width: 100%;
         float: left;
         margin: 0;
         text-align: left;
         }
         header .desk-menu .menu-container .menu > li a {
         font-family: 'Ubuntu', sans-serif;
         padding: 12px;
         color: #4e4e4e !important;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children {
         position: initial;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a {
         padding: 12px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a::before, header .desk-menu .menu-container .menu > li.menu-item-has-children a::after {
         background: #4e4e4e;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a::before {
         right: 6px !important;
         top: 22px !important;
         width: 7px !important;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a::after {
         top: 26px !important;
         width: 7px !important;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu {
         box-shadow: none;
         -webkit-transition: all 0.3s ease-in-out;
         -moz-transition: all 0.3s ease-in-out;
         -ms-transition: all 0.3s ease-in-out;
         -o-transition: all 0.3s ease-in-out;
         transition: all 0.3s ease-in-out;
         display: block !important;
         background: #FFF;
         z-index: 1;
         top: 0;
         left: 100%;
         height: 100%;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu .sub-menu {
         margin-top: 0;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu.open-sub {
         left: 0%;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::before, header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::after {
         background-color: #4e4e4e;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::before {
         -webkit-transform: rotate(45deg) !important;
         -moz-transform: rotate(45deg) !important;
         -ms-transform: rotate(45deg) !important;
         -o-transform: rotate(45deg) !important;
         transform: rotate(45deg) !important;
         right: 6px !important;
         top: 22px !important;
         width: 7px !important;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::after {
         -webkit-transform: rotate(-45deg) !important;
         -moz-transform: rotate(-45deg) !important;
         -ms-transform: rotate(-45deg) !important;
         -o-transform: rotate(-45deg) !important;
         transform: rotate(-45deg) !important;
         right: 6px !important;
         top: 26px !important;
         width: 7px !important;
         }
         header .desk-menu .menu-container .menu > li:hover a:before {
         -webkit-transform: rotate(45deg);
         -moz-transform: rotate(45deg);
         -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
         transform: rotate(45deg);
         right: 6px;
         top: 22px;
         }
         header .desk-menu .menu-container .menu > li:hover a::after {
         -webkit-transform: rotate(-45deg);
         -moz-transform: rotate(-45deg);
         -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
         transform: rotate(-45deg);
         right: 6px;
         top: 26px;
         }
         header .desk-menu .menu-container .menu-head {
         display: block;
         }
         header .desk-menu .menu-container .menu-foot {
         display: block;
         }
         header.small .hamburger-menu {
         top: 31px;
         }
         header.small .hamburger-menu span {
         color: #4e4e4e;
         }
         header.small .hamburger-menu .bar {
         background: #4e4e4e;
         }
         header.small .hamburger-menu .bar::before, header.small .hamburger-menu .bar::after {
         background: #4e4e4e;
         }
         header.small .hamburger-menu .bar.animate {
         background: rgba(255, 255, 255, 0);
         }
         }
         @media (max-width: 767px) {
         header .desk-menu .menu-container .menu li a {
         padding: 8px 12px;
         }
         header .desk-menu .menu-container .menu li.back a {
         padding: 8px 12px 8px 35px !important;
         }
         header .desk-menu .menu-container .menu li.back a::before {
         top: 17px !important;
         }
         header .desk-menu .menu-container .menu li.back a::after {
         top: 21px !important;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a {
         padding: 8px 12px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a::before {
         top: 18px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children a::after {
         top: 22px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li > a {
         padding: 8px 12px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::before {
         top: 18px;
         }
         header .desk-menu .menu-container .menu > li.menu-item-has-children .sub-menu li.menu-item-has-children > a::after {
         top: 22px;
         }
         }
         @media (max-width: 481px) {
         header .desk-menu .logo-adn a {
         width: 100px;
         height: 30px;
         }
         header .hamburger-menu {
         top: 28px;
         right: 0;
         }
         header .hamburger-menu .bar,
         header .hamburger-menu .bar::after,
         header .hamburger-menu .bar::before {
         width: 30px;
         height: 3px;
         }
         header .hamburger-menu .bar::before {
         bottom: 9px;
         }
         header .hamburger-menu .bar::after {
         top: 9px;
         }
         header.small .desk-menu .logo-adn a {
         width: 100px;
         height: 30px;
         }
         }
         @media (max-height: 550px) {
         header .desk-menu .menu-container .menu-foot hr,
         header .desk-menu .menu-container .menu-foot address {
         display: none;
         }
         }
         .resize-message {
         margin: 40vh auto 0;
         display: table;
         }
         .resize-message span {
         text-transform: uppercase;
         text-align: center;
         display: block;
         color: #666;
         }
         .resize-message span i {
         font-size: 30px;
         }
         .author {
         position: fixed;
         bottom: 0;
         z-index: 2;
         width: 100%;
         padding: 30px 15px 15px;
         background: rgba(0, 0, 0, 0);
         background: -moz-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.54) 54%, black 100%);
         background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0)), color-stop(54%, rgba(0, 0, 0, 0.54)), color-stop(100%, black));
         background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.54) 54%, black 100%);
         background: -o-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.54) 54%, black 100%);
         background: -ms-linear-gradient(top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.54) 54%, black 100%);
         background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.54) 54%, black 100%);
         filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#000000', GradientType=0 );
         }
         .author a {
         font-size: 16px;
         display: table;
         margin: 0 auto;
         text-decoration: none;
         color: #FFF;
         font-weight: 700;
         }
         .author a span {
         color: #4285f4;
         }
      </style>
   </head>
   <body>
      <div class="over-menu"></div>
      <div id="wrap">
         <header class="header" id="header-sroll">
            <div class="container">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="desk-menu">
                        <div class="logo">
                           <h1 class="logo-adn">
                              <a title="Davidson Silva - Desenvolvedor front-end em BH" href="#">
                              Akshay <span>Khambe</span>
                              </a>
                           </h1>
                        </div>
                        <nav class="box-menu">
                           <div class="menu-container">
                              <div class="menu-head">
                                 <a href="#" class="e1">
                                 <img src="https://www.dotwisedigital.com/jpuat/img/JP%20Infra%20Logo.png" alt="Davidson Silva">
                                 </a>
                                 <a href="#" target="_blank" class="client">
                                 <span>
                                 Olá funlano
                                 <i class="icon-user"></i></span>
                                 </a>
                              </div>
                              <div class="menu-header-container">
                                 <ul id="cd-primary-nav" class="menu">
                                    <li class="menu-item menu-item-has-children">
                                       <a href="#">Projects</a>
                                       <ul class="sub-menu">
                                          <li class="menu-item">
                                             <a href="#">Ongoing Project</a>
                                          </li>
                                          <li class="menu-item">
                                             <a href="#">Delivered Projects</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                       <a href="#">Pushing Boundaries</a>
                                       <ul class="sub-menu">
                                          <li class="menu-item">
                                             <a href="#">One</a>
                                          </li>
                                          <li class="menu-item">
                                             <a href="h#">Two</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                       <a href="#">North</a>
                                       <ul class="sub-menu">
                                          <li class="menu-item menu-item-has-children">
                                             <a href="#">North One</a>
                                             <ul class="sub-menu">
                                                <li class="menu-item">
                                                   <a href="#">One</a>
                                                </li>
                                                <li class="menu-item">
                                                   <a href="#">Two</a>
                                                </li>
                                                <li class="menu-item">
                                                   <a href="#">Three</a>
                                                </li>
                                                <li class="menu-item">
                                                   <a href="#">Four</a>
                                                </li>
                                                <li class="menu-item">
                                                   <a href="#">Five</a>
                                                </li>
                                             </ul>
                                          </li>
                                          <li class="menu-item menu-item-has-children">
                                             <a href="#">North Two</a>
                                             <ul class="sub-menu">
                                                <li class="menu-item">
                                                   <a href="#">One</a>
                                                </li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                       <a href="#">Media</a>
                                       <ul class="sub-menu">
                                          <li class="menu-item">
                                             <a href="#">Media One</a>
                                          </li>
                                          <li class="menu-item">
                                             <a href="#">Media Two</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="contact menu-item ">
                                       <a href="#">Contact Us</a>
                                    </li>
                                    <li class="line"></li>
                                 </ul>
                              </div>
                              <div class="menu-foot">
                                 <div class="social">
                                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                 </div>
                                 <hr/>
                                 <address>
                                    <span class="tel"><i class="icon-telephone"></i> +91 9999999999</span>
                                    <span class="email"><i class="icon-mail"></i> email@jpinfra.com</span>
                                    <span class="end"><i class="icon-location"></i> Mumbai</span>
                                 </address>
                              </div>
                           </div>
                           <div class="hamburger-menu">
                              <div class="bar"></div>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="conteudo">
            <div class="container">
               <div class="resize-message">
                  <span>Resize your browser<br/>
                  <i class="fas fa-arrows-alt-h"></i>
                  </span>
               </div>
            </div>
            <div class="author">
               <a href="" target="_blank">Dotwise <span>Digital</span></a>
            </div>
         </div>
      </div>
      <script>
         (function($) {
         var size;
         
         //SMALLER HEADER WHEN SCROLL PAGE
         function smallerMenu() {
           var sc = $(window).scrollTop();
           if (sc > 40) {
               $('#header-sroll').addClass('small');
           }else {
               $('#header-sroll').removeClass('small');
           }
         }
         
         // VERIFY WINDOW SIZE
         function windowSize() {
           size = $(document).width();
           if (size >= 991) {
               $('body').removeClass('open-menu');
               $('.hamburger-menu .bar').removeClass('animate');
           }
         };
         
         // ESC BUTTON ACTION
         $(document).keyup(function(e) {
           if (e.keyCode == 27) {
               $('.bar').removeClass('animate');
               $('body').removeClass('open-menu');
               $('header .desk-menu .menu-container .menu .menu-item-has-children a ul').each(function( index ) {
                   $(this).removeClass('open-sub');
               });
           }
         });
         
         $('#cd-primary-nav > li').hover(function() {
           $whidt_item = $(this).width();
           $whidt_item = $whidt_item-8;
         
           $prevEl = $(this).prev('li');
           $preWidth = $(this).prev('li').width();
           var pos = $(this).position();
           pos = pos.left+4;
           $('header .desk-menu .menu-container .menu>li.line').css({
               width:  $whidt_item,
               left: pos,
               opacity: 1
           });
         });
         
         // ANIMATE HAMBURGER MENU
         $('.hamburger-menu').on('click', function() {
           $('.hamburger-menu .bar').toggleClass('animate');
           if($('body').hasClass('open-menu')){
               $('body').removeClass('open-menu');
           }else{
               $('body').toggleClass('open-menu');
           }
         });
         
         $('header .desk-menu .menu-container .menu .menu-item-has-children ul').each(function(index) {
           $(this).append('<li class="back"><a href="#">Back</a></li>');
         });
         
         // RESPONSIVE MENU NAVIGATION
         $('header .desk-menu .menu-container .menu .menu-item-has-children > a').on('click', function(e) {
           e.preventDefault();
           if(size <= 991){
               $(this).next('ul').addClass('open-sub');
           }
         });
         
         // CLICK FUNCTION BACK MENU RESPONSIVE
         $('header .desk-menu .menu-container .menu .menu-item-has-children ul .back').on('click', function(e) {
           e.preventDefault();
           $(this).parent('ul').removeClass('open-sub');
         });
         
         $('body .over-menu').on('click', function() {
           $('body').removeClass('open-menu');
           $('.bar').removeClass('animate');
         });
         
         $(document).ready(function(){
           windowSize();
         });
         
         $(window).scroll(function(){
           smallerMenu();
         });
         
         $(window).resize(function(){
           windowSize();
         });
         
         })(jQuery);
      </script>
   </body>
</html>