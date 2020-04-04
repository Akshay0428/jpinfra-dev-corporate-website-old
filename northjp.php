<?php include 'header.php';?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
	
<style>
section.main-slider {
    height: 93vh;
}
.jp-north-page-way-life-main.width-100{
    background-color: #00000014;
    padding: 79px 0px;
        margin-top: 46px;
}
        .slick-dots {
    	    text-align: center;
    	    margin: 0 0 0px 0;
    	    padding: 0;
    	}
    	.slick-dots li {
    	  display: inline-block;
    	  margin-left: 4px;
    	  margin-right: 4px;
    	}
    	.slick-dots li.slick-active button {
    		border: 1px solid #1b405b !important;
    	}
    	.slick-dots li button {
    	  font: 0/0 a;
    	  text-shadow: none;
    	  color: transparent;
    	  background-color: #486b99;
    	  border: none;
    	  width: 6px;
    	  height: 12px;
    	  border-radius: 50%;
    	}
    	/* Custom Arrow */
    	.prev-button {
    	    color: #999;
    	    position: absolute;
    	    top: 40%;
    	    left: -40px;
    	    font-size: 1.5em;
    	    background-image: url(img/arrow_2.png);
    	    width: 27px;
    	    height: 18px;
    	    border: none;
    	    background-color: transparent;
    	    outline: none !important;
    	}
    	.prev-button :hover {
    	  cursor: pointer;
    	  color: black;
    	}
    
    	.next-button {
    	  color: #999;
    	  position: absolute;
    	  top: 40%;
    	  font-size: 1.5em;
    	  background-image: url("img/arrow_1.png");
    	  right: -35px;
    	  width: 28px;
    	  height: 18px;
    	  border: none;
    	  background-color: transparent;
    	  outline: none !important;
    	}
    	.next-button :hover {
    	  cursor: pointer;
    	  color: black;
    	}
    
    	@media screen and (max-width: 800px) {
    	  .next-button {
    	    display: none !important;
    	  }
    	}

</style>
	

<style>
    @font-face{
        font-family: PlayfairDisplay-Bold;
        src:url('fonts/PlayfairDisplay-Bold.ttf');
    }
    @font-face{
        font-family: PlayfairDisplay-Regular;
        src:url('fonts/PlayfairDisplay-Regular.ttf');
    }
    .way-slider-txt {
        color: #000;
        font-size: 16px;
        font-weight: 400;
        text-align: center;
        padding: 0px 0;
        margin-top: 12px;
        margin-bottom: -5px;
    }
    .new-margin {
        margin-top: 20% !important;
    }
    .parallax-mira{
        position: relative;
        height: 100vh;
        background: url(img/Transformating-Miraroadimg.jpg) no-repeat center/cover;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin-top: 0px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .width-100{
        width: 100%;
    }
    .width-80{
        width: 80%;
        margin: 0 auto;
    }
    .img-width{
        width:100%;
    }
    .color-heading{
        color: #2e5484;;
    }
    .color-black{
        color: #000;
        font-weight: 400;
    }
    .p-width {
        width: 80%;
        margin: 30px 0px 0px 0px;
        font-weight: 300;
        font-size: 16px;
        color: #252525;
        text-align: left;
        line-height: 1.3;
        word-spacing: 2.5px;
    }
    .tf-42px{
        font-size: 42px;
        font-weight: 600;
        color: #2e5484;
        margin: 0px 0px 30px 0px;
    }
    .tf-h6{
        font-size:12px;
    }
    .margin-top{
        margin:50px 0px 50px 0px;
    }
    h6.jp-north-page-subheading.tx-align.aos-init.aos-animate {
        color: #fff;
        width: 85%;
    }
    .pos-relative{
        position: relative;
    }
    .pos-absolute{
        position: absolute;
    }
    .jp-north-page-banner-img{
        top: 10%;
    }
    .jp-north-page-banner-text-main{
        top: 65%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    .jp-north-page-banner-text-h1{
        text-transform: uppercase;
        font-weight: 300;
        font-size: 50px;
    }
    .jp-north-page-banner-text-h6 {
        color: #333333;
        width: 90%;
        margin: 0 auto;
        line-height: 1.2;
        font-weight: 300;
        font-size: 18px;
    }
    .tx-align{
        text-align: center;
    }
    .jp-north-page-way-life-main-text{
        width: 50%;
    }
    .float-left{
        float: left;
    }
    .jp-north-page-way-life-main-img{
        width: 50%;
    }
    .h2-css{
        margin: 0px;
        padding: 0px;
        text-transform: capitalize;
        font-size: 36px;
        font-weight: 600;
    }
    .jp-north-page-transforming-text-main {
        top: 10%;
    }
    .jp-north-page-heading-txt{
        text-transform: capitalize;
    }
    .jp-north-page-subheading {
        width: 80%;
        margin: 0 auto;
        line-height: 1.4;
        color: #333333;
        font-weight: 400;
        font-size: 16px;
    }
    .np-living-space-slider {
        width: 20%;
    }
    .inner-div-np {
        width: 99%;
        margin: 0 auto;
    }
    .inner-div-np-text {
        top: 80%;
        color: #fff;
        width: 100%;
        background-color: #00000096;
    }
    .inner-div-np-text h5 {
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 400;
    }
     .inner-div-np:hover .inner-div-np-text h5{
        color: #000;
        text-align: center;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 400;
    }
    .inner-div-np-text h6 {
        color: #fff;
        text-transform: capitalize;
        font-size: 18px;
        font-weight: 300;
        text-align: center;
    }
    .np-bl-patch {
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
    }
    .inner-div-np:hover .np-bl-patch {
        opacity: 1;
        background-color: #ffffffab;
    }
    .inner-div-np:hover .inner-div-np-text{
        
        opacity: 1;
        background-color: transparent; 
    }
    .jp-north-page-themed-garden-heading {
        top: 15%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .jp-north-page-themed-garden-main {
        margin: 0px;
    }
        
    .themed-garden-16-span {
        font-size: 4em;
        font-family: PlayfairDisplay-Bold;
        
    }
    .themed-garden-text-themed {
        font-family: PlayfairDisplay-Regular;
        font-size: 2em;
        font-weight: 300;
    }
    .jp-north-page-themed-garden-heading h1 {
       color: white;  /* Fallback: assume this color ON TOP of image */
       background: url(img/green-forest-np.jpg) no-repeat;
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
           background-size: cover;
           
    background-position: bottom;
           
    }
    .top{
        top: 25%;
        left: 12%;
    }
    .jp-north-page-abovefooter_main{
        width: 100%;
        background-color: #00000014;
        padding-top: 60px;
        padding-bottom: 60px;
    }
    .above-footer-color {
        color: #5b7595;
        font-weight: 700;
        font-size: 40px;
    }
    .np-greypatch {
        position: absolute;
        background-color: #ececec;
        height: 210px;
        width: 44%;
        top: 57%;
        left: 64%;
        z-index: -1;
    }
    .np-img-leaf {
        width: 9%;
        left: 23%;
        top: 94%;
    }
    .np-img-leaf2 {
        width: 5%;
        left: 93%;
        top: 110%;
    }
    .np-img-leaf3 {
        width: 6%;
        left: 3%;
        top: 156%;
    }
    .np-img-leaf4 {
        width: 9%;
        left: 80%;
        top: 94%;
    }
    .np-img-leaf5 {
        width: 6%;
        left: 3%;
        top: 320%;
    }
    .np-img-leaf6 {
        width: 7%;
        left: 7%;
        top: 10%;
    }
    .np-img-leaf7 {
        width: 8%;
        left: 85%;
        top: 0%;
    }
    .np-img-leaf8 {
        width: 8%;
        left: 81%;
        top: 94%;
    }
    .north-logo {
        width: 5%;
        top: 31%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
    }
    video#myVideo {
        width: 100%;
    }
    @media only screen and (max-width: 768px) {
        video#myVideo {
            width: 30%;
        }
        .logo-banner {
            width: 30%;
            max-width: 50%;
            top: 5%;
            left: 5%;
        }
        .jp-north-page-banner-text-main {
            width: 90%;
            font-size:16px;
        }
        .jp-north-page-way-life-main-text {
            width: 100%;
            float: none; 
            margin-bottom: 50px;
        }
        .h2-css {
            font-size: 28px;
            text-align: center;
        }
        .jp-north-page-way-life-main-img {
            width: 100%;
            float:none;
        }
        .p-width {
            width: 90%;
            text-align: center;
            font-size: 14px;
            margin: 0 auto;
            margin-top: 35px;
        }
        .jp-north-page-banner-text-h1 {
            text-transform: uppercase;
            font-weight: 300;
            font-size: 36px;
        }
        .jp-north-page-way-life-main-divs {
            width: 94%;
            margin: 0 auto;
        }
        .tf-42px {
            font-size: 20px;
        }
        .np-bl-patch{
            background-color: #00000000;
        }
        /*.np-living-space-slider {*/
        /*    width: 80%;*/
        /*    float: none;*/
        /*    margin: 0 auto;*/
        /*}dont include*/
        .np-img-leaf {
            width: 20%;
            left: 8%;
        }
        .above-footer-color {
            font-size: 20px;
        }
        .jp-north-page-banner-text-h6 {
            font-size: 16px;
        }
        .jp-north-page-subheading {
            width: 90%;
            font-size: 14px;
        }
        .top {
            top: 25%;
            left: 6%;
        }
        .tx-align p{
            text-align:center !important;
                font-size: 14px !important;
        }
        .jp-north-page-abovefooter_main {
            width: 100%;
            background-color: #00000014;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .jp-north-page-way-life-main-text {
            width: 100%;
            float: none;
            margin-bottom: 20px;
        }
        .margin-top {
            margin: 35px 0px 0px 0px;
        }
        .inner-div-np-text {
            top: 85%;
        }
        .jp-north-page-transforming-text-main {
            top: 5%;
        }
        .tf-42px {
            margin: 0px 0px 20px 0px;
        }
        .button-np {
            width: 40%;
            padding: 0px 6px 0px 14px;
        }
        .np-img-leaf3 {
            width: 7%;
            left: 90%;
            top: 95%;
        }
        .np-img-leaf2 {
            width: 7%;
            left: 88%;
            top: 146%;
        }
        .np-img-leaf5 {
            width: 12%;
            left: 9%;
            top: 324%;
        }
        .mob-wid{
            margin:0 auto;
            width:80%;
        }
        .jp-north-page-themed-garden-heading {
            top: 15%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 75%;
        }
</style>

<!-- banner start -->
    <!--<section class="main-banner width-100">-->
    <!--    <div class="jp-north-page-banner-img pos-relative"> -->
    <!--        <img class="img-width m_hide" src="img/jpnorthpage/new/north-banner.jpg" alt="banner-north-img">-->
    <!--        <img class="img-width d_hide" src="img/banner_north_mobile.jpg" alt="banner-north-img">-->
            <!--<div class="north-logo">-->
            <!--    <img src="video/logo_animation.mp4" alt="North">-->
            <!--</div>-->
    <!--        <video class="north-logo" id="myVideo" autoplay muted loop>-->
    <!--          <source src="video/Media1.mp4" type="video/mp4">-->
    <!--        </video>-->
                       
    <!--        <div class="jp-north-page-banner-text-main pos-absolute">-->
                <!--<h1 class="jp-north-page-banner-text-h1" data-aos="fade-up" data-aos-duration="3000">north</h1>-->
    <!--            <h6 class="jp-north-page-banner-text-h6 tx-align" data-aos="fade-down" data-aos-duration="3000">North is designed as a living concept, not just a space, with a vision to bring a world-class environment for you to live in.</h6>-->
    <!--        </div>-->

            <!--<div class="pos-absolute np-img-leaf">-->
            <!--    <img src="img/01-leaf.png" class="img-width" alt="leaf-img">-->
            <!--</div>-->
    <!--        <div class="clearfix"></div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <section class="main-slider">

            <video autoplay muted loop id="myVideo">
              <source src="video/home_video.mp4" type="video/mp4">
            </video>
            <div class="pos-absolute np-img-leaf">
                <img src="img/01-leaf.png" class="img-width" alt="leaf-img">
            </div>
    </section>
    <div class="logo-banner">
        <a href="https://www.dotwisedigital.com/jpuat">
            <img src="">
        </a>
        
    </div>
    <div class="clearfix"></div>
<!-- Banner end Here -->


<!--A Way Of Life Starts  -->
    <div class="jp-north-page-way-life-main width-100">
        <div class="jp-north-page-way-life-main-divs width-80">
           <div class="jp-north-page-way-life-main-text float-left">
                <h2 class="h2-css color-heading tf-42px" data-aos="fade-up" data-aos-duration="3000">north</h2>
                <h2 class="h2-css color-heading tf-42px" data-aos="fade-up" data-aos-duration="3000">An assured way of living</h2>
               <p class="color-black p-width m_hide" data-aos="fade-down" data-aos-duration="3000">Home is where you enjoy a way of life, not just the four walls.  North is designed with a vision to provide a carefully crafted lavish environment for our residents, with each space planned with great thought and vision.  When you enter North, you enter into an oasis of greenery and serenity, a place of calm to come home to, from the fast-paced life of Mumbai.  16 themed gardens, a range of top-class amenities, car-free zones, safe zone for children and the elderly, and entertainment for the entire family, is what you get at North.  And all of this, in a socially responsible sustainable low-waste environment.  Come home to living, come home to North.  </p>
           </div>
           <div class="jp-north-page-way-life-main-img img-width float-left pos-relative">
               <!--<img class="img-way-life m_hide" src="img/way-life-np.jpg">-->
               <!--<img class="img-way-life d_hide" src="img/way-life-mobile.jpg">-->
               
               <div class="way-np">
				    <div class="way-slider">
				        <img class="img-way-life" src="img/jpnorthpage/new/lion.jpg" alt="lion">
				        <p class="way-slider-txt">Reside in pride just like the majestic Lion’ s statue</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/horse.jpg" alt="horse">
					    <p class="way-slider-txt">Live gracefully with a new perspective to life as the royal Horse’s statue</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Barista.jpg" alt="Barista">
					    <p class="way-slider-txt">A fresh start to every day at your nearest Barista</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/cafe.jpg" alt="cafe">
					    <p class="way-slider-txt">Find out what’s brewing at your neighbourhood Café</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Clubhouse.jpg" alt="Clubhouse">
					    <p class="way-slider-txt">Bond with like-minded people at our exclusive Clubhouse</p>
					</div>
					<div class="way-slider">
				        <img class="img-way-life" src="img/jpnorthpage/new/Games-Room.jpg" alt="Games-Room">
				        <p class="way-slider-txt">Have a healthy competition & endless entertainment in the next door Game Room</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Gym3.jpg" alt="Gym3">
					    <p class="way-slider-txt">Get ripped the right way at our fully equipped Gym</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Lakme-Salon.jpg" alt="Lakme-Salon">
					    <p class="way-slider-txt">Get styled by the runway experts at your nearest Lakmé Salon</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Library.jpg" alt="Library">
					    <p class="way-slider-txt">Catch up on your favourite novel at our knowledge-rich Library</p>
					</div>
					<div class="way-slider">
					    <img class="img-way-life" src="img/jpnorthpage/new/Little-Millennium-Kids-2.jpg" alt="Little-Millennium-Kids-2">
					    <p class="way-slider-txt">A perfect place for the tiny- tots to play and learn at your nearest Little Millenium School</p>
					</div>
				</div>
			</div>
               
               
               
               
               
               <!--<div class="np-greypatch pos-absolute m_hide"></div>-->
           </div>
           <p class="color-black p-width d_hide" data-aos="fade-down" data-aos-duration="3000">Home is where you enjoy a way of life, not just the four walls.  North is designed with a vision to provide a carefully crafted lavish environment for our residents, with each space planned with great thought and vision.  When you enter North, you enter into an oasis of greenery and serenity, a place of calm to come home to, from the fast-paced life of Mumbai.  16 themed gardens, a range of top-class amenities, car-free zones, safe zone for children and the elderly, and entertainment for the entire family, is what you get at North.  And all of this, in a socially responsible sustainable low-waste environment.  Come home to living, come home to North.  </p>
           <div class="clearfix"></div> 
           
        </div>
        <div class="clearfix"></div>
        <div class="pos-absolute np-img-leaf2">
            <img src="img/02-leaf.png" class="img-width" alt="leaf-img">
        </div>
        <div class="clearfix"></div>

        <div class="pos-absolute np-img-leaf3">
            <img src="img/02-leaf.png" class="img-width" alt="leaf-img">
        </div>
    </div>
    <div class="clearfix"></div>
<!--A Way Of Life Ends  -->
    

<!--transforming mira road  -->
    <div class="jp-north-page-transforming-main parallax-mira width-100 pos-relative">
        <!--<img class="img-width m_hide" src="img/Transforming_Mira_Road.jpg">-->
        <img class="img-width d_hide" src="img/Transforming_Mira_Road_mobile.jpg">
        <div class="jp-north-page-transforming-text-main pos-absolute">
            <!--<h1 class="jp-north-page-heading-txt tf-42px" data-aos="fade-up" data-aos-duration="3000">transforming mira road</h1>-->
            <h6 class="jp-north-page-subheading tx-align  new-margin" data-aos="fade-down" data-aos-duration="3000">Home is where you enjoy a way of life, not just the four walls. North is designed with a vision to
                    provide a carefully crafted lavish environment for our residents. When you enter North, you enter
                    into an oasis of greenery and serenity. 16 themed gardens, a range of top-class amenities, car-free
                    zones, safe zone for children and the elderly, and entertainment for the entire family, is what you
                    get at North. And all of this, in a socially responsible sustainable low-waste environment. Come
                    home to living, come home to North.</h6>
        </div>
        <div class="clearfix"></div>
        <div class="pos-absolute np-img-leaf4">
            <img src="img/04-leaf.png" class="img-width" alt="leaf-img">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
<!--transforming mira road  -->


<!-- Our Living space -->
    <div class="jp-north-page-living-space-main margin-top">
        <div class="jp-north-page-living-space">
            <h1 class="jp-north-page-heading-txt tf-42px" data-aos="fade-up" data-aos-duration="3000">our living space</h1>
            <!--<h6 class="jp-north-page-subheading tx-align m_hide" data-aos="fade-down" data-aos-duration="3000">Each of our projects have more than 30 amenities for you to spend your evenings and weekends.  Generously built sports arenas for the family, that allow the kids to stay entertained for hours, themed gardens that allow for meditation and children’s play and mini-theatres to watch the latest movie are just a few of the world-class amenities available.</h6>-->
        </div>
        
        <div class="jp-north-page-living-space-slider-main mob-wid width-100 margin-top responsivepro">
            <div class="np-living-space-slider float-left">
                <div class="inner-div-np pos-relative">
                    <img src="img/jpnorthpage/new/NGC-1.jpg" class="m_hide" alt="slide1">
                    <img src="img/jpnorthpage/gardencity.jpg" class="d_hide" alt="slide1">
                    <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
                        <div class="np-bl-patch pos-absolute">
                            <div class="ols-text">
                                <p class="ols-p">Beautifully crafted 1, 2 & 3 BHK<br>
                                    Recreation<br>
                                    Meditation Centre<br>
                                    Creche 
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="inner-div-np-text pos-absolute">
                        <h5>North Garden City</h5>
                        <!--<h6>sheets containing Lorem Ipsum</h6>-->
                    </div>
                </div>
            </div>
            <div class="np-living-space-slider float-left slider-padding">
                <div class="inner-div-np pos-relative">
                    <img src="img/jpnorthpage/new/Hotcake.jpg" class="m_hide" alt="Codename-Hotcake">
                    <img src="img/slider_mob2.jpg" class="d_hide" alt="Codename-Hotcake">
                    <a href="http://www.jpinfra.com/codenamehotcake/" target="blank">
                    <div class="np-bl-patch pos-absolute">
                        <div class="np-bl-patch pos-absolute">
                            <div class="ols-text">
                                <p class="ols-p">1 & 2 BHK Premium Residences<br>
                                    Acupressure Walkway<br>
                                    Steam and Sauna<br>
                                    Recreation and Play Area
                                </p>
                            </div>
                        </div>
                    </div>
                    </a> 
                    <div class="inner-div-np-text pos-absolute">
                        <h5>Codename Hotcake</h5>
                        <!--<h6>sheets containing Lorem Ipsum</h6>-->
                    </div>
                </div>
            </div>
            <div class="np-living-space-slider float-left slider-padding">
                <div class="inner-div-np pos-relative">
                    <img src="img/jpnorthpage/new/Open-Streets.jpg" class="m_hide" alt="Codename-Open-Streets">
                    <img src="img/slider_mob3.jpg" class="d_hide" alt="slide3">
                    <a href="http://www.jpinfra.com/codenameopenstreets/" target="blank">
                    <div class="np-bl-patch pos-absolute">
                        <div class="np-bl-patch pos-absolute">
                            <div class="ols-text">
                                <p class="ols-p">Spacious 1, 2 & 3 BHK<br>
                                    Game Hub<br>
                                    Vehicle Free Zones  <br>
                                    Clubhouse
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="inner-div-np-text pos-absolute">
                        <h5>Codename Open Streets</h5>
                        <!--<h6>sheets containing Lorem Ipsum</h6>-->
                    </div>
                </div>
            </div>
            <div class="np-living-space-slider float-left slider-padding">
                <div class="inner-div-np pos-relative">
                    <img src="img/jpnorthpage/new/Celeste.jpg" class="m_hide" alt="slide4">
                    <img src="img/jpnorthpage/celeste.jpg" class="d_hide" alt="slide4">
                    <a href="https://www.jpinfra.com/jp-north/celeste/" target="blank">
                    <div class="np-bl-patch pos-absolute">
                        <div class="np-bl-patch pos-absolute">
                            <div class="ols-text">
                                <p class="ols-p">Spanish- styled 1 & 2 BHK<br>
                                    Wifi Zone<br>
                                    Amphitheatre<br>
                                    Library Cafe
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="inner-div-np-text pos-absolute">
                        <h5>North Celeste</h5>
                        <!--<h6>sheets containing Lorem Ipsum</h6>-->
                    </div>
                </div>
            </div>
            <div class="np-living-space-slider float-left">
                <div class="inner-div-np pos-relative">
                    <img src="img/jpnorthpage/new/Now-or-Never.jpg" class="m_hide" alt="slide5">
                    <img src="img/jpnorthpage/donald.jpg" class="d_hide" alt="slide5">
                    <a href="http://www.jpinfra.com/jp-north/codenamenowornever/" target="blank">
                    <div class="np-bl-patch pos-absolute">
                        <div class="np-bl-patch pos-absolute">
                            <div class="ols-text">
                                <p class="ols-p">Luxurious 1 Bed Homes<br>
                                    Sports Arena<br>
                                    Shopping Arcade<br>
                                    Open-to-Sky Swimming Pool
                                </p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="inner-div-np-text pos-absolute">
                        <h5>Codename Now Or Never</h5>
                        <!--<h6>sheets containing Lorem Ipsum</h6>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <h6 class="jp-north-page-subheading tx-align d_hide" data-aos="fade-down" data-aos-duration="3000">Each of our projects have more than 30 amenities for you to spend your evenings and weekends.  Generously built sports arenas for the family, hat allow the kids to stay entertained for hours, themed gardens that allow for meditation and children’s play and mini-theatres to watch the latest movie are just a few of the world-class amenities available</h6>
        
        <!--btn-->
            <div class="button-np project-property-button d_hide">
                <div class="know-text-project-property">
                    <h5>Know More</h5>
                </div>
                <div class="know-arrow-project-property">
                    <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        <div class="pos-absolute np-img-leaf5">
            <img src="img/05-leaf.png" class="img-width" alt="leaf-img">
        </div>
        <div class="clearfix"></div>
    </div>
<!-- Our Living space -->


<!-- themed garden -->
<!--    <div class="jp-north-page-themed-garden-main width-100 pos-relative margin-top">-->
                
<!--        <div class="container-np">-->
<!--            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">-->
                <!-- Wrapper for slides -->
<!--                <div class="carousel-inner" role="listbox">-->
<!--                    <div class="item active">-->
<!--                        <img class="img-width m_hide" src="img/jpnorthpage/garden-desktop.jpg">-->
<!--                        <img class="img-width d_hide" src="img/jpnorthpage/garden-mobile.jpg">-->
<!--                        <div class="jp-north-page-themed-garden-heading jp-north-page-heading-txt pos-absolute">-->
<!--                            <div class="themed-garden-text float-left">-->
<!--                                <h1><span class="themed-garden-text-themed" data-aos="fade-up" data-aos-duration="500"> Themed gardens</span></h1>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                        <div class="pos-absolute np-img-leaf6">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf7">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <img class="img-width m_hide" src="img/jpnorthpage/entertainment-desktop.jpg">-->
<!--                        <img class="img-width d_hide" src="img/jpnorthpage/entertainment-mobile.jpg">-->
<!--                        <div class="jp-north-page-themed-garden-heading jp-north-page-heading-txt pos-absolute">-->
<!--                             <div class="themed-garden-16 float-left">-->
<!--                            </div> -->
<!--                            <div class="themed-garden-text float-left">-->
<!--                                <h1><span class="themed-garden-text-themed" data-aos="fade-up" data-aos-duration="3000"> Entertainment</span></h1>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
                        
<!--                        <div class="clearfix"></div>-->
<!--                        <div class="pos-absolute np-img-leaf6">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf7">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf8">-->
<!--                            <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
<!--                    <div class="item">-->
<!--                        <img class="img-width m_hide" src="img/jpnorthpage/shopping-dektop.jpg">-->
<!--                        <img class="img-width d_hide" src="img/jpnorthpage/shopping-mobile.jpg">-->
<!--                        <div class="jp-north-page-themed-garden-heading jp-north-page-heading-txt pos-absolute">-->
<!--                            <div class="themed-garden-text float-left">-->
<!--                                <h1><span class="themed-garden-text-themed"data-aos="fade-up" data-aos-duration="3000"> Shopping</span></h1>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                        <div class="pos-absolute np-img-leaf6">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf7">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf8">-->
<!--                            <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
                    <!--<div class="item">-->
                    <!--    <img class="img-width m_hide" src="img/">-->
                    <!--    <img class="img-width d_hide" src="img/16_background_mobile.jpg">-->
                    <!--    <div class="jp-north-page-themed-garden-heading jp-north-page-heading-txt pos-absolute">-->
                    <!--        <div class="themed-garden-text float-left">-->
                    <!--            <h1><span class="themed-garden-text-themed" data-aos="fade-up" data-aos-duration="3000"> Sports Arena</span></h1>-->
                    <!--        </div>-->
                    <!--        <div class="clearfix"></div>-->
                    <!--    </div>-->
                    <!--    <div class="clearfix"></div>-->
                    <!--    <div class="pos-absolute np-img-leaf6">-->
                    <!--        <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
                    <!--    </div>-->
                    <!--    <div class="clearfix"></div>-->
                
                    <!--    <div class="pos-absolute np-img-leaf7">-->
                    <!--        <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
                    <!--    </div>-->
                    <!--    <div class="clearfix"></div>-->
                
                    <!--    <div class="pos-absolute np-img-leaf8">-->
                    <!--        <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
                    <!--    </div>-->
                    <!--    <div class="clearfix"></div>-->
                    <!--</div>-->
<!--                    <div class="item">-->
<!--                        <img class="img-width m_hide" src="img/jpnorthpage/spirituality-desktop.jpg">-->
<!--                        <img class="img-width d_hide" src="img/jpnorthpage/spirituality-mobile.jpg">-->
<!--                        <div class="jp-north-page-themed-garden-heading jp-north-page-heading-txt pos-absolute">-->
                            
<!--                            <div class="themed-garden-text float-left">-->
<!--                                <h1><span class="themed-garden-text-themed" data-aos="fade-up" data-aos-duration="3000"> Spirituality</span></h1>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                        <div class="pos-absolute np-img-leaf6">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf7">-->
<!--                            <img src="img/03-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
                
<!--                        <div class="pos-absolute np-img-leaf8">-->
<!--                            <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </div>-->
                    <!--<div class="pos-absolute np-img-leaf8 m_hide">-->
                    <!--    <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
                    <!--</div>-->
<!--                     <div class="control-box">-->
<!--                     <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
<!--                     <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>-->
<!--                     <span class="sr-only">Previous</span>-->
<!--                     </a>-->
<!--                     <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
<!--                     <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>-->
<!--                     <span class="sr-only">Next</span>-->
<!--                     </a>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                    <div class="clearfix"></div>-->
<!--                </div>-->
<!--                <div class="pos-absolute np-img-leaf8 m_hide">-->
<!--                        <img src="img/06-leaf.png" class="img-width" alt="leaf-img">-->
<!--                    </div>-->
<!--            </div>-->
<!--        </div>-->


<!-- themed garden ends-->


<!-- above footer starts-->
    <div class="jp-north-page-abovefooter_main">
        <div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
            <h1 class="above-footer-color" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Looking for a property,<br> but not sure where to start?</h1>
            <div class="liveHead2 tx-align" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                <p >Let us help. Speak to our property expert today.</p>   
            </div>
            <!--btn-->
            <div class="project-property-button ">
                <a href="https://www.dotwisedigital.com/jpuat/contact.php" target="blank">
                    <div class="know-text-project-property">
                    <h5>Know More</h5>
                </div>
                </a>
                
                <div class="know-arrow-project-property">
                    <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>    
        </div>
        <div class="clearfix"></div>
    </div>

<script>
    $(".carousel").swipe({
  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    // if (direction == 'left') $(this).carousel('next');
    // if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});

</script>








        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

		<script>
		$('.responsivepro').slick({
			dots: true,
			arrow: true,
			prevArrow:'<button type="button" class="prev-button"></button>',
	        nextArrow:'<button type="button" class="next-button"></button>',
			infinite: true,
			autoplay: true,
			speed: 300,
			slidesToShow: 5,
			slidesToScroll: 1,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	        		nextArrow:'<button type="button" class="next-button"></button>',
					infinite: false,
					dots: true
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	        		nextArrow:'<button type="button" class="next-button"></button>',
					slidesToScroll: 1
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	       			nextArrow:'<button type="button" class="next-button"></button>',
					slidesToScroll: 1
				}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
			});


            // way of life slider
            $('.way-np').slick({
			dots: false,
			arrow: true,
			prevArrow:'<button type="button" class="prev-button"></button>',
	        nextArrow:'<button type="button" class="next-button"></button>',
			infinite: true,
			autoplay: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	        		nextArrow:'<button type="button" class="next-button"></button>',
					infinite: true,
					dots: false
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	        		nextArrow:'<button type="button" class="next-button"></button>',
					slidesToScroll: 1
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
	       			nextArrow:'<button type="button" class="next-button"></button>',
					slidesToScroll: 1
				}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]
			});
	
	</script>	
	
<!-- above footer ends -->
    <?php include 'footer.php';?>