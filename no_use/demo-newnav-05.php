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
<!DOCTYPE HTML>
<html lang="en">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <base href="<?= ASETS ?>">
      <title>JP Infra</title>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700,300'> -->
  <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'> -->

      <!-- Required meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- My CSS -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
      <!-- <link rel="stylesheet" href="css/style.css"> -->
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="stylesheet" href="css/aos.css" />
      <!-- My JS -->
      <!-- ==============================================
         Favicons
        =============================================== -->
        <link rel="shortcut icon" href="img/favicon.ico">

<style type="text/css">
 body {
  font-family: 'Lato', sans-serif;
}
.container_main{
    width: 80%;
    margin: 0 auto;
    max-width: 98%;
}
.navbar-header {
  float: none;
}
.modal-fullscreen-menu .close {
  color: white;
  opacity: 1;
  padding: 10px;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  font-size: 20px;
}
.modal-fullscreen-menu .modal-dialog {
  margin: 0 auto;
  width: 100%;
  max-width: 768px;
  display: flex;
  height: 100%;
  align-items: center;
}
.modal-fullscreen-menu .modal-content {
  background-color: transparent;
  box-shadow: none;
  border: none;
}
.modal-fullscreen-menu .list-group {
  text-align: center;
  margin: 0 auto;
  width: 100%;
}
.modal-fullscreen-menu .list-group a {
  font-weight: 200;
    letter-spacing: 0.05em;
    border: none;
    transition: all 0.25s ease;
    background-color: transparent;
    color: white;
    padding: 20px 0;
    height: 50px;
    font-size: 25px;
    line-height: 0;
}
.modal-fullscreen-menu .list-group a:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  z-index: -1;
  opacity: 0;
  transform: scale3d(0.7, 1, 1);
  transition: transform 0.4s, opacity 0.4s;
}
.modal-backdrop.in {
  opacity: 1;
}

.jumbotron {
  display: flex;
  align-items: center;
  margin: 0;
  height: 100vh;
  color: white;
  background-color: #333;
}

.list-group > .list-group {
  display: none;
  margin-bottom: 0;
}
.glyphicon {
    position: relative;
    top: 4px;
    display: inline-block;
    font-family: "Glyphicons Halflings";
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.panel a{
  text-decoration: unset;
}
.navbar-brand>img{
    display: block;
    width: 70%;
    /*position: relative;*/
    top: 37px;
    z-index: 999999999 !important;
}
@media only screen and (max-width: 768px) {
  #menu{
    margin-top:-100%;
  }
}

</style>
  </head>

  <body>
    <div class="top_arow"></div>

    <nav class='navbar navbar-inverse navbar-fixed-top'>
      <div class='container_main'>
        <div class='navbar-header'>
           <a class="navbar-brand" href="index.php"><img src="img/JP Infra Logo.png"></a>

          <button class='btn navbar-btn btn-link pull-right' data-target='#modalNavigation' data-toggle='modal' type='button'>
            <span class='sr-only'>Open navigation</span>
            <span class='glyphicon glyphicon-menu-hamburger'></span>
          </button>
        </div>
      </div>
  </nav>

  <div class='modal fade modal-fullscreen-menu' id='modalNavigation' role='dialog' tabindex='-1'>
    <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
      <span class='sr-only'>Close navigation</span>
      <span class='glyphicon glyphicon-remove'></span>
    </button>
    <div class='modal-dialog'>
      <nav class='list-group'>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <a class='list-group-item' href='#'>Home</a>
          <div class="panel" style="background-color: unset;margin-top:2%;margin-bottom:3.5%;border:0px solid white;">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" id="headingOne">Services</a>

            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
              <ul class="list-group">
                <a href="#" class="list-group-item" style="font-size:15px;">Services 1<!-- <i class="fa fa-long-arrow-right arrow1" aria-hidden="true"></i>--></a>
                <a href="#" class="list-group-item" style="font-size:15px;">Services 2</a>
                <a href="#" class="list-group-item" style="font-size:15px;">Services 3</a>
              </ul>
            </div>
          </div>
        
          <div class="panel" style="background-color: unset;margin-top:2%;margin-bottom:2%;border:0px solid white;">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="headingTwo">Meet the Team</a> 
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <ul class="list-group">
              	<a href="#t" class="list-group-item" style="font-size:15px;">Team 1</a>
                <a href="#t" class="list-group-item" style="font-size:15px;">Team 2</a>
                <a href="#t" class="list-group-item" style="font-size:15px;">Team 3</a>
              </ul>
            </div>
          </div>
          
          <a class='list-group-item' href='#'>Careers</a>
          <a class='list-group-item' href='#'>Contact Us</a>
        </div>
      </nav>
    </div>
  </div>


<!-- js original -->
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script> -->
  <!-- <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script> -->



<!-- our js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>