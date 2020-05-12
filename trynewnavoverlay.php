<html>
    <head>
        <title>navbar</title>
        <style>
@import url(https://fonts.googleapis.com/css?family=Varela+Round);
 @import url(https://fonts.googleapis.com/css?family=Varela+Round);
 body {
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
 /* .button_container:hover {
	 opacity: 0.7;
} */
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
}
        </style>
    </head>
    <body>
        <div class="container">
            <div id="toggle" class="button_container">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
                <div id="overlay" class="overlay">
                    <nav class="overlay-menu">
                        <ul>
                            <li>project</li>
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