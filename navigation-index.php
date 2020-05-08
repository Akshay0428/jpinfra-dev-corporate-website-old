<?php include 'header.php';?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>
<script src="otherprojslider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>   
<link rel="stylesheet" href="css/otherprojslider.css">
<style>
    video#myVideo {
    width: 100%;
}
		
.sep {width:100%;}
.sep .image-hover {margin:0px 0px 0px 0px}

/****** image hover ******/

.image-hover * {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
.image-hover {position:relative;
    width:450px;
    height:200px;
    display:inline-block;
    overflow:hidden;
    /*background:#fff;*/
    /*border:10px solid #fff;*/
    /*box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);*/
    /*-moz-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3);*/
    /*-webkit-box-shadow:0px 2px 3px rgba(0, 0, 0, 0.3)*/
    
}
.image-hover a {text-decoration:none}

.image-hover img {
    margin: 0px 0px 0px 0px;
    width: 100%;
    height: 30vh;
}

/*** effect - shadow 1 ***/

.img-shadow-1
{
-webkit-box-shadow:none;
-moz-box-shadow: none;
box-shadow: none;
}

.img-shadow-1:hover
{
transform:scale(1.1);
-webkit-transform:scale(1.1);
-moz-transform:scale(1.1);
-ms-transform:scale(1.1);
-o-transform:scale(1.1);

-webkit-box-shadow: 0 58px 36px -56px black;
-moz-box-shadow: 0 58px 36px -56px black;
box-shadow: 0 58px 36px -56px black;
}

.img-shadow-1
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}

.img-shadow-1:hover
{
transition:all .6s ease-in-out;
-webkit-transition:all .6s ease-in-out;
-moz-transition:all .6s ease-in-out;
-ms-transition:all .6s ease-in-out;
-o-transition:all .6s ease-in-out;
}
.sss{
	width: 21%;
}
.sep .image-hover {
    margin: 10px 8px 10px 8px;
    height:auto;
}
.new {
    width: 100%;
    margin: 0 auto;
}
.image-hover.img-shadow-1.sss h5 {
    color: #2e5689;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    padding: 2px;
}
.image-hover.img-shadow-1.sss p {
    text-align: center;
    font-weight: 400;
    color: #000;
        text-transform: capitalize;
}
.image-hover:hover {
    
}
.new.slide-media.slick-initialized.slick-slider .prev-button-home {
    top: 30%;
    left: -43px;

}
.new.slide-media.slick-initialized.slick-slider  .next-button-home {
    top: 30%;
    right: -46px;
}
.container_main_pushing{
      width: 85%;
    margin: 0 auto;
    max-width: 98%;
}
   /**********************
   slick slider
   ***********************/
   .slick-next {
   right: -69px!important;
   }
   .slick-prev {
   left: -72px!important;
   }
   .slick-dots li button {
   font: 0/0 a;
   text-shadow: none;
   color: transparent;
   background-color: #486b9945!important;
   border: none;
   width: 17px!important;
   height: 16px!important;
   border-radius: 50%;
   }
   .slick-dots {
   text-align: center;
   margin: 0 0 10px 0;
   padding: 15px;
   }
   .slick-dots li {
   display: inline-block;
   margin-left: 4px;
   margin-right: 4px;
   }
   .slick-dots li.slick-active button {
   border: 1px solid #1b405b !important;
   }
   .slick-dots li button:before {
   top: -2px !important;
   left: -1px !important;
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
   .prev-button-home {
   color: #999;
   position: absolute;
   top: 40%;
   left: -25px;
   font-size: 1.5em;
   background-image: url(img/arrow_2.png);
   width: 27px;
   height: 18px;
   border: none;
   background-color: transparent;
   outline: none !important;
   }
   .prev-button-home :hover {
   cursor: pointer;
   color: black;
   }
   .next-button-home {
   color: #999;
   position: absolute;
   top: 40%;
   font-size: 1.5em;
   background-image: url(img/arrow_1.png);
   right: -25px;
   width: 28px;
   height: 18px;
   border: none;
   background-color: transparent;
   outline: none !important;
   }
   .next-button-home :hover {
   cursor: pointer;
   color: black;
   }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
       var countryID1 = $('#insightly_Country').val();
       
       if(countryID1 == 100) {
           $('#ccountry').html('<input type="hidden" id="selected_country1" value="India">');
           $('#ccode').html('<input type="text" class="asp_code" id="code_dailing1" name="Phone" value="+91" readonly>');
       }
       
          var countryID2 = $('#insightly_Country2').val();
       
       if(countryID2 == 100) {
           $('#ccountry2').html('<input type="hidden" id="selected_country2" value="India">');
           $('#ccode2').html('<input type="text" class="asp_code" id="code_dailing2" name="Phone" value="+91" readonly>');
       }
       
          var countryID3 = $('#insightly_Country3').val();
       
       if(countryID3 == 100) {
           $('#ccountry3').html('<input type="hidden" id="selected_country3" value="India">');
           $('#ccode3').html('<input type="text" class="asp_code" id="code_dailing3" name="Phone" value="+91" readonly>');
       }
       
       
       $('#insightly_Country').on('change',function(){
           var countryID = $(this).val();
           if(countryID){
               $.ajax({
                   type:'POST',
                   url:'ajaxData.php',
                   data:'country_id='+countryID,
                   dataType: 'html',
                   success:function(html){
                       // console.log(html);
                       var result = $('<div />').append(html).find('#country_code1').html();
                       console.log(result);
                       var result2 = $('<div />').append(html).find('#selected_country_name1').html();
                       // console.log(result2);
                        $('#ccountry').html(result2);
                       $('#ccode').html(result);
                       $('#state').html(html);
                       // $('#insightly_City').html('<option value="">Select state first</option>');
                       $('#insightly_City').html(html);
                   }
               }); 
           }else{
               
               $('#insightly_City').html('<option value="">Select city first</option>'); 
           }
       });
       
   });
</script>

    <section class="main-slider">
     
           <!-- Carousel items -->
            <div class="logo-banner">
                <a href="https://www.dotwisedigital.com/jpuat">
                    <img src="img/JP Infra Logo.png">
                </a>
            </div>
            <video autoplay muted loop id="myVideo">
              <source src="video/final-home-video.mp4" type="video/mp4">
            </video>

    </section>
    <!-- Banner end Hrere -->




<!--<section class="main-slider">-->
<!--   <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">-->
      <!-- Indicators -->
      <!--<ol class="carousel-indicators">-->
      <!--   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="1"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="2"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="3"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="4"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="5"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="6"></li>-->
      <!--   <li data-target="#myCarousel" data-slide-to="7"></li>-->
      <!--</ol>-->
      <!-- Carousel items -->
<!--      <div class="logo-banner">-->
<!--         <a href="https://www.dotwisedigital.com/jpinfra">-->
<!--         <img src="img/JP Infra Logo.png">-->
<!--         </a>-->
<!--      </div>-->
<!--      <div class="carousel-inner">-->
<!--         <div class="item active">-->
<!--            <img src="img/Banner.jpg" alt="Banner">-->
<!--            <div class="carousel-caption">-->
<!--               <p class="bannerTxt">People Inspired<br> Spaces</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-7.jpg" alt="Banner">-->
<!--            <div class="carousel-caption">-->
               <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-5.jpg" alt="Banner">-->
<!--            <div class="carousel-caption">-->
               <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-6.jpg" alt="Banner">-->
<!--            <div class="carousel-caption">-->
               <!--<p class="bannerTxt">People Inspired<br> Spaces</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-1.jpg" alt="">-->
<!--            <div class="carousel-caption">-->
<!--               <p class="bannerTxt">More Inspired<br> Spaces</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-2.jpg" alt="">-->
<!--            <div class="carousel-caption">-->
<!--               <p class="bannerTxt">Adding Value<br> through Life<br> - Enhancing Elements</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-3.jpg" alt="">-->
<!--            <div class="carousel-caption">-->
<!--               <p class="bannerTxt">Delivering More Than<br> A Home</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="item">-->
<!--            <img src="img/Banner-4.jpg" alt="">-->
<!--            <div class="carousel-caption">-->
<!--               <p class="bannerTxt">Spaces that Enrich<br>  and Transform</p>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="control-box">-->
<!--            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--            <span class="control-icon prev fa fa-chevron-left" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Previous</span>-->
<!--            </a>-->
<!--            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--            <span class="control-icon next fa fa-chevron-right" aria-hidden="true"></span>-->
<!--            <span class="sr-only">Next</span>-->
<!--            </a>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--   </div>-->
<!--</section>-->
<!-- Banner end Hrere -->
<!---Counter desktop start-->
<div class="below-banner-section m_hide">
   <div class="content-div" id="">
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>50+</h1>
         </div>
         <div class="number-content">
            <p>YEARS<br>OF TRUST</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>15+</h1>
         </div>
         <div class="number-content">
            <p>GLOBAL<br>AWARDS</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div border-ryt">
         <div class="number-content">
            <h1>7500+</h1>
         </div>
         <div class="number-content">
            <p class="marg-left">HAPPY<br>FAMILIES</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="numbers-div">
         <div class="number-content">
            <h1>150+</h1>
         </div>
         <div class="number-content">
            <p>ACRES OF <br>DEVELOPMENT</p>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<!---Counter desktop ends-->
<!---Counter mobile start-->
<section class="main-slider below-banner-section d_hide">
   <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner content-div slick-counter-mobile">
         <div class="item active numbers-div">
            <div class="number-content">
               <h1>50+</h1>
            </div>
            <div class="number-content">
               <p>YEARS<br>OF TRUST</p>
            </div>
         </div>
         <div class="item numbers-div">
            <div class="number-content">
               <h1>15+</h1>
            </div>
            <div class="number-content">
               <p>GLOBAL<br>AWARDS</p>
            </div>
         </div>
         <div class="item numbers-div">
            <div class="number-content">
               <h1>7500+</h1>
            </div>
            <div class="number-content">
               <p class="marg-left">HAPPY<br>FAMILIES</p>
            </div>
         </div>
         <div class="item numbers-div">
            <div class="number-content">
               <h1>150+</h1>
            </div>
            <div class="number-content">
               <p>ACRES OF <br>DEVELOPMENT</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!---Counter mobile ends-->
<!--Delivered Projects-->
<!--old code start-->
<!--<div class="deliver_main">-->
<!--   <div class="container_main bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">-->
<!--      <div class="main_title_deliver">-->
<!--         <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>-->
<!--         <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">OUR LIVING SPACES</div>-->
<!--         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">About JP Infra</h1>-->
<!--         <div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
<!--            <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--      <div class="row about_us">-->
<!--         <div class="col-del1  text-right" data-aos="fade-up" data-aos-duration="3000">-->
<!--            <img class="o8_img img-responsive" src="img/08.png" alt="Image">-->
<!--            <div class="lable_line_08"><img src="img/Gray-Head-line.png" class="northimagedeliver"></div>-->
<!--            <div class="liveHead1" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">Delivered Projects</div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="col-del2 text-left">-->
<!--            <div id="myCarousel1" class="carousel slide" data-ride="carousel">-->
<!--               <div class="carousel-inner">-->
<!--                  <div class="item active">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/Unity-Towers.jpg" alt="unity Towers">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">Unity Towers</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
<!--                           <a href="https://www.jpinfra.com/unity-tower.html" target="blank">-->
<!--                              <div class="know-text-jpabout">-->
<!--                                 <h5>Know More</h5>-->
<!--                              </div>-->
<!--                           </a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
                  <!--<div class="item">-->
                  <!--   <img class="liveSlideImg" src="img/home/delivered/Glow.jpg" alt="Glow">-->
                  <!--   <div class="btmDiv">-->
                  <!--      <span class="horLine1"></span>-->
                  <!--      <div class="btmPname">Glow</div>-->
                        <!--btn-->
                  <!--      <div class="jpabout-button">-->
                           <!--<a href="#" target="blank">-->
                  <!--         <div class="know-text-jpabout">-->
                  <!--            <h5>Know More</h5>-->
                  <!--         </div>-->
                           <!--</a>-->
                  <!--         <div class="know-arrow-jpabout">-->
                  <!--            <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
                  <!--         </div>-->
                  <!--         <div class="clearfix"></div>-->
                  <!--      </div>-->
                  <!--      <div class="clearfix"></div>-->
                  <!--   </div>-->
                  <!--   <div class="clearfix"></div>-->
                  <!--</div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/dreamland.jpg" alt="Dreamland">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">Dreamland</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
                           <!--<a href="#" target="blank">-->
<!--                           <div class="know-text-jpabout">-->
<!--                              <h5>Know More</h5>-->
<!--                           </div>-->
                           <!--</a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/Chalet-Amar.jpg" alt="Chalet Amar">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">Chalet Amar</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
<!--                           <a href="https://www.jpinfra.com/chalet-amar/" target="blank">-->
<!--                              <div class="know-text-jpabout">-->
<!--                                 <h5>Know More</h5>-->
<!--                              </div>-->
<!--                           </a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/JP-Decks.jpg" alt="JP Decks">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">JP Decks</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
<!--                           <a href="https://www.jpinfra.com/jp-decks/" target="blank">-->
<!--                              <div class="know-text-jpabout">-->
<!--                                 <h5>Know More</h5>-->
<!--                              </div>-->
<!--                           </a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/estella.jpg" alt="Estella">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">Estella</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
                           <!--<a href="" target="blank">-->
<!--                           <div class="know-text-jpabout">-->
<!--                              <h5>Know More</h5>-->
<!--                           </div>-->
                           <!--</a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/Celeste.jpg" alt="CELESTE">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">CELESTE</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
<!--                           <a href="https://www.jpinfra.com/jp-north/celeste/" target="blank">-->
<!--                              <div class="know-text-jpabout">-->
<!--                                 <h5>Know More</h5>-->
<!--                              </div>-->
<!--                           </a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="item">-->
<!--                     <img class="liveSlideImg" src="img/home/delivered/Atria.jpg" alt="Atria">-->
<!--                     <div class="btmDiv">-->
<!--                        <span class="horLine1"></span>-->
<!--                        <div class="btmPname">Atria</div>-->
                        <!--btn-->
<!--                        <div class="jpabout-button">-->
                           <!--<a href="" target="blank">-->
<!--                           <div class="know-text-jpabout">-->
<!--                              <h5>Know More</h5>-->
<!--                           </div>-->
                           <!--</a>-->
<!--                           <div class="know-arrow-jpabout">-->
<!--                              <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">-->
<!--                           </div>-->
<!--                           <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div class="clearfix"></div>-->
<!--                     </div>-->
<!--                     <div class="clearfix"></div>-->
<!--                  </div>-->
<!--                  <div class="clearfix"></div>-->
<!--               </div>-->
<!--               <ol class="carousel-indicators indi1">-->
<!--                  <li data-target="#myCarousel1" data-slide-to="0" class="active">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="1">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="2">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="3">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="4">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="5">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
<!--                  <li data-target="#myCarousel1" data-slide-to="6">-->
<!--                     <div class="dot"></div>-->
<!--                  </li>-->
                  <!--<li data-target="#myCarousel1" data-slide-to="7">-->
                  <!--   <div class="dot"></div>-->
                  <!--</li>-->
<!--               </ol>-->
<!--               <div class="clearfix"></div>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--      <div class="clearfix"></div>-->
<!--   </div>-->
<!--   <div class="clearfix"></div>-->
<!--</div>-->
<!--old code ends-->
<!--Delivered Projects-->
<div class="deliver_main">
   <div class="container_main bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
      <div class="main_title_deliver">
         <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
         <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">OUR LIVING SPACES</div>
         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">About JP Infra</h1>
         <div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
         </div>
         <div class="clearfix"></div>
      </div>
    <!-- <div class="main-abt-slider">
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Unity Towers</h6>
                        <p>Unity Towers in Worli promises an unmatched living experience with its immaculate architecture and unparalleled aesthetics – enjoyable from the comfort of your living room sofa as well.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/unity-tower.html" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Unity.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Dream Land Apartment</h6>
                        <p>Dreamland in Khar is surely a house of dreams with meticulously designed apartments. JP Infra offers you your dream house.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/unity-tower.html" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Dreamland.jpg" alt="delivered-projects">
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Chalet Amar</h6>
                        <p>Some people say you can't have everything – we don't do that here at JP Infra. In our endeavor to deliver the most premium offerings, we bring to you Chalet Amar, the hidden gem of Juhu.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/chalet-amar/" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Chalet-Amar.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>JP DECKS</h6>
                        <p>Who says that you need to move to the countryside for fresh air? JP Decks is here to cater to all your needs, guaranteeing you the best of spirituality, serenity and urban living.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/jp-decks/" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/JP-Decks.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Estella</h6>
                        <p>We decided on redefining grandeur one project at a time. Venture on the journey that's determined to have a holistic approach to your every wants – with Estella.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Estella.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>CELESTE</h6>
                        <p>Why compromise when we can offer you the best? At Celeste, everything is just right, exactly the way you want it, and all of that with a touch of Spanish architecture.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/jp-north/celeste/" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Celeste.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
        <div class="row about_us">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Atria</h6>
                        <p>"Freedom of choice" sounds beautiful, doesn't it? Quite seldom observed almost always cherished, it’s time for Atria to give back to you in plenty, leaving you spellbound with the architecture and luxury.</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
                                <div class="know-text-jpabout-projects">
                                    <h5>Know More</h5>
                                </div>
                            </a>
                            <div class="know-arrow-jpabout">
                                <img src="img/Project Button Arrow.png" class="know-arrow-jpabout" alt="arrow">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-5">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Atria.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
    </div> -->  
      <div class="row about_us">
            <div class="col-md-4">
                <div class="delivered-projects-text">
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <p>We strive to provide the best-in-class projects to the consumers who have put their faith and trust in us. Our delivered projects are a symbol of what we give back.</p>
                        <div class="clearfix"></div>
                        <div class="delivered-proj-bot-line"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 main-abt-slider">
              <div class="col-md-4">
                <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Unity.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>Unity Tower</h6>
                            <p>Worli</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-md-4">
                <a href="http://www.jpinfra.com/jp-decks/" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/JP-Decks.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>JP DECKS</h6>
                            <p>Goregaon</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div>
              
              <div class="col-md-4">
                <a href="http://www.jpinfra.com/chalet-amar/" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Chalet-Amar.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>Chalet Amar</h6>
                            <p>Juhu</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="https://www.jpinfra.com/jp-north/celeste/" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Celeste.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>North Celeste</h6>
                            <p>Mira Road</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Atria.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>Atria</h6>
                            <p>North Garden City, Mira Road</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div> 
              
              <div class="col-md-4">
                <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Estella.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>Estella</h6>
                            <p>North Garden City, Mira Road</p>
                        </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                  <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Dreamland.jpg" alt="delivered-projects">
                        </div>
                        <div class="abt-slide-heading">
                            <h6>Dream Land Apartment</h6>
                            <p>Khar</p>
                        </div>
                    </div>
                  </div>
              </div>
                           
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
        </div>
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<div class="clearfix"></div>

<!--Sustainability-->
<!--<section class="sustainability">-->
<!--   <div class="home-boundries">-->
<!--      <div class="sus_main">-->
<!--         <div class="home-boundriesSlider">-->
<!--            <div class="pushing_slider">-->
<!--               <div class="push-slider">-->
<!--                  <img src="img/home/pushingB/Centric.png" alt="Centric">-->
<!--               </div>-->
<!--               <div class="push-slider">-->
<!--                  <img src="img/home/pushingB/Design.png" alt="Design">-->
<!--               </div>-->
<!--               <div class="push-slider">-->
<!--                  <img src="img/home/pushingB/Detail.png" alt="Detail">-->
<!--               </div>-->
<!--               <div class="push-slider">-->
<!--                  <img src="img/home/pushingB/Smart.png" alt="Smart">-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--         <div class="home-boundries-txt">-->
<!--            <div class="line-homepage">-->
<!--               <img src="img/Gray-Head-line.png" class="northimage">-->
<!--            </div>-->
<!--            <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
<!--               <h5 class="left_para">building responsibly</h5>-->
<!--            </div>-->
<!--            <div class="bg-3 text-center wow fadeIn boundaries-h1" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">-->
<!--               <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">pushing boundaries</h1>-->
<!--               <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
<!--                  <p>A breathtaking mélange of architecture & nature, JP North aims to provide a wholesome and elegant lifestyle. Be it quality education or a trendy cafe to unwind at, JP North has got all your needs covered at Mira Road. Designed for excellence, JP North’s extensive list of amenities and attention to details is what makes it the dream home to live in.</p>-->
<!--               </div>-->
<!--            </div>-->
            <!--btn-->
<!--            <div class="jp-button main-know-btn">-->
<!--               <a href="https://www.dotwisedigital.com/jpinfra/sustainability.php" target="blank">-->
<!--                  <div class="know-text-jp main-know-text">-->
<!--                     <h5>Know More</h5>-->
<!--                  </div>-->
<!--               </a>-->
<!--               <div class="know-arrow-jp main-know-arrow">-->
<!--                  <img src="img/Project Button Arrow.png" class="know-arrow-img" alt="arrow">-->
<!--               </div>-->
<!--               <div class="clearfix"></div>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--      <div class="clearfix"></div>-->
      <!--<img src="img/home/pushingB/Pushing-BoundriesBG.jpg" alt="background img">-->
<!--   </div>-->
<!--</section>-->

<!--Sustainability-->
<div class="bghome-push"></div>
<section class="pushing-new">
    <div class="container_main_pushing">
        <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
        <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">building responsibly</div>
        <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Pushing Boundaries</h1>
        <!--<p class="pr_cntr_p" data-aos="fade-up" data-aos-duration="3000">A breathtaking mélange of architecture & nature, JP North aims to provide a wholesome and elegant lifestyle. Be it quality education or a trendy cafe to unwind at, JP North has got all your needs covered at Mira Road. Designed for excellence, JP North’s extensive list of amenities and attention to details is what makes it the dream home to live in.</p>-->
        <div class="new-pushingimages" data-aos="fade-up" data-aos-duration="3000">
            <div class="pushinghome">
                <img src="img/home/pushingB/Pushing-Boundaries-Imade-01.jpg" alt="Design Innovation">
                <h5>design innovation</h5>
            </div>
            <div class="pushinghome">
                <img src="img/home/pushingB/Pushing-Boundaries-Imade-02.jpg" alt="Integrated Living">
                <h5>integrated living</h5>
            </div>
            <div class="pushinghome">
                <img src="img/home/pushingB/Pushing-Boundaries-Imade-03.jpg" alt="Because We Care">
                <h5>because we care</h5>
            </div>
            <div class="pushinghome">
                <img src="img/home/pushingB/Pushing-Boundaries-Imade-04.jpg" alt="Our Carbon Footprint">
                <h5>our carbon footprint</h5>
            </div>
        </div>
        <div class="clearfix"></div>
                    <div class="jp-button main-know-btn">
               <a href="https://www.dotwisedigital.com/jpuat/pushing-boundaries.php" target="blank">
                  <div class="know-text-jp main-know-text">
                     <h5>Know More</h5>
                  </div>
               </a>
               <div class="know-arrow-jp main-know-arrow">
                  <img src="img/Project Button Arrow.png" class="know-arrow-img" alt="arrow">
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
    </div>
<div class="clearfix"></div>
</section>
<div class="clearfix"></div>




<!-- JP North code  starts Here -->
<section class="banner-north">
    <div class="main-div-jp">
        <h1 class="banner-title" data-aos="zoom-in-down" data-aos-duration="2000">North - A Lifestyle</h1>
        <P class="banner-subtitle1" data-aos="zoom-in-down" data-aos-duration="2000">Transforming Mira Road </P>
        <p class="banner-subtitle" data-aos="zoom-in-down" data-aos-duration="2000">North Mumbai has gone through rapid development thanks to the space crunch and cluttered, boxy apartments in south Mumbai. Infrastructure has played a crucial role in driving growth. The aspiring Mumbaikar welcomes the sizeable emergence of affordable homes and enhanced connectivity in the new preferred hub of North Mumbai.  
        </p>
       <!--btn-->
       <div class="jplife-button">
          <div class="know-text-jplife">
             <h5><a href="northjp.php" target="blank" class="jpahref">Know More</a></h5>
          </div>
          <div class="know-arrow-jplife">
             <img src="img/Project-arrow-white.png" class="know-arrow-img-jplife" alt="arrow">
          </div>
          <div class="clearfix"></div>
       </div>
       <div class="clearfix"></div>
    </div>

   <div class="clearfix"></div>
   <!--<img class="skiing" src="" alt="">-->
</section>
<!-- JP North code ends Here -->
<!-- Projects starts Here -->
<div id="project" class="main_section">
   <div class="container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">Future Living, Today</div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Our Projects</h1>
      <p class="pr_cntr_p" data-aos="fade-up" data-aos-duration="3000">To us, home is not just a place but also a feeling. We believe in building homes that enhance your living space as well as your lifestyle. Nestled amongst greenery, we feel that healthy homes are happy homes.</p>
      <div class="project">
         <div class="pr_tab">
            <!--<div class="project">-->
            <!--   <div class="pr_tab">-->
            <!--      <button type="button" class="btn btn-transprant pr_tb_ongoing btn-primary">-->
                     <!--btn-->
            <!--         <div class="jpotherproject-button">-->
            <!--            <div class="know-text-jpotherproject">-->
            <!--               <h5>Ongoing</h5>-->
            <!--            </div>-->
            <!--            <div class="know-arrow-jpotherproject">-->
            <!--               <img src="img/Project Button Arrow.png" class="know-arrow-img-jpotherproject" alt="arrow">-->
            <!--            </div>-->
            <!--            <div class="clearfix"></div>-->
            <!--         </div>-->
            <!--         <div class="clearfix"></div>-->
            <!--      </button>-->
            <!--      <button type="button" class="btn btn-transprant pr_tb_ready_to_move">-->
                     <!--btn-->
            <!--         <div class="jpotherproject-button">-->
            <!--            <div class="know-text-jpotherproject read-arrow">-->
            <!--               <h5>Ready To Move</h5>-->
            <!--            </div>-->
            <!--            <div class="know-arrow-jpotherproject">-->
            <!--               <img src="img/Project Button Arrow.png" class="know-arrow-img-jpotherproject" alt="arrow">-->
            <!--            </div>-->
            <!--            <div class="clearfix"></div>-->
            <!--         </div>-->
            <!--         <div class="clearfix"></div>-->
            <!--      </button>-->
            <!--   </div>-->
            <!--</div>-->
            <!-- Ongoing -->
            <div class="projects-head">
                <h3>Ongoing Projects</h3>
            </div>
            <div class="pr_showcase" id="hProngoing">
               <div id="ongoing">
                  <div class="pr_cont_slider">
                     <div class="section__slider">
                        <div class="container__center">
                           <div class="swiper-container ongoingclass">
                              <div class="swiper-wrapper">
<!--                                   <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/boulevard.html">
                                          <img src="img/home/ongoing/boulevard.jpg" alt="boulevard">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Boulevard</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">EASY ACCESSIBILITY EASY LIFE</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Nestled amidst one of the most well connected suburbs of Mumbai, Boulevard witnesses spacious homes equipped with state-of-the-art amenities. Modelled to offer the most comfortable and luxurious lifestyle experience, it’s the perfect escape from the hustle and bustle of the busy city. Boulevard’s lavish homes are designed to provide the experience of a utopian dream home. </p>
                                          <span data-swiper-parallax-y="60%" class="number">1</span>
                                       </div>
                                    </div>
                                 </div> -->
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/jp-north/codenamenowornever/">
                                          <img src="img/home/ongoing/NON.jpg" alt="Codename Now or Never">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Codename Now or Never</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">ANOTHER NORTHERN DELIGHT</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Experience the finer things in life at Codename Now or Never and live life in style. A perfect blend of all things sweet, spicy and sour, it is sure to keep all your taste buds and preferences happy and satisfied.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">1</span>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/codenamehotcake/">
                                          <img src="img/home/ongoing/Hotcake.jpg" alt="Codename Hotcake">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Codename Hotcake</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">OPEN PAYMENT PLANS - YOUR HOUSE, YOUR CHOICE</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Smartly planned, with every brick crafted to perfection, Codename Hotcake is styled to fulfil every need of your dream home. Equipped with the latest technology and necessities close at hand, Codename Hotcake aspires to make the experience at Mira Road better than your dreams.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">2</span>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/codenameopenstreets/">
                                          <img src="img/home/ongoing/Open-Streets.jpg" alt="Codename Open Streets">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Codename Open Streets</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">INSPIRED BY THE EUROPEAN CITY OF BARCELONA</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Harmonizing nature, luxuries and convenience in European style, Codename Open Streets provides a grand lifestyle. Well-connected and equipped with the latest amenities, Mira Road’s North Garden City offers homes loved by one & all.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">A Niche Above The Rest, Lets One Indulge In Luxury And Treat Oneself To The Very Best At Lokhandwala, Andheri – Mumbai</p>       -->
                                          <!--<a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">3</span>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/home/ongoing/Elara.jpg" alt="Elara">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Elara</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">UNOBSTRUCTED LUSH GREEN VIEWS</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Nestled in lush green surroundings, JP North’s Elara offers a home that goes beyond the 4 walls of your room. Situated in the heart of nature, it is well connected to both the Eastern & Western routes of the city. Equipped with a vast range of amenities, Elara provides you with a well rounded & tranquil lifestyle.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">A Niche Above The Rest, Lets One Indulge In Luxury And Treat Oneself To The Very Best At Lokhandwala, Andheri – Mumbai</p>       -->
                                          <!--<a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">4</span>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/home/ongoing/Euphoria.jpg" alt="Euphoria">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Euphoria</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">A HAVEN OF PURE BLISS AND DELIGHT</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">JP North’s Euphoria offers a lifestyle where you are in touch with nature everyday, encompassing all the requisites of a perfect dream home. It provides an ambience brimming with restaurants, salons, top-notch institutes and various other lifestyle conveniences.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">5</span>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/home/ongoing/Alexa.jpg" alt="Alexa">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Alexa</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">AN OASIS OF LUXURY IN THE HEART OF MIRA ROAD</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Designed to provide a myriad of experiences, JP North’s Alexa is set to incorporate tranquillity and serenity of nature into your lifestyle. Blended with all the latest amenities and everyday facilities, experience the futuristic lifestyle for the futuristic life at JP North Alexa.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">6</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/altus.html">
                                          <img src="img/home/ongoing/Altus.jpg" alt="Altus">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Altus</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">UNOBSTRUCTED 270 DEGREE VIEW OF CITY SKYLINE</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Situated in the heart of the city, Altus offers stunning views of the city skyline merging with the serene horizon of the Arabian Sea. Equipped with all the latest amenities, Altus’s strategic location offers easy connectivity to all major business hubs and several well-known recreational spaces.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">30+ OUTDOOR</p>-->
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">Amenities to keep you Healthy & Fit</p>-->
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">7</span>
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

            <!-- Ready-to-move --> 
<!--             <div class="projects-head">
                <h3>Ready to move Projects</h3>
            </div>
            <div class="pr_showcase" id="hProngoing">
               <div id="ongoing">
                  <div class="pr_cont_slider">
                     <div class="section__slider">
                        <div class="container__center">
                           <div class="swiper-container ongoingclass">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/jp-north/gardencity/">
                                          <img src="img/home/ready-move/Estella.jpg" alt="Estella">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Estella</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">LUXURY BEYOND 4 WALLS</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">JP North’s Estella is designed to offer everything that one needs around a home, a stone’s throw away. Packed with avant-garde range of amenities and set against a backdrop of lush greenery, it desires to bring you to live in a world of beauty, leisure and security.</p>
                                          comment start
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">30+ OUTDOOR</p>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Amenities to keep you Healthy & Fit</p>
                                          <a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>
                                          comment ends
                                          <span data-swiper-parallax-y="60%" class="number">1</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/jp-north/gardencity/">
                                          <img src="img/home/ready-move/Atria.jpg" alt="Atria">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Atria</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">REDEFINING INTEGRATED LIVING</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">A dream home designed to offer you the ethereal experience of living amidst nature’s panoramas, North Atria offers you homes that focus on your overall well being. It endeavours to bring you the perfect rejuvenation for your soul, mind and body with its enormous and diverse range of lifestyle amenities. </p>
                                          comment start
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">A Niche Above The Rest, Lets One Indulge In Luxury And Treat Oneself To The Very Best At Lokhandwala, Andheri – Mumbai</p>       
                                          <a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>
                                          comment ends
                                          <span data-swiper-parallax-y="60%" class="number">2</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="https://www.jpinfra.com/jp-north/celeste/">
                                          <img src="img/home/ready-move/Celeste.jpg" alt="Celeste">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">North Celeste</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">FUTURISTIC LIFESTYLE</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Encompassed within rich landscaped gardens and spaces, North Celeste offers you a lifestyle sprinkled with tranquillity and serenity. North Celeste offers a thoughtful lifestyle for its residents to enjoy ultra-modern amenities with state-of-the-art technology through impeccable and futuristic planning and architecture.</p>
                                          comment start
                                          <a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>
                                          comment ends
                                          <span data-swiper-parallax-y="60%" class="number">3</span>
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
            </div> -->
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!-- Projects end Hrere -->
<!-- glimpse oldjp desktop start -->
<!--<div class="glimpse-main desktop">-->
<!--   <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>-->
<!--   <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">at our visual best</div>-->
<!--   <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">A Glimpse of JP Infra</h1>-->
   <!-- slider desktop start -->
<!--   <div class="media_responsive new-media">-->
<!--      <div class="media_glimpse-slider  desktop">-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media1.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media2.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media3.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media4.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media3.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media4.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--      <div class="media_glimpse-slider desktop">-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media5.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media6.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media3.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media4.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media7.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media8.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--      <div class="media_glimpse-slider desktop">-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media9.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media10.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media3.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media4.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="media_glimpse-col">-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media1.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="media_glimpse-col-inner">-->
<!--               <img src="img/media1.jpg" class="myimgresize">-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--         </div>-->
<!--         <div class="clearfix"></div>-->
<!--      </div>-->
<!--   </div>-->
   <!-- desktop end -->
<!--   <div class="clearfix"></div>-->
<!--</div>-->
<!-- glimpse old jp desktop ends -->


<!-- glimpse new jp desktop start -->
 <!-- <div class="glimpse-main desktop"> -->
 <div class="glimpse-main">
    <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">at our visual best</div>
         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Glimpses of JP Infra</h1>
          <!-- slider desktop start -->
        <div class="sep">
            <div class="new slide-media">
            	 <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/Safety.jpg" alt="Safety">
                    <h5>National Safety Week:</h5>
                    <p>Endorsing safety week by implementing standard safety protocol and precautionary measures</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/christmas.jpg" alt="christmas">
                    <h5>Christmas Celebration:</h5>
                    <p>JP Infra gives back to society and plays Santa to the kids</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/Diwali.jpg" alt="Diwali">
                    <h5>Diwali Celebration:</h5>
                    <p>Building team spirit and togetherness with grand Diwali celebrations and scrumptious food</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/ganesha.jpg" alt="ganesha">
                    <h5>My home My Ganesha :</h5>
                    <p>JP Infra celebrates Ganpati by bringing Lord Ganesha into its own temple</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/gudi-padwa.jpg" alt="gudi-padwa">
                    <h5>Gudi Padwa Celebration @JP North :</h5>
                    <p>JP Infra celebrates the start of a new year with reverence and holiness</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/independance.jpg" alt="independance">
                    <h5>What Is Your Freedom:</h5>
                    <p>The team @JP Infra depicts what freedom means to each of them</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/Joy_of_giving.jpg" alt="Joy_of_giving">
                    <h5>JP Infra Christmas 2016:</h5>
                    <p>The team @ JP Infra celebrates Christmas with a spirit of oneness and togetherness</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/pottery_activity.jpg" alt="pottery_activity">
                    <h5>Pottery Workshop:</h5>
                    <p>Teaching you the basics of pottery to allow your inner artist to shine</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/twins-day.jpg" alt="twins-day">
                    <h5>Twins Day celebration :</h5>
                    <p>Excitement At Its Highest With Double Dhamaka</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/utrang.jpg" alt="utrang">
                    <h5>JP Udtarang :</h5>
                    <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/Launch-Of-Clubhouse.jpg" alt="Launch-Of-Clubhouse">
                    <h5>Launch Of Clubhouse :</h5>
                    <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <img src="img/media/Launch-Of-Hotcake.jpg" alt="Launch-Of-Hotcake">
                    <h5>Launch Of Hotcake :</h5>
                    <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                  <a  href="img/New Newsletter_ 17 March 2020_Final_CC.pdf" target="_blank">
                    <img src="img/media/Mira-road.jpg" alt="Mira-road"></a>
                    <h5>Mira-road:</h5>
                    <p>North - Newsletter 4rd Edition</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/nL0aKmi_U6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    <h5>Women's Day 2020</h5>
                    <!-- <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p> -->
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/7AX1_RNJkd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    <h5>Homebuyers Given Financial Creditors Status</h5>
                    <!-- <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p> -->
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/3_gy342pBqI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Gudi Padwa Offer- CNBZ Awaaz</h5>
                    <!-- <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p> -->
                </div>
                <div class="image-hover img-shadow-1 sss">
                   <iframe width="245px" height="185px" src="https://www.youtube.com/embed/o3qLmsuw118" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Zee Business Property Plus</h5>
                    <!-- <p>Celebrating the turn of the season with the classic kite-making of Makar Sankranti and much more</p> -->
                </div>
            </div>
            <div class="clearfix"></div> 
          </div>
        <!-- desktop end -->
        <div class="clearfix"></div> 
    </div>
    <!-- glimpse new jp desktop ends -->








<!-- glimpse jp mobile start -->
<!-- <div class="media_glimpse-main mobile">
   <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">A Glimpse of JP Infra</h1>
   <div class="contact_line"></div>
   <div class="media_glimpse-slider responsivehomeproj">
      <div class="media_glimpse-col">
         <div class="media_glimpse-col-inner">
            <img src="img/Media-1.jpg">
         </div>
      </div>
      <div class="media_glimpse-col">
         <div class="media_glimpse-col-inner">
            <img src="img/Media-2.jpg">
         </div>
      </div>
      <div class="media_glimpse-col">
         <div class="media_glimpse-col-inner">
            <img src="img/Media-5.jpg">
         </div>
      </div>
      <div class="media_glimpse-col">
         <div class="media_glimpse-col-inner">
            <img src="img/Media-3.jpg">
         </div>
      </div>
      <div class="media_glimpse-col">
         <div class="media_glimpse-col-inner">
            <img src="img/Media-4.jpg">
         </div>
      </div>
   </div>
</div> -->
<!-- glimpse jp mobile start -->
<!-- glimpse jp mobile end -->
<!--contact us-->
<div class="contact-us">
   <div class="line"></div>
   <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
   <h5 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">WE'RE HERE TO HELP YOU</h5>
   <h1 data-aos="fade-up" data-aos-duration="3000">Contact Us</h1>
   <div class="contact-div">
      <div class="content-continer" data-aos="fade-up" data-aos-duration="3000">
         <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine1"></span>	
                  <h5>Address</h5>
                  <div class="icon-div">
                     <img src="img/visit-place.png" alt="contact-icon">
                  </div>
                  <h4>Visit Our Place</h4>
                  <p class="text">JP Infra Mumbai Pvt. Ltd.</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>Visit Our Place</h4>
                        <div class="text">JP Infra Mumbai Pvt. Ltd.</div>
                     </div>
                     <div class="bottom-content">
                        <ul>
                           <li><a href="#">Phone: 022 42415678</a></li>
                           <li><a href="#">Email: sales@jpinfra.com</a></li>
                           <li><a href="#">Fax: 022 42415679</a></li>
                        </ul>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine2"></span>
                  <h5>PHONE & EMAIL</h5>
                  <div class="icon-div">
                     <img src="img/Mob.png" alt="contact-icon">
                  </div>
                  <h4>Let Us Discuss</h4>
                  <p class="text">Talk To A Real Person</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>Let Us Discuss</h4>
                        <div class="text">Talk To A Real Person</div>
                     </div>
                     <div class="bottom-content">
                        <ul>
                           <li><a href="#">Phone: 022 42415678</a></li>
                           <li><a href="#">Email: sales@jpinfra.com</a></li>
                           <li><a href="#">Fax: 022 42415679</a></li>
                        </ul>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 contact-block">
               <div class="inner-box">
                  <span class="cLine3"></span>	
                  <h5>LEAVE US A MESSAGE</h5>
                  <div class="icon-div">
                     <img src="img/Message.png" alt="contact-icon">
                  </div>
                  <h4>WE'LL GET BACK TO YOU</h4>
                  <p class="text">Drop Us Your Contact Details</p>
                  <div class="overlay">
                     <div class="top-content">
                        <h4>WE'LL GET BACK TO YOU</h4>
                        <div class="text">Drop Us Your Contact Details</div>
                     </div>
                     <div class="bottom-content">
                        <div class="link-btn">
                           <a class="theme-btn">ENQUIRE NOW</a>
                        </div>
                        <!--<div class="link-btn"><a href="#" class="theme-btn">Locate Us On Map</a></div>-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="contact-form">
            <div class="close-form">
               <i class="fa fa-times" aria-hidden="true"></i>
            </div>
            <form name="formbottom" id="form-enquiry" action="" method="post">
               <div class="form-field">
                  <input type="text" name="insightly_firstName" id="insightly_firstName" placeholder="Name*">
               </div>
               <div class="form-field">
                  <input type="email" name="insightly_Email" id="insightly_Email" placeholder="Your Email*">
               </div>
               <div class="form-field">
                  <span id="ccode"><input type="text" name="code_dailing1" id="code_dailing1" value="+91" readonly=""></span>
                  <input type="text" class="phone-control" name="insightly_Phone" id="insightly_Phone" minlength="10" maxlength="10" required="" placeholder="Mobile No.*">
               </div>
               <div class="form-field">
                  <?php
                     //Include database configuration file
                     include('dbConfig.php');
                     
                     //Get all country data
                     $query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY asp DESC");
                     
                     //Count total number of rows
                     $rowCount = $query->num_rows;
                     ?>
                  <select title="Country" id="insightly_Country" name="Country">
                  <?php
                     if($rowCount > 0){
                         while($row = $query->fetch_assoc()){
                         echo '<option value1="'.$row['country_name'].'" value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
                     }
                     }else{
                     echo '<option value="">Country not available</option>';
                     }
                     ?>
                  </select>       
               </div>
               <div class="form-field">
                  <?php
                     //Get all country data
                     // $query = $db->query("SELECT * FROM cities WHERE status = 1 ORDER BY asp_city DESC");
                     $query = $db->query("SELECT c.city_id, c.city_name, st.state_id, st.state_name, co.country_id, co.country_name
                     FROM cities c
                     JOIN states st
                     	ON c.state_id = st.state_id
                     JOIN countries co
                     	ON st.country_id = co.country_id
                     WHERE co.country_id = 100 ORDER BY asp_city DESC");
                     //Count total number of rows
                     $rowCount = $query->num_rows;
                     ?>
                  <select name="city" id="insightly_City">
                  <?php
                     if($rowCount > 0){
                         while($row = $query->fetch_assoc()){ 
                             echo '<option value="'.$row['city_name'].'">'.$row['city_name'].'</option>';
                         }
                     }else{
                         echo '<option value="">Country not available</option>';
                     }
                     ?>
                  </select>		        	
               </div>
               <span id="ccountry"><input type="hidden" class="form-field asp_code" id="insightly_Country_name" name="" value=""></span>
               <div class="form-button">
                  <button type="submit" id="button_enquiry_desktop" onclick='myfunction();return(false);'>Submit</button>
               </div>
               <div class="clearfix"></div>
            </form>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>
<!---->
<script src="js/send.js"></script>
<script src="js/slickminjscode.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
<script>
   $('.slide-media').slick({
    dots: false,
    arrow: true,
    prevArrow:'<button type="button" class="prev-button-home"></button>',
          nextArrow:'<button type="button" class="next-button-home"></button>',
    infinite: true,
    autoplay: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
        breakpoint: 1024,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            arrow: true,
            prevArrow:'<button type="button" class="prev-button-home"></button>',
                nextArrow:'<button type="button" class="next-button-home"></button>',
            infinite: true,
            dots: false
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            arrow: false,
            prevArrow:'<button type="button" class="prev-button-home"></button>',
                nextArrow:'<button type="button" class="next-button-home"></button>',
            slidesToScroll: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
            arrow: false,
            prevArrow:'<button type="button" class="prev-button-home"></button>',
                    nextArrow:'<button type="button" class="next-button-home"></button>',
            slidesToScroll: 1
        }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
    });
   
</script>	
<!--media desktop-->
<script>
   // Carousel Auto-Cycle
   $(document).ready(function() {
   $('.carousel').carousel({
     interval: 6000
   })
   });
   
</script>
<script>
   $('.media_responsive').slick({
     dots: true,
     infinite: true,
     speed: 300,
     arrow: true,
     autoplay: true,
     prevArrow:"<img class='a-left control-c prev slick-prev' src='img/arrow_left.png'>",
     nextArrow:"<img class='a-right control-c next slick-next' src='img/arrow_right.png'>",
     slidesToShow: 1,
     slidesToScroll: 1,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: true,
           prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/arrow_left.png'>",
           nextArrow:"<img class='a-right control-c next slick-next' src='../img/arrow_right.png'>",
           slidesToScroll: 1,
           infinite: true,
           dots: false
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: true,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: true,
           slidesToScroll: 1
         }
       }
     ]
   });
   
   
           $('.pushing_slider').slick({
   			dots: false,
   			arrow: false,
   			prevArrow:false,
   	        nextArrow:false,
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
   					arrow: false,
   					prevArrow:false,
   	        		nextArrow:false,
   					infinite: true,
   					dots: false
   				}
   				},
   				{
   				breakpoint: 600,
   				settings: {
   					slidesToShow: 1,
   					arrow: false,
   					prevArrow:false,
   	        		nextArrow:false,
   					slidesToScroll: 1
   				}
   				},
   				{
   				breakpoint: 480,
   				settings: {
   					slidesToShow: 1,
   					arrow: false,
   					prevArrow:false,
   	       			nextArrow:false,
   					slidesToScroll: 1
   				}
   				}
   				// You can unslick at a given breakpoint now by adding:
   				// settings: "unslick"
   				// instead of a settings object
   			]
   			});


   $('.main-abt-slider').slick({
     dots: true,
     infinite: true,
     speed: 300,
     arrow: false,
     autoplay: true,
     prevArrow:"<img class='a-left control-c prev slick-prev' src='img/arrow_left.png'>",
     nextArrow:"<img class='a-right control-c next slick-next' src='img/arrow_right.png'>",
     slidesToShow: 3,
     slidesToScroll: 1,
     responsive: [
       {
         breakpoint: 1024,
         settings: {
           slidesToShow: 3,
           dots: true,
           autoplay: true,
           arrow: true,
           prevArrow:"<img class='a-left control-c prev slick-prev' src='../img/arrow_left.png'>",
           nextArrow:"<img class='a-right control-c next slick-next' src='../img/arrow_right.png'>",
           slidesToScroll: 1,
           infinite: true,
           dots: false
         }
       },
       {
         breakpoint: 600,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: true,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: true,
           slidesToScroll: 1
         }
       }
     ]
   });
   
   
   
   	
</script>
<script type="text/javascript">
   var i, maxItems = $('.slider .item').length;
   function slideshow() {
     for (i = 0; i < 4; i++) {
       $('.slider:last-child').clone().appendTo('.slideshow');
     }
     $('.slider').wrap('<div class="slider-wrap" />');
     $('.slider').slick({
       autoplay: true,
       autoplaySpeed: 500,
       draggable: true,
       arrows: false,
       dots: true,
       speed: 900,
       infinite: true,
       cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
       touchThreshold: 100,
     }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {  
       if (currentSlide > nextSlide && nextSlide == 0 && currentSlide == maxItems - 1) {
         slide =  maxItems;
       } else if (currentSlide < nextSlide && currentSlide == 0 && nextSlide == maxItems - 1 ) {
         slide = -1;
       } else {
         slide=  nextSlide;
       }
       setTimeout(function() {
         $('.slider').eq(0).slick('slickGoTo', slide);
       }, 50);
       setTimeout(function() {
         $('.slider').eq(1).slick('slickGoTo', slide);
       }, 100);
       setTimeout(function() {
         $('.slider').eq(2).slick('slickGoTo', slide);
       }, 150);
       setTimeout(function() {
         $('.slider').eq(3).slick('slickGoTo', slide);
       }, 200);
       setTimeout(function() {
         $('.slider').eq(4).slick('slickGoTo', slide);
       }, 250);
     });
   }
   $(function() {
   slideshow();
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
<?php include 'footer.php';?>