<?php include 'header.php';?> 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
      
  <style>
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
    .prev-button {
      color: #999;
      position: absolute;
      top: 50%;
      left: -60px;
      font-size: 1.5em;
      background-image: url(img/arrow_2.png);
      width: 29px;
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
      top: 50%;
      font-size: 1.5em;
      background-image: url("img/arrow_1.png");
      right: -60px;
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
  </style>



    <!-- banner start -->
    <section class="banner-wws">
        <img src="img/about-us/About-us-Banner.jpg" alt="banner" class="m_hide">
        <img src="img/about-us/About-us-Banner-mob.jpg" alt="banner" class="d_hide">
    </section>
    <div class="logo-banner">
        <a href="https://www.dotwisedigital.com/jpuat">
            <img src="img/JP Infra Logo.png" alt="jp logo">
        </a>
    </div>
    <div class="clearfix"></div>
    <!-- banner  ends -->

    <!-- about jp infra start -->
    <div class="container_main abt-us-margin abt-us-jpinfra">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 class="texttransform" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">about JP infra</h1>
      <div class="abtus-jpinfra">
        <div class="abtus-txt">
          <h3 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">JP Infra signifies the perfect combination of dynamism and growth.</h3>
          <p class="fontweight" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">With strong leadership at the helm, the business has set a strong vision and an ambitious growth path for itself. Founded in 2006, JP Infra has carved a niche for itself in terms of project delivery, with most projects being referred to as landmarks; few even as benchmarks.
JP Infra believes in bringing serenity back to the bustling and busy nature of the city of Mumbai. The brand offers a calm, peaceful lifestyle to its residents with the provision of lush green spaces. That doesn’t take away from the futuristic and progressive technology employed in the working of the projects or the state-of-the-art amenities available to home buyers and residents. Thanks to its ultra-modern thinking and approach, JP Infra has been rewarded with most prestigious awards in the recent times, all of which will tie back in with the concept of providing international standards of modern living.</p>
        </div>
        <div class="abtus-img m_hide">
          <div class="abtus-img1">
            <img src="img/about-us/abt-1.jpg" alt="abt-1" data-aos="fade-up" data-aos-easing="linear"
           data-aos-duration="1500">
           <p class="pos-absolute pb-cb p-deliver"  data-aos="fade-up" data-aos-easing="linear"
           data-aos-duration="1500">Artist's Impression</p>
          </div>
          <div class="abtus-img2">
            <img src="img/about-us/abt-2.jpg" alt="abt-2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="3000">
            <p class="pos-absolute pb-cb p-deliver" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="3000">Artist's Impression</p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="abtus-img-mob d_hide" id="mob-abtcar">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
            </ol>
            <div>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/about-us/About-JP-Infra-1.jpg" class="img-1">
                  <p class="pos-absolute pb-cb p-deliver ov-pdel">Artist's Impression</p>
                </div>
                <div class="item">
                  <img src="img/about-us/About-JP-Infra-2.jpg" class="img-2">
                  <p class="pos-absolute pb-cb p-deliver ov-pdel">Artist's Impression</p>
                </div>
                <!-- <div class="item">
                  <img src="img/pushing_boundaries/humanleft3.jpg" class="img-cls">
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    <!-- about jp infra ends -->

    <!--our leaders start -->
    <div class="container_main abt-us-margin">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 class="texttransform" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">our leaders </h1>
      <div class="ourleadermainsilder">
        <div class="leader-slider">
          <div class="leader-box">
            <div class="leader-box-img">
              <img src="img/about-us/MR.-Vijay-Jain.jpg" alt="leader2">
            </div>
            <div class="leader-box-txt">
              <h3 class="abtus-color fontweight-bold">Mr. Vijay Jain</h3>
              <h6 class="abtus-color texttransform">chairman</h6>
              <p class="fontweight txt-left">Mr. Vijay Jain is a proud first-generation entrepreneur who has led from the front to allow JP Infra to grow into the formidable force in Mumbai’s real estate space that it is today. His easy-going nature, strong networking skills and pleasant approach allows him to provide a relatable human face to the brand.</p>
            </div>
          </div>
          <div class="leader-box">
            <div class="leader-box-img">
              <img src="img/about-us/MR-Shubham-Jain.jpg" alt="leader2">
            </div>
            <div class="leader-box-txt">
              <h3 class="abtus-color fontweight-bold">Mr. Shubham Jain</h3>
              <h6 class="abtus-color texttransform">Managing Director</h6>
              <p class="fontweight txt-left">Mr. Shubham Jain is highly influential for the dynamism and modern thinking that the brand is growing with. Thanks to his sheer commitment and undeniable passion, Shubham was awarded the Young Achiever of the Year in 2015. With a futuristic approach in mind, Shubham leads the team to being a step ahead of the curve.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
      
    <!--our leaders ends -->

    <!-- our redevelopment project start-->
    <div class="redevelopment-abtus">
      <div class="container_main">
        <div class="abt-blueline"></div>
        <h1 class="texttransform" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">our redevelopment projects</h1>
        <p class="txt-align fontweight redevelopment-p" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">JP Infra through its redeveloped projects have taken the first step towards sustainable living and maintaining ecological balance making the residents proud eco-warriors.</p>
        <div class="abtpage-btn">
          <a href="redevelopment_projects.php">
            <div class="abtpaebtn-txt">know more</div>
          </a>
          
           <div class="abtpaebtn-arow">
            <img src="img/Project-arrow-white.png" alt="arrow">
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- our redevelopment project ends-->

    <!-- achievements start  -->
    <div class="achievements container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 class="texttransform" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">achievements</h1>
      <div class="achievements-slider">
        <div class="abtpage-achievement">
          <img src="img/about-us/ABP News.png" alt="ABP News">
        </div>
        <div class="abtpage-achievement">
          <img src="img/about-us/DNA.png" alt="DNA">
        </div>
        <div class="abtpage-achievement">
          <img src="img/about-us/Fast 50.png" alt="Fast 50">
        </div>
        <div class="abtpage-achievement">
          <img src="img/about-us/Ind-Aus Leadership.png" alt="Ind-Aus Leadership">
        </div>
        <div class="abtpage-achievement">
          <img src="img/about-us/Master Brand.png" alt="Master Brand">
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- achievements ends  -->

    <!-- work with us start -->
    <div class="abt-wwu container_main">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 class="texttransform" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">work with us</h1>
      <p class="fontweight abt-p-width" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">JP Infra is one of India’s most established real estate brands in the Mumbai suburban market. At JP Infra, we believe in team spirit and working together like one unit to build homes that provide you the lifestyle you dream of. Our motto is that inspired teams naturally provide excellent and dedicated customer service, which can be brought about by providing a healthy work environment.</p>
      <p class="fontweight abt-p-width m_hide" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">Upload resumes at careers@jpinfra.com to join the team.</p>
      <p class="fontweight abt-pmob-width txt-align d_hide" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2000">Upload resumes at careers@jpinfra.com to join the team.</p>
    </div>
    <!-- work with us ends -->

    <!-- blue button start-->
    <div class="wwu-btn-event container_main">
        <div class="wwu-btn over-btn">
          <a href="work-with-us.php#position-available">
            <div class="wwu-btn-txt over-btntxt">click to<span class="wwu-bold"> view the positions available</span></div>
            <div class="wwu-btn-arrow over-btnarrow">
                <img src="img/Project-arrow-white.png" alt="arrow">
            </div>
            <div class="clearfix"></div>
         </div></a>
        <div class="clearfix"></div>
    </div>
    <!-- blue button end-->


    <!-- slider our leader -->
    <script src="js/slickminjscode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

    <script>
      $('.ourleadermainsilder').slick({
        dots: false,
        arrow: true,
        prevArrow:'<button type="button" class="prev-button"></button>',
            nextArrow:'<button type="button" class="next-button"></button>',
        infinite: true,
        autoplay: true,
        speed: 1500,
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


      $('.achievements-slider').slick({
        dots: false,
        arrow: true,
        prevArrow:'<button type="button" class="prev-button"></button>',
        nextArrow:'<button type="button" class="next-button"></button>',
        infinite: true,
        autoplay: true,
        speed: 1500,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrow: true,
            dots: false,
            prevArrow:'<button type="button" class="prev-button"></button>',
            nextArrow:'<button type="button" class="next-button"></button>',
            infinite: false,
          }
          },
          {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            arrow: false,
            dots: true,
            prevArrow:'<button type="button" class="prev-button"></button>',
            nextArrow:'<button type="button" class="next-button"></button>',
            slidesToScroll: 1
          }
          },
          {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            arrow: false,
            dots:true,
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