<?php 
   function url(){
   	return sprintf(
   	  "%s://",
   	  isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
   	  $_SERVER['SERVER_NAME'],
   	  $_SERVER['REQUEST_URI']
   	);
     }
     
   // echo $_SERVER['SERVER_PROTOCOL']; die;
   // echo $full_url;
   // die;
   $hostUrl = $_SERVER['HTTP_HOST'];
   $arrayHostUrl = explode('.', $hostUrl);
   if($arrayHostUrl[sizeof($arrayHostUrl)-1]==="com"){
   
   	$full_url = url() . $_SERVER['HTTP_HOST'] . "/jpuat/";
   }
   else{
   	$full_url = url() . $_SERVER['HTTP_HOST'] . "/";
   }
   define('ASETS', $full_url); 
   ?>
<!doctype html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <base href="<?= ASETS ?>">
      <title>JP Infra</title>
      <!-- Required meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- My CSS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" href="css/aos.css" />
      <!-- My JS -->
      <!-- ==============================================
         Favicons
         =============================================== -->
      <link rel="shortcut icon" href="img/favicon.ico">
   </head>
   <body>
      <div class="top_arow"></div>
      <!-- Header Start Hrere -->
      <nav class="navbar navbar-inverse nav">
         <div class="container_main m_hide">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="index.php"><img src="img/JP Infra Logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li class="overLi2">
                     <a href="project.php">PROJECTS</a>
                     <div class="hoverLine hoverLine2"></div>
                  </li>
                  <!--<li class="dropdown overLi2">-->
                  <!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">PROJECTS <span class="caret"></span></a>-->
                  <!--    <div class="hoverLine hoverLine2"></div>-->
                  <!--    <div class="triangle-up"></div>-->
                  <!--    <ul class="dropdown-menu" role="menu">-->
                  <!--        <li class="nav-border"><a href="#">Ongoing</a></li>-->
                  <!--        <li><a href="#">Delivered</a></li>-->
                  <!--    </ul>-->
                  <!--</li>-->
                  <li class="overLi4">
                     <a href="pushing-boundaries.php">PUSHING BOUNDARIES</a>
                     <div class="hoverLine hoverLine4"></div>
                  </li>
                  <li class="overLi6">
                     <a href="contact.php">CONTACT US</a>
                     <div class="hoverLine hoverLine6"></div>
                  </li>
                  <li class=""><img class="navCall" src="img/Call.png"/></li>
                  <li class=""><img class="navMenu" src="img/menu.png"/></li>
                  <li class="">
                     <img class="navMenu1" src="img/cross.png"/>
                     <div class="menuPop">
                        <div class="triangle-up"></div>
                        <ul class="ulMenu">
                           <li class="li-1"><a href="overview.php">OVERVIEW</a></li>
                           <li class="li-1"><a href="northjp.php">NORTH</a></li>
                           <li class="li-1"><a href="media.php">MEDIA</a></li>
                           <li class="li-1"><a href="nri_corner.php">NRI CORNER</a></li>
                           <li class="li-1"><a href="blog">BLOGS</a></li>
                           <li class="li-3"><a href="work-with-us.php">WORK WITH US</a></li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="container_main d_hide">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="index.php"><img src="img/JP Infra Logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar2">
               <ul class="nav navbar-nav navbar-right">
                  <li class="overLi2">
                     <a href="project.php">PROJECTS</a>
                     <div class="hoverLine hoverLine2"></div>
                  </li>
                  <li class="overLi4">
                     <a href="sustainability.php">CSR</a>
                     <div class="hoverLine hoverLine4"></div>
                  </li>
                  <li class="overLi6">
                     <a href="contact.php">CONTACT US</a>
                     <div class="hoverLine hoverLine6"></div>
                  </li>
                  <li class="overLi6">
                     <a href="northjp.php">JP NORTH</a>
                     <div class="hoverLine hoverLine6"></div>
                  </li>
                  <li class="overLi6">
                     <a href="media.php">MEDIA</a>
                     <div class="hoverLine hoverLine6"></div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>