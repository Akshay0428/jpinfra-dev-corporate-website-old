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
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

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
            <div class="nri-banner" id="myVideo">
              <img src="img/nri-corner.jpg" alt="nri-corner">
            </div>
    </section>
    <!-- Banner end Hrere -->

    <section class="nri-corner-text">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="aos-init aos-animate">NRI Corner</h1>
      <div class="nri-text">
        <h3>NRI Opportunities</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>        
      </div>
    </section>

    <section class="nri-corner-text">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="aos-init aos-animate">FAQ'S</h1>
      <div class="nri-text">
        <div class="accordion-container">
          <div class="set">
            <a>
              Vestibulum 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
          </div>
          <div class="set">
            <a>
              Phasellus 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus. Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
            </div>
          </div>
          <div class="set">
            <a>
              Praesent 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
          </div>
          <div class="set">
            <a>
              Curabitur 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae luctus odio pretium scelerisque. </p>
            </div>
          </div>
        </div>     
      </div>
      <div class="view-all-proj">
        <a href="project.php">
          <div class="project-property-button contact-btn">
            <div class="know-text-project-property">
                <button type="submit" id="button_enquiry_desktop" onclick="myfunction();return(false);"><h5>View all Projects</h5></button>
            </div>
            <div class="know-arrow-project-property">
              <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
            </div>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </section>





<!---->
<script src="js/send.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

<!-- accordion script -->
<script>
  $(document).ready(function() {
  $(".set > a").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
    } else {
      $(".set > a i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".set > a").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
});

</script>
<!-- accordion script -->


<!--media desktop-->
<script>
   // Carousel Auto-Cycle
   $(document).ready(function() {
   $('.carousel').carousel({
     interval: 6000
   })
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