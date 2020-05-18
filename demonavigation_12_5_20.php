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
        <style>
            @import url(https://fonts.googleapis.com/css?family=Varela+Round);
 body {
	 background: #f5f5f5;
}
.nav .sub-menu {
  display: none;
  margin-top: 15px;
}
.overlay ul .sub-menu li a {
    font-size: 14px;
    text-transform: capitalize;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
     background-color: #eee0; 
}
.nav>li>a {
    position: relative;
    display: block;
    padding: 15px 0px;
    font-size: 14px;
    font-weight: 500;
}
 .container {
	 position: absolute;
	 width: 100%;
	 height: 100%;
	 text-align: center;
	 top: 40%;
	 left: 0;
	 margin: 0 auto;
	 font-family: 'Varela Round', sans-serif;
}
 .container p {
	 font-size: 20px;
}
 .container a {
	 display: inline-block;
	 position: relative;
	 text-align: center;
	 color: #1abc9c;
	 text-decoration: none;
	 font-size: 20px;
	 overflow: hidden;
	 top: 5px;
}
 .container a:after {
	 content: '';
	 position: absolute;
	 background: #1abc9c;
	 height: 2px;
	 width: 0%;
	 transform: translateX(-50%);
	 left: 50%;
	 bottom: 0;
	 transition: 0.35s ease;
}
 .container a:hover:after, .container a:focus:after, .container a:active:after {
	 width: 100%;
}
 h1 {
	 position: relative;
	 text-align: center;
	 font-family: 'Varela Round', serif;
}
 .button_container {
	 position: fixed;
	 top: 5%;
	 right: 2%;
	 height: 27px;
	 width: 35px;
	 cursor: pointer;
	 z-index: 100;
	 transition: opacity 0.25s ease;
}
 .button_container:hover {
	 opacity: 0.7;
}
 .button_container.active .top {
	 transform: translateY(11px) translateX(0) rotate(45deg);
	 background: #fff;
}
 .button_container.active .middle {
	 opacity: 0;
	 background: #fff;
}
 .button_container.active .bottom {
	 transform: translateY(-11px) translateX(0) rotate(-45deg);
	 background: #fff;
}
 .button_container span {
	 background: #000;
	 border: none;
	 height: 5px;
	 width: 100%;
	 position: absolute;
	 top: 0;
	 left: 0;
	 transition: all 0.35s ease;
	 cursor: pointer;
}
 .button_container span:nth-of-type(2) {
	 top: 11px;
}
 .button_container span:nth-of-type(3) {
	 top: 22px;
}
 .overlay {
	 position: fixed;
	 background: #000;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 0%;
	 opacity: 0;
	 visibility: hidden;
	 transition: opacity 0.35s, visibility 0.35s, height 0.35s;
	 overflow: hidden;
}
 .overlay.open {
	 opacity: 0.9;
	 visibility: visible;
	 height: 100%;
     z-index: 99;
}
 .overlay.open li {
	 animation: fadeInRight 0.5s ease forwards;
	 animation-delay: 0.35s;
}
 .overlay.open li:nth-of-type(2) {
	 animation-delay: 0.4s;
}
 .overlay.open li:nth-of-type(3) {
	 animation-delay: 0.45s;
}
 .overlay.open li:nth-of-type(4) {
	 animation-delay: 0.5s;
}
 .overlay nav {
	 position: relative;
	 height: auto;
	 top: 50%;
	 transform: translateY(-50%);
	 font-size: 50px;
	 font-family: 'Varela Round', serif;
	 font-weight: 400;
	 text-align: center;
}
 .overlay ul {
	 list-style: none;
	 padding: 0;
	 margin: 0 auto;
	 display: inline-block;
	 position: relative;
	 height: auto;
	 top: 5%;
}
 .overlay ul li {
	 display: block;
	 height: auto;
	 /* height: calc(100% / 4); */
	 min-height: 50px;
	 position: relative;
	 opacity: 0;
}
 .overlay ul li a {
	 display: block;
	 position: relative;
	 color: #fff;
	 text-decoration: none;
	 overflow: hidden;
	font-size: 20px;
	text-transform: uppercase;
}
 .overlay ul li a:hover:after, .overlay ul li a:focus:after, .overlay ul li a:active:after {
	 width: 100%;
}
 .overlay ul li a:after {
	 content: '';
	 position: absolute;
	 bottom: 0;
	 left: 50%;
	 width: 0%;
	 transform: translateX(-50%);
	 height: 3px;
	 background: #fff;
	 transition: 0.35s;
}
 @keyframes fadeInRight {
	 0% {
		 opacity: 0;
		 left: 20%;
	}
	 100% {
		 opacity: 1;
		 left: 0;
	}
}
 
        </style>
    </head>
    <body>
        <div class="container nav">
            <div id="toggle" class="button_container">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
                <div id="overlay" class="overlay">
                    <nav class="overlay-menunav overlay-menu">
                            <ul class="nav">
                                <li><a href="#">home</a></li>
                                <li>
                                	<a href="#">Overview</a>
                                	<ul class="sub-menu">
                                    <li><a href="#">About JP Infra</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Redevelopment Projects</a></li>
                                    <li><a href="#">Achievements</a></li>
                                  </ul>
                                </li>
                                <li>
                                  <a href="#">project</a>
                                  <ul class="sub-menu">
                                    <li><a href="#">Ongoing Projects</a></li>
                                    <li><a href="#">Delivered Projects</a></li>
                                    <li><a href="#">Construction Updates</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                  </ul>
                                </li>
                                <li>
                                    <a href="#">Pushing Boundaries</a>
                                    <ul class="sub-menu">
                                      <li><a href="#">Design Innovation</a></li>
                                      <li><a href="#">Integrated Living </a></li>
                                      <li><a href="#">Because We Care</a></li>
                                      <li><a href="#">Our Carbon Footprint</a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#">North</a>
                                    <ul class="sub-menu">
                                      <li><a href="#">North An Assured Way Of Living</a></li>
                                      <li><a href="#">Transforming Mira Road</a></li>
                                      <li><a href="#">Projects</a></li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#">Media</a>
                                    <ul class="sub-menu">
                                      <li><a href="#">Glimpses Of JP Infra</a></li>
                                      <li><a href="#">Articles</a></li>
                                      <li><a href="#">Newsletters</a></li>
                                      <li><a href="#">Workplace Events</a></li>
                                    </ul>
                                  </li>
                              </ul>
                           
                    </nav>
                </div>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <!-- navigation sub-menu display -->
       <script>
      $('#toggle').click(function() {
      $(this).toggleClass('active');
      $('#overlay').toggleClass('open');
      });


      $('.nav li > .sub-menu').parent().hover(function() {
        var submenu = $(this).children('.sub-menu');
        if ( $(submenu).is(':hidden') ) {
          $(submenu).slideDown(200);
          } else {
          $(submenu).slideUp(200);
        }
      });


    </script>
</body>
</html>




