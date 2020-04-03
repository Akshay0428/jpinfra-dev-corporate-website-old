<?php include 'header.php';?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
    
    <style>
        .slick-dots {
            text-align: center;
            margin: 0 0 10px 0;
            padding: 35px 0px 20px 0px;
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
            top: 30%;
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
          top: 30%;
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
 

    <div class="logo-banner">
           <img src="img/JP Infra Logo.png">
    </div>
<!-- Banner end Here -->

<!-- Carbon Foot Print Starts Here-->
 <section class="Integral_sec">
        
        <div class="container_main carbon_main text-center">
            <div class="container_main text-center">
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
                                    <div class="solar-img">
                                        <img src="img/solar.jpg" alt="solar">
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/Solar-Icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para">
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
                                    <div class="solar-img">
                                        <img src="img/solar.jpg" alt="solar">
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/Solar-Icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para">
                                                <h6>RAINWATER HARVESTING</h6>
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
                                    <div class="solar-img">
                                        <img src="img/solar.jpg" alt="solar">
                                    </div>
                                    <div class="solar-txt">
                                        <div class="solar-img-txt">
                                            <div class="solar-icon">
                                                <img src="img/Solar-Icon.png" class="img-icon">
                                            </div>
                                            <div class="solar-para">
                                                <h6>WASTE MANAGEMENT</h6>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

        <script>
        $('.integral_slider').slick({
            dots: true,
            arrow: true,
            prevArrow:'<button type="button" class="prev-button"></button>',
            nextArrow:'<button type="button" class="next-button"></button>',
            infinite: false,
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
        </script>   
<?php include 'footer.php';?>