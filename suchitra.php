<?php include 'header.php';?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/owl.carousel.min.js"></script>
<script src="https://narangrealty.com/narang_website/assets/js/modernizr-custom.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>   
<link rel="stylesheet" href="https://narangrealty.com/assets/slider.css">
<style>
    video#myVideo {
    width: 100%;
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
                   url:'https://www.dotwisedigital.com/jpinfra/ajaxData.php',
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
                <a href="https://www.dotwisedigital.com/jpinfra">
                    <img src="img/JP Infra Logo.png">
                </a>
            </div>
            <video autoplay muted loop id="myVideo">
              <source src="video/home_video.mp4" type="video/mp4">
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
<div class="deliver_main">
   <div class="container_main bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
      <div class="main_title_deliver">
         <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
         <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">OUR LIVING SPACES</div>
         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">About JP Infra</h1>
         <!--<div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
         <!--   <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>-->
         <!--</div>-->
         <div class="clearfix"></div>
      </div>
      
      
      
      
      
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Unity Towers</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Unity.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Dreamland</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Dreamland.jpg" alt="delivered-projects">
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Chalet Amar</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/chalet-amar/" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Chalet-Amar.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>JP DECKS</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/jp-decks/" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/JP-Decks.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Estella</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Estella.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>CELESTE</h6>
                        <p>100% sold out</p>
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Celeste.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        <div class="row about_us">
            <div class="col-md-6">
                <div class="delivered-projects-text">
                    <div class="delivered-proj-para">
                        <p>A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p>
                    </div>
                    <div class="delivered-projects-head carousel slide"  id="myCarousel1" data-ride="carousel">
                        <div class="delivered-proj-top-line"></div>
                        <h1>DELIVERED PROJECTS</h1>
                        <h6>Atria</h6>
                        <p>100% sold out</p>
                        <div class="clearfix"></div>
                        <div class="jpabout-projects-button">
                            <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
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
            <div class="col-md-6">
                <div class="delivered-projects-carousel">
                    <div class="abt-jp-slider">
                        <div class="abt-slide">
                            <img src="img/home/delivered-projects/Atria.jpg" alt="delivered-projects">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        
        
        
        
        
        
        
        
        
        
      
      
      <div class="clearfix"></div>
   </div>
   <div class="clearfix"></div>
</div>
<!--Sustainability-->
<section class="sustainability">
   <div class="home-boundries">
      <div class="sus_main">
         <div class="home-boundriesSlider">
            <div class="pushing_slider">
               <div class="push-slider">
                  <img src="img/home/pushingB/Centric.png" alt="Centric">
               </div>
               <div class="push-slider">
                  <img src="img/home/pushingB/Design.png" alt="Design">
               </div>
               <div class="push-slider">
                  <img src="img/home/pushingB/Detail.png" alt="Detail">
               </div>
               <div class="push-slider">
                  <img src="img/home/pushingB/Smart.png" alt="Smart">
               </div>
            </div>
         </div>
         <div class="home-boundries-txt">
            <div class="line-homepage">
               <img src="img/Gray-Head-line.png" class="northimage">
            </div>
            <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
               <h5 class="left_para">building responsibly</h5>
            </div>
            <div class="bg-3 text-center wow fadeIn boundaries-h1" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
               <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">pushing boundaries</h1>
               <div class="boundries-liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                  <p>A breathtaking mélange of architecture & nature, JP North aims to provide a wholesome and elegant lifestyle. Be it quality education or a trendy cafe to unwind at, JP North has got all your needs covered at Mira Road. Designed for excellence, JP North’s extensive list of amenities and attention to details is what makes it the dream home to live in.</p>
               </div>
            </div>
            <!--btn-->
            <div class="jp-button main-know-btn">
               <a href="https://www.dotwisedigital.com/jpinfra/sustainability.php" target="blank">
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
      </div>
      <div class="clearfix"></div>
      <!--<img src="img/home/pushingB/Pushing-BoundriesBG.jpg" alt="background img">-->
   </div>
</section>
<!-- JP North code  starts Here -->
<section class="banner-north">
   <h1 class="banner-title" data-aos="zoom-in-down" data-aos-duration="2000">JP North - A Lifestyle</h1>
   <P class="banner-subtitle1" data-aos="zoom-in-down" data-aos-duration="2000">Transforming Mira Road </P>
   <p class="banner-subtitle" data-aos="zoom-in-down" data-aos-duration="2000">A breathtaking mélange of architecture & nature, JP North aims to provide a wholesome and elegant lifestyle. Be it quality education or a trendy cafe to unwind at, JP North has got all your needs covered at Mira Road. Designed for excellence, JP North’s extensive list of amenities and attention to details is what makes it the dream home to live in.
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
   <!--<img class="skiing" src="" alt="">-->
</section>
<!-- JP North code ends Here -->
<!-- Projects starts Here -->
<div id="project" class="main_section">
   <div class="container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">Future Living, Today</div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Other Projects</h1>
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
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Alexa.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Alexa</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">AN OASIS OF LUXURY IN THE HEART OF MIRA ROAD</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Designed to provide a myriad of experiences, JP North’s Alexa is set to incorporate tranquillity and serenity of nature into your lifestyle. Blended with all the latest amenities and everyday facilities, experience the futuristic lifestyle for the futuristic life at JP North Alexa.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">30+ OUTDOOR</p>-->
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">Amenities to keep you Healthy & Fit</p>-->
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">1</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Elara.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Elara</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">UNOBSTRUCTED LUSH GREEN VIEWS</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Nestled in lush green surroundings, JP North’s Elara offers a home that goes beyond the 4 walls of your room. Situated in the heart of nature, it is well connected to both the Eastern & Western routes of the city. Equipped with a vast range of amenities, Elara provides you with a well rounded & tranquil lifestyle.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">A Niche Above The Rest, Lets One Indulge In Luxury And Treat Oneself To The Very Best At Lokhandwala, Andheri – Mumbai</p>       -->
                                          <!--<a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">2</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Code-name-Now-or-Never.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Codename Now or Never</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">ANOTHER NORTHERN DELIGHT</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Experience the finer things in life at Codename Now or Never and live life in style. A perfect blend of all things sweet, spicy and sour, it is sure to keep all your taste buds and preferences happy and satisfied.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
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
            </div>
            <!-- Ready-to-move --> 
            <div class="projects-head">
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
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Alexa.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Alexa</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">AN OASIS OF LUXURY IN THE HEART OF MIRA ROAD</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Designed to provide a myriad of experiences, JP North’s Alexa is set to incorporate tranquillity and serenity of nature into your lifestyle. Blended with all the latest amenities and everyday facilities, experience the futuristic lifestyle for the futuristic life at JP North Alexa.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">30+ OUTDOOR</p>-->
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">Amenities to keep you Healthy & Fit</p>-->
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">1</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Elara.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Elara</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">UNOBSTRUCTED LUSH GREEN VIEWS</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Nestled in lush green surroundings, JP North’s Elara offers a home that goes beyond the 4 walls of your room. Situated in the heart of nature, it is well connected to both the Eastern & Western routes of the city. Equipped with a vast range of amenities, Elara provides you with a well rounded & tranquil lifestyle.</p>
                                          <!--<p data-swiper-parallax-x="-40%" class="paragraphe">A Niche Above The Rest, Lets One Indulge In Luxury And Treat Oneself To The Very Best At Lokhandwala, Andheri – Mumbai</p>       -->
                                          <!--<a data-swiper-parallax-x="-30%" style="z-index: 5;" class="link" target="_blank" href="#">Discover</a>-->
                                          <span data-swiper-parallax-y="60%" class="number">2</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="swiper-slide__block">
                                       <div class="swiper-slide__block__img" data-swiper-parallax-y="70%">
                                          <a target="_blank" href="#">
                                          <img src="img/otherprojects/ongoing/Code-name-Now-or-Never.jpg" alt="">
                                          </a>
                                       </div>
                                       <div class="swiper-slide__block__text">
                                          <h2 data-swiper-parallax-x="-60%" class="main__title">Codename Now or Never</h2>
                                          <h3 data-swiper-parallax-x="-50%" class="main__subtitle">ANOTHER NORTHERN DELIGHT</h3>
                                          <p data-swiper-parallax-x="-40%" class="paragraphe">Experience the finer things in life at Codename Now or Never and live life in style. A perfect blend of all things sweet, spicy and sour, it is sure to keep all your taste buds and preferences happy and satisfied.</p>
                                          <!--<a data-swiper-parallax-x="-30%" class="link" target="_blank" href="#">Discover</a>-->
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
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
   </div>
</div>
<!-- Projects end Hrere -->
<!-- glimpse jp desktop start -->
<div class="glimpse-main desktop">
   <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
   <div class="liveHead" data-aos="fade-down" data-aos-duration="3000">at our visual best</div>
   <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">A Glimpse of JP Infra</h1>
   <!-- slider desktop start -->
   <div class="media_responsive new-media">
      <div class="media_glimpse-slider  desktop">
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media1.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media2.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media3.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media4.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media3.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media4.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="media_glimpse-slider desktop">
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media5.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media6.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media3.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media4.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media7.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media8.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <div class="media_glimpse-slider desktop">
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media9.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media10.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <!--<div class="media_glimpse-col">-->
         <!--    <div class="media_glimpse-col-middle">-->
         <!--        <img src="img/Media-Big.jpg" class="mybigimgresize">-->
         <!--    </div>    -->
         <!--</div>-->
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media3.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media4.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="media_glimpse-col">
            <div class="media_glimpse-col-inner">
               <img src="img/media1.jpg" class="myimgresize">
            </div>
            <div class="media_glimpse-col-inner">
               <img src="img/media1.jpg" class="myimgresize">
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <!-- desktop end -->
   <div class="clearfix"></div>
</div>
<!-- glimpse jp desktop ends -->
<!-- glimpse jp mobile start -->
<div class="media_glimpse-main mobile">
   <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">A Glimpse of JP Infra</h1>
   <div class="contact_line"></div>
   <!-- slider mobile start -->
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
   <!-- slider mobile ends -->
</div>
<!-- glimpse jp mobile start -->
<!-- glimpse jp mobile end -->
<!--contact us-->
<div class="contact-us">
   <div class="line"></div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
<script>
   $('.responsivehomeproj').slick({
    dots: true,
    arrow: true,
    prevArrow:'<button type="button" class="prev-button-home"></button>',
          nextArrow:'<button type="button" class="next-button-home"></button>',
    infinite: false,
    autoplay: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        arrow: true,
        prevArrow:'<button type="button" class="prev-button-home"></button>',
              nextArrow:'<button type="button" class="next-button-home"></button>',
        infinite: false,
        dots: true
      }
      },
      {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        arrow: true,
        prevArrow:'<button type="button" class="prev-button-home"></button>',
              nextArrow:'<button type="button" class="next-button-home"></button>',
        slidesToScroll: 1
      }
      },
      {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        arrow: true,
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
  
   
      $('.abt-jp-slider').slick({
     dots: true,
     infinite: true,
     speed: 300,
     arrow: false,
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
           arrow: false,
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
           arrow: false,
           slidesToScroll: 1
         }
       },
       {
         breakpoint: 480,
         settings: {
           slidesToShow: 1,
           dots: true,
           autoplay: true,
           arrow: false,
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
       autoplaySpeed: 5000,
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
   autoplay: 2500,
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
   autoplay: 2500,
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
   autoplay: 2500,
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
   autoplay: 2500,
   loop: !0
   });
   }
   
</script>
<?php include 'footer.php';?>