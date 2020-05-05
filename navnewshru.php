<html>l
    <head>
        <title>navbar</title>
        <style>
@import url(https://fonts.googleapis.com/css?family=Varela+Round);
 @import url(https://fonts.googleapis.com/css?family=Varela+Round);
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
 /*body {
   background: #f5f5f5;
}
 .container {
   position: absolute;
   width: 100%;
   height: 100vh;
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
   color: #000;
   text-decoration: none;
   font-size: 20px;
   overflow: hidden;
   top: 5px;
}
 .container a:after {
   content: '';
   position: absolute;
   background: #000;
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
   height: 70%;
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
   height: 100%;
}
 .overlay ul li {
   display: block;
   height: 25%;
   height: calc(100% / 12);
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
}*/
        </style>
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
        <div class="container">
            <div id="toggle" class="button_container">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
                <div id="overlay" class="overlay">
                    <nav class="overlay-menu">
                        <ul>
                            <li> <a href="#">project</a></li>
                            <li> <a href="#">pushing boundaries</a></li>
                            <li> <a href="#">contact us</a></li>
                            <li> <a href="#">overview</a></li>
                            <li> <a href="#">north</a></li>
                            <li> <a href="#">media</a></li>
                            <li> <a href="#">nri corner</a></li>
                            <li> <a href="#">blogs</a></li>
                            <li> <a href="#">work with us</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
        </script>
    </body>

</html>