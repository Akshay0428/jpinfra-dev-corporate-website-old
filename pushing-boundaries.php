<?php include 'header.php';?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" type="text/css" href="css/responsive1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
  <style>
    .line_human {
      height: 2px;
      position: absolute;
      left: 16%;
      width: 29%;
      top: 149%;
      z-index: 99;
      background-color: #2c5686;
    }
.main_absolute {
    position: absolute;
    left: 40%;
    top: 10%;
    z-index: 9;
    width: 70%;
}
    .content_abs {
      width: 39%;
      background-color: #76869D;
      padding: 25px;
    }
    .content_abs p {
      margin: 20px 0px;
    }
    .carousel-indicators li {
      background: #fff;
      margin: 0 3px;
      width: 10px;
      height: 7px;
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
      margin: 0px 0px;
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
    .slick-dots li button:before {
      top: -2px !important;
      left: -1px !important;
    }
    .slick-dots li button {
      font: 0/0 a;
      text-shadow: none;
      color: transparent;
      background-color: #486b9900!important;
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

  @media only screen and (max-width:768px){
    .main_absolute {
      position: absolute;
      left: 0%;
      top: 38.27%;
      z-index: 9;
      width: 100%;
    }
    .content_abs {
      width: 100%;
      background-color: #76869D;
      padding: 25px;
    }
    .pb-di {
      background-image: linear-gradient(#ffffff00, black);
      font-size: 14px !important;
      top: 82%;
    }
    .pb-di-l{
      top: 89%;
      width: 100% !important;
    }
    .pb-swimart{
      top: 84% !important;
    }
    .carousel-indicators {
      top: 90%;
    }
    .mob_human {
      margin-top: 107%;
    }
    .human-img {
      width: 100%; 
      float: none; 
    }
    .pb-right{
      left: 0;
    }
    .pb-integrate-txt {
      width: 98%;
      margin: 20px auto;
    }
    .pb-integrate-txt p {
      text-align: justify;
    }
    .mob-2icon {
      width: 50%;
      float: left;
    }
    .integrate-icons {
	    width: 80%;
	    margin: 0 auto;
	  }
  	.icon-integ {
  	  width: 100%;
    float: none;
    padding: 0px 10px;
  }
  .bord-btmr{
    border-bottom: 1px solid #00000052;
    border-right: 1px solid #00000052;
  }
  .bord-r{
    border-right:1px solid #00000052;
  }
  .bord-t{
    border-top:1px solid #00000052;
  }
  .pb-care-txt p {
    text-align: justify;
  }
	.pb-care-img {
	    width: 100%;
	    float: none;
	}
.pbslider-care-txt {
    width: 100%;
    float: none;
    padding: 10px 10px;
}
.pbslider-care-txt h3 {
    color: #2e5689;
    padding: 0px 0px 15px 0px;
    font-size: 20px;
}
.carbon_main {
    margin: 45px auto 0px auto;
}
.footprint-tabs {
    top: -50px;
}



  }
  </style>   


  <a href="index.php">
    <div class="logo-banner">
    	<img src="img/JP Infra Logo.png" alt="logo">
    </div>
  </a>


  <div class="section fp-section fp-table active fp-completely" id="section1" data-anchor="secondPage" style="background-color: rgb(0, 0, 0); height: 700px;">
    <div class="fp-tableCell" style="height: 625px;">
      <div class="main-wrapper">
        <div class="slider-col gray animation active">
          <div class="caption animation pos-relative">
            <h2>Design Innovation</h2>
            <p>Believing in community living and open spaces, JP Infra builds projects that encourage these aspects through providing vehicle-free zones, garden areas, meditation centres and amenities for fun group activity</p>
            <p class="p-pushingb pos-absolute">Artist's Impression</p>
          </div>
        </div>
        <div class="slider-col yellow animation">
          <div class="caption animation pos-relative">
            <h2>Integrated Living</h2>
            <p>JP Infra offers you the best of all worlds within the same campus so you can enjoy peaceful living through features like jogging tracks, yoga pavilion, open to sky swimming pool, herbs and spice garden, local coffee shops and spas, etc.</p>
            <p class="p-pushingb pos-absolute">Artist's Impression</p>
          </div>
        </div>
        <div class="slider-col blue animation">
          <div class="caption animation pos-relative">
            <h2>Because We Care</h2>
            <p>We at JP Infra believe that those who work tirelessly to ensure our projects are a
              success are more important than the buildings itself so we offer additional benefits
              like on-campus schools for their children</p>
            <p class="p-pushingb pos-absolute">Representative Image</p>
          </div>
        </div>
        <div class="slider-col orange animation">
          <div class="caption animation pos-relative">
            <h2>Our Carbon Footprint</h2>
            <p>Our pledge to a better and greener tomorrow is evident through our eco-friendly
              initiatives like rain-water harvesting, waste management and usage of solar panels
              in construction.</p>
            <p class="p-pushingb pos-absolute">Representative Image</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>


  <!-- Human Touch start here-->
  <section class="human_sec">
    <div class="container_main">
      <div class="human_main">
        <div class="main_absolute">
          <div class="content_abs">
            <p class="head_con"><i>“Quality of life actually begins at home – it’s in your street, around your community” –<br> Charles Kennedy</i> </p>
            <p class="para_con">A prized city, Barcelona gave life back to their streets by introducing this concept and we, at JP Infra, are striving to do the same. In the hustle and bustle of Mumbai’s busy streets, you get to experience a pollution-free zone by restricting entry to carbon-emitting vehicles. JP Infra is proud to be part of bringing a slice of Europe to Mumbai to create a residential utopia, inspired by international style living.</p>
          </div>
        </div>
        <!-- <div class="line_human"></div> -->
        <div class="human_col">
          <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Design Innovation</h1>
            <div class="padding-project" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
              <p>JP Infra is proud to be a front runner when bringing the standard of international living to Mumbai.</p>
            </div>
            <div class="clearfix"></div>
            <div class="push-human">
              <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
                <!-- Indicators -->
                <!-- <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol> -->
                <!-- <div class="carousel-inner"> -->
                  <div class="item active pos-relative">
                    <img src="img/pushing_boundaries/humanleft1.jpg" class="img-1">
                    <p class="pos-absolute pb-di p-deliver">Artist's Impression</p>
                  </div>
                  <!-- <div class="item pos-relative">
                    <img src="img/pushing_boundaries/humanleft2.jpg" class="img-2">
                    <p class="pos-absolute pb-di p-deliver">Actual image</p>
                  </div> -->
                  <!-- <div class="item">
                    <img src="img/pushing_boundaries/humanleft3.jpg" class="img-cls">
                  </div> -->
                <!-- </div> -->
              <!-- </div> -->
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="human_col mob_human">
            <div class="human-img pos-relative">
              <img src="img/pushing_boundaries/humanright.jpg" class="img-cls2">
              <p class="pos-absolute pb-right pb-di-l p-deliver">Artist's Impression</p>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </section>


<!-- Human Touch end here -->

<!-- integrated living start-->
<div class="pb-integrate-main">
    <div class="container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
        <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Integrated Living</h1>
        <div class="pb-integrate-txt">
            <p>Home is where the heart is, and you shouldn’t have to travel far to live a healthy, comfortable and vibrant lifestyle. At JP Infra properties, you will find spas and salons to pamper yourself, coffee shops to help you unwind and the best of community living. Your child is also thought of with ample play areas and top schools and educational institutions to keep their learning maximized.</p>
        </div>
        <div class="integrate-icons-div m_hide">
            <div class="integrate-icons">
                <div class="icon-integ">
                    <img src="img/pushing_boundaries/baristacoffee.png" align="baristacoffee">
                </div>
                <div class="icon-integ pb-icon-borderl">
                    <img src="img/pushing_boundaries/lakme-Salon.jpg" align="lakme-Salon">
                </div>
                <div class="icon-integ pb-icon-borderr">
                    <img src="img/pushing_boundaries/little_millennium.jpg" align="little_millennium">
                </div>
                <div class="icon-integ">
                    <img src="img/pushing_boundaries/Podar-International-School-Logo.jpg" align="Podar-International-School-Logo">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="integrate-icons-div d_hide">
            <div class="integrate-icons">
              <div class="mob-2icon">
                <div class="icon-integ bord-btmr">
                    <img src="img/pushing_boundaries/baristacoffee.png" align="baristacoffee">
                </div>
                <div class="icon-integ bord-r">
                    <img src="img/pushing_boundaries/little_millennium.jpg" align="little_millennium">
                </div>
              </div>
              <div class="mob-2icon">
                <div class="icon-integ">
                    <img src="img/pushing_boundaries/lakme-Salon.jpg" align="lakme-Salon">
                </div>
                <div class="icon-integ bord-t">
                    <img src="img/pushing_boundaries/Podar-International-School-Logo.jpg" align="Podar-International-School-Logo">
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


<!-- integrated living ends-->

<!-- because we care start -->
<div  class="pb-care">
    <div class="container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
        <h1 class="pb-h1" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Because we care</h1>
        <div class="pb-care-txt" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <!-- <p class="fontweight">A company that has always believed in following a contemporary and comprehensive approach, JP Infra has grown and continues to grow at a rapid pace. JP Infra promises its residents international standards of living with state-of-the-art amenities to provide the ultimate living experience.</p> -->
            <p class="fontweight">JP Infra has never been a brand that has been concerned with just the brick and mortar of real estate. We strongly believe in building communities that can last a lifetime. We believe in giving back – to both home buyers who invest with us as well as employees and workers who dedicate their time to us.</p>
        </div>
        <div class="clearfix"></div>  
        <div class="pb-care-slider-main">
              <div class="pb-slider">
                <div class="pb-care-img">
                    <img src="img/pushing_boundaries/Labour-School-2.jpg" alt="Labour-School">
                </div>
                <div class="pbslider-care-txt">
                    <div class="pbcare-line m_hide pbcareline-labour"></div>
                    <h3 class="fontweight-bold">School For Labourers' Children</h3>
                    <p class="fontweight txt-left">We believe that the people who are working hard to transform our thoughts into reality are our responsibility. Every parent dreams of providing the best to their children. We strive to make our labourers’ lives a little easier by providing on-site schools so that they can educate their children easily.</p>
                </div>
            </div>
            <div class="pb-slider">
                <div class="pb-care-img">
                    <img src="img/pushing_boundaries/Mira-Bhayander-Rising.jpg" alt="Mira-Bhayander-Rising">
                </div>
                <div class="pbslider-care-txt">
                    <div class="pbcare-line m_hide pbcareline-mira"></div>
                    <h3 class="fontweight-bold">Mira Bhayander Rising</h3>
                    <p class="fontweight txt-left">A JP Infra initiative, Mira-Bhayander Rising has been conceptualized with the goal of building a community-based lifestyle in Mira Road for people to celebrate their neighbourhood with pride. The idea behind the initiative is to allow residents of Mira Road and Bhayander to engage in community events that help build community spirit and a feeling of togetherness.To be a part of the vibrant Mira-Bhayander Rising click here: 
                    <a href="https://www.facebook.com/MiraRoadRising/" target="_blank">https://www.facebook.com/MiraRoadRising/</a></p>
                </div>
            </div>
            <div class="pb-slider">
                <div class="pb-care-img pos-relative">
                    <img src="img/pushing_boundaries/swimming_pool.jpg" alt="swimming_pool">
                    <p class="pos-absolute pb-swimart p-deliver">Representative Image</p>
                </div>
                <div class="pbslider-care-txt">
                    <div class="pbcare-line m_hide"></div>
                    <h3 class="fontweight-bold">Ladies' Swimming Pool</h3>
                    <p class="fontweight txt-left">We understand the concerns our residents might face and thus provide for maximum safety as well with a separate swimming pool for ladies. These fantastic women can now enjoy their much needed me-time without a care in the world.</p>
                </div>
            </div>
            <div class="pb-slider">
                <div class="pb-care-img  pos-relative">
                    <img src="img/pushing_boundaries/JP-Care.jpg" alt="JP-Care">
                    <p class="pos-absolute pb-swimart p-deliver">Representative Image</p>
                </div>
                <div class="pbslider-care-txt">
                    <div class="pbcare-line m_hide pbcareline-jpcare"></div>
                    <h3 class="fontweight-bold">JP - Care</h3>
                    <p class="fontweight txt-left">JP Infra believes that their customers' needs always come first. JP Care -- an initiative by JP Infra -- is designed to do just that by providing potential customers a support system that lets them book the house that they've been dreaming of.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>  
    </div>

</div>
<!-- because we care ends -->



<!-- Carbon Foot Print Starts Here-->
 <section class="Integral_sec">
        
        <div class="container_main carbon_main text-center">
            <div class="container_main text-center">
              <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
                <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Our Carbon Footprint</h1>
                <div class="liveHead2 padding-project" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                    <p class="carbon_txt">We at JP Infra believe in saving our environment and have ensured we follow what we believe in.</p>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>   -->
                </div>
                <div class="footprint-tab">
                    <div class="foot-img-line">
                        <img src="img/foot-line.png" alt="foot-line.png">
                        <div class="footprint-tabs">
                            <div class="srw-tab" id="solar">
                                <h6 class="tc-grey srw-tab-active" id="h61">SOLAR FOR CONSTRUCTION</h6>
                                <div class="blue-dot blue-dot-active"></div>
                            </div>
                            <div class="srw-tab" id="water">
                                <h6 class="tc-grey" id="h62">RAINWATER HARVESTING</h6>
                                <div class="blue-dot2"></div>
                            </div>
                            <div class="srw-tab" id="waste">
                                <h6 class="tc-grey" id="h63">WASTE MANAGEMENT</h6>
                                <div class="blue-dot3"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        
                        <div class="carbon-div">
                            <div class="solar">
                                <div class="solar-content">
                                    <div class="solar-img pos-relative">
                                        <img src="img/solar.jpg" alt="solar">
                                        <p class="pos-absolute pb-cb p-deliver"> Rendered Image</p>
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/Solar-Icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para texttransform">
                                                <h6>Solar for Construction</h6>
                                            </div>
                                            <div class="clearfix"></div>    
                                        </div>
                                        <p>We have solar-powered panels installed at construction sites that power the work done on site. It is a great boost to energy conservation along with effectiveness.</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="rainwater">
                                <div class="solar-content">
                                    <div class="solar-img pos-relative">
                                        <img src="img/pushing_boundaries/rainwater-harvesting.jpg" alt="rainwater-harvesting">
                                        <p class="pos-absolute pb-cb p-deliver"> Rendered Image</p>
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/pushing_boundaries/RAINWATER-HARVESTING-icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para texttransform">
                                                <h6>rainwater harvesting</h6>
                                            </div>
                                            <div class="clearfix"></div>    
                                        </div>
                                        <p>We have also employed rain-water harvesting techniques at our projects in Mira Road, that allows for water conservation and preservation. </p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="waste">
                                <div class="solar-content">
                                    <div class="solar-img pos-relative">
                                        <img src="img/pushing_boundaries/Waste-management.jpg" alt="Waste-management">
                                        <p class="pos-absolute pb-cb p-deliver"> Rendered Image</p>
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/pushing_boundaries/WASTE-MANAGEMENT-icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para texttransform">
                                                <h6>waste management</h6>
                                            </div>
                                            <div class="clearfix"></div>    
                                        </div>
                                        <p>We have waste management solutions in JP Infra projects to ensure that waste is disposed off correctly without harming the environment</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>    
                    </div>
                </div>
            </div>
            
                
        </div>
        
    </section>

<!-- Carbon Foot Print Ends Here -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>

 $(document).ready(function(){
    
    $('#solar').click(function(){
        $('.carbon-div .solar').show();
        $('.carbon-div .rainwater').hide();
        $('.carbon-div .waste').hide();
        $('.blue-dot').css("background-color", "#2E5689");
        $('.blue-dot2').css("background-color", "#727272");
        $('.blue-dot3').css("background-color", "#727272");
        $('#h61').css("color","#2E5689")
        $('#h62').css("color","#727272")
        $('#h63').css("color","#727272")
    });
    $('#water').click(function(){
        $('.carbon-div .solar').hide();
        $('.carbon-div .rainwater').show();
        $('.carbon-div .waste').hide();
        $('.blue-dot').css("background-color", "#727272");
        $('.blue-dot2').css("background-color", "#2E5689");
        $('.blue-dot3').css("background-color", "#727272");
        $('#h61').css("color","#727272")
        $('#h62').css("color","#2E5689")
        $('#h63').css("color","#727272")
    });
    $('#waste').click(function(){
        $('.carbon-div .solar').hide();
        $('.carbon-div .rainwater').hide();
        $('.carbon-div .waste').show();
        $('.blue-dot').css("background-color", "#727272");
        $('.blue-dot2').css("background-color", "#727272");
        $('.blue-dot3').css("background-color", "#2E5689");
        $('#h61').css("color","#727272")
        $('#h62').css("color","#727272")
        $('#h63').css("color","#2E5689")
    });

    
    
    
 });
</script>

<script>

    $("document").ready(function(){
      $(".tab-slider--body").hide();
      $(".tab-slider--body:first").show();
    });

    $(".tab-slider--nav li").click(function() {
      $(".tab-slider--body").hide();
      var activeTab = $(this).attr("rel");
      $("#"+activeTab).fadeIn();
        if($(this).attr("rel") == "tab2"){
            $('.tab-slider--tabs').addClass('slide');
        }else{
            $('.tab-slider--tabs').removeClass('slide');
        }
      $(".tab-slider--nav li").removeClass("active");
      $(this).addClass("active");
    });

</script>


    <script src="js/slickminjscode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

    <script>
        $('.pb-care-slider-main').slick({
            dots: true,
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
                    arrow: true,
                    prevArrow:false,
                    nextArrow:false,
                    infinite: false,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    arrow: true,
                    prevArrow:false,
                    nextArrow:false,
                    slidesToScroll: 1
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    arrow: true,
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

    <script src="js/jquery-fullPage.js" type="text/javascript"></script>
    <script src="js/home-script.js" type="text/javascript"></script>

    <?php include 'footer.php';?>