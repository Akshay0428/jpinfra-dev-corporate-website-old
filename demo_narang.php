<?php include 'header.php';?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">

<script src="otherprojslider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>   
<link rel="stylesheet" href="css/otherprojslider.css">



<style>s
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
    
    <section class="main-npslider">

            <video autoplay muted loop id="myVideonpnorth">
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
               <div class="pr_showcase np-mergerd" id="hProngoing">
                <div id="ongoing">
                    <div class="pr_cont_slider">
                        <div class="section__slider">
                            <div class="container__center">
                                <div class="swiper-container ongoingclass">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/gardencity/">
                                                        <img src="img/jpnorthpage/new/lion.jpg" alt="lion">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/gardencity/">
                                                        <img src="img/jpnorthpage/new/horse.jpg" alt="horse">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Barista.jpg" alt="Barista">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/cafe.jpg" alt="cafe">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Clubhouse.jpg" alt="Clubhouse">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Games-Room.jpg" alt="Games-Room">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Gym3.jpg" alt="Gym3">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Lakme-Salon.jpg" alt="Lakme-Salon">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Library.jpg" alt="Library">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide__block np-swiper-slide">
                                                <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                                    <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                                        <img src="img/jpnorthpage/new/Little-Millennium-Kids-2.jpg" alt="Little-Millennium-Kids-2">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        <img class="img-width d_hide" src="img/img/Transformating-Miraroadimg.jpg">
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








        <script src="js/slickminjscode.js"></script>
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




    
<script>
   if (window.innerWidth < 1200) {
   new Swiper(".ongoingclass", {
   direction: "horizontal",
   slidesPerView: 1,
   nextButton: ".swiper-button-next",
   prevButton: ".swiper-button-prev",
   paginationClickable: !0,
   spaceBetween: 0,
   autoplay: 10000,
   loop: !0
   });
   } else {
   new Swiper(".ongoingclass", {
   direction: "horizontal",
   slidesPerView: 1,
   parallax: !0,
   nextButton: ".swiper-button-next",
   prevButton: ".swiper-button-prev",
   paginationClickable: !0,
   spaceBetween: 0,
   speed: 1500,
   parallax: !0,
   autoplay: 10000,
   loop: !0
   });
   }
   
   if (window.innerWidth < 1200) {
   new Swiper(".readyclass", {
   direction: "horizontal",
   slidesPerView: 1,
   nextButton: ".swiper-button-next",
   prevButton: ".swiper-button-prev",
   paginationClickable: !0,
   spaceBetween: 0,
   autoplay: 10000,
   loop: !0
   });
   } else {
   new Swiper(".readyclass", {
   direction: "horizontal",
   slidesPerView: 1,
   parallax: !0,
   nextButton: ".swiper-button-next",
   prevButton: ".swiper-button-prev",
   paginationClickable: !0,
   spaceBetween: 0,
   speed: 1500,
   parallax: !0,
   autoplay: 10000,
   loop: !0
   });
   }
   
</script>
	
<!-- above footer ends -->
    <?php include 'footer.php';?>