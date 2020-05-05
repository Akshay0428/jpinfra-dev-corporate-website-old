<!DOCTYPE html>
<html>
<head>
	<title>new demo navbar</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Exo:300,400,500,600,700&display=swap');

* {
  font-family: 'Exo', sans-serif;
  color: #fff;
}

.content {
  margin: 0 auto;
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-25%,-50%);
  z-index: 2;
}

body {
  background-image: url(https://images.unsplash.com/photo-1561679660-1b9e82450a1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80);
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
}

body:before {
     content: "";
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,.3);
    z-index: 1;
}

/* OPEN / CLOSE BTNS */
.menu-btn {
    z-index: 999;
    display: inline;
    font-size: 32px;
}
.menu-btn a {
    display: inline-block;
    text-decoration: none;
    /* safari hack */
}
.btn-open:after {
    color: #fff;
    content: "\f394";
    font-family: "Ionicons";
    -webkit-transition: all .2s linear 0s;
    -moz-transition: all .2s linear 0s;
    -o-transition: all .2s linear 0s;
    transition-property: all .2s linear 0s;
}
.btn-open:hover:after {
    color: #fff;
}
.btn-close:after {
    color: #fff;
    content: "\f2d7";
    font-family: "Ionicons";
    -webkit-transition: all .2s linear 0s;
    -moz-transition: all .2s linear 0s;
    -o-transition: all .2s linear 0s;
    transition-property: all .2s linear 0s;
}
.btn-close:hover:after {
    color: #fff;
}
/* OVERLAY */
.overlay {
    position: fixed;
    top: 0;
    z-index: 99;
    display: none;
    overflow: auto;
    width: 100%;
    height: 100%;
    background: #080610ed;
}
.overlay .menu {
    margin: 100px auto;
    width: 100%;
}
.overlay .menu ul {
    margin: 0;
    padding: 0;
    width: 100%;
}
.overlay .menu ul li {
    float: left;
    padding: 6px 0 0 0;
    list-style: none;
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 40px;
    display: inline-block;
    overflow: hidden;
    width: 100%;
    margin-top: 5rem;
}
.overlay .menu ul li .sub {
  position: absolute;
  left: 100%;
  top: 0;
  margin-top: 0;
}
.overlay .menu ul li ul li ul.sub.move {
    transform: translateX(0%)!important;
}
li.return-lvl {
    padding-top: 50px!important;
    opacity: 0.5;
}
.overlay .menu ul {
  overflow: hidden;
}
.overlay .menu ul li ul {
  overflow: visible;
}

.overlay .menu ul li ul {
  transform: translateX(0);
  transition: all 0.3s ease;
}
.overlay .menu ul li ul.move {
  transform: translateX(-100%);
}
.overlay .menu ul li#social {
    width: 100%;
    margin-top: 50px;
}
.overlay .menu ul li a {
    color: #ffffff;
    font-weight: 300;
    font-size: 20px;
    font-family: 'Exo', sans-serif;
}
.overlay .menu ul li#social a {
}
.overlay .menu ul ul {
    margin-top: 10px;
    position: relative;
}
.overlay .menu ul ul li {
    float: none;
    margin: 0;
    width: 100%;
    border: 0;
}
.overlay .menu ul ul li a {
    color: #fff;
    text-transform: capitalize;
    font-weight: 300;
    font-size: 2rem;
    font-family: 'Exo', sans-serif;
}
.overlay .menu ul ul li a:hover {
    color: #fff;
    font-weight:600;
}

.overlay * {
  color: #fff!important;
}
/* RESPONSIVE */
@media screen and (max-width: 768px) {
    .overlay .menu ul li {
        float: none;
        margin-bottom: 25px;
        width: 100%;
    }
    .overlay .menu ul li:last-child {
        border: 0;
    }
    .overlay .menu ul ul {
        margin-top: 20px;
    }
    .menu-btn {
        right: 25px;
    }
}

.menu-btn a span {
    font-size: 18px;
    color: #fff;
    line-height: 18px;
    font-weight: 600;
    position: relative;
    top: -5px;
    right: 5px;
}

.navbar-brand {
  color: #fff;
  font-weight: bold;
  font-size:2rem;
  text-decoration: underline;
}
	</style>
	<link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<header>
  <nav class="navbar fixed-top">
    <div class="container">

      <a class="navbar-brand" href="#">Chris Whiting
      </a>

      <span class="navbar-text">
        <div class="menu-btn">
          <a class="btn-open" href="javascript:void(0)"><span>MENU</span></a>
        </div>
      </span>

    </div>
  </nav>
</header>

<div class="content">
  <h1>Fullscreen Hero Image & Navigation Overlay</h1>
  <p>A simple hero area with navbar overlay using Bootstrap 4.0</p>
</div>
    
<div class="overlay">
  <div class="menu">
    <div class="container">
      <ul>

        <li>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="service-lvl"><a href="#">Services</a>
              <ul class="sub">
                <li><a href="#">Service 1</a></li>
                <li><a href="#">Service 2</a></li>
                <li><a href="#">Service 3</a></li>
                <li class="return-lvl"><a href="#">Return</a></li>
              </ul>
            </li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function () {

    $(".menu-btn a").click(function () {
        $(".overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });


    $('.menu .service-lvl a').on('click', function () {
        $(this).parent().parent().toggleClass('move');
    });
  
    $('.menu .service-lvl .sub .return-lvl a').on('click', function () {
        $(this).parent().parent().parent().parent().removeClass('move');
    });

});
</script>
</body>
</html>