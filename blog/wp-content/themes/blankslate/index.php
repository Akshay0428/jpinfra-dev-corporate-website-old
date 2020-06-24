<?php include customeHeader;?>
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
<section class="main-slider">
   <!-- Carousel items -->
   <div class="logo-banner">
      <a href="/index.php">
      <img src="img/JP Infra Logo.png">
      </a>
   </div>
   <div class="blog-banner">
      <img src="img/blog/blog_banner.jpg" alt="blog_banner">
      <div class="blog-box">
         <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
         <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="aos-init aos-animate">Blog</h1>
         <p>We, at JP Infra, believe that building a home is not just about investing in property. Here we not only offer you various reasons to invest in property in Mumbai or why Mira Road is the best location for property investment in Mumbai right now, but also a list of innovative ways and unique quirks to transforming your house into a vibrant, lovely home.</p>
      </div>
   </div>
   <div class="clearfix"></div>
</section>
<div class="clearfix"></div>
<!-- Banner end Hrere -->
<!-- <section id="blogs-here">
   <div class="blogs-here">
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>
      <div class="clearfix"></div>
   </div>
   <div class="blogs-here">
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>
      <div class="col-md-4">
         <img src="img/blog/blog1.jpg" alt="blog1">
         <h5>Why are young couples buying their own Home?</h5>
         <p>20 July 2018</p>
      </div>>
      <div class="clearfix"></div>
   </div>
   <div class="load-more">
      <div class="project-property-button contact-btn">
         <div class="know-text-project-property">
            <button type="submit" id="button_enquiry_desktop" onclick="myfunction();return(false);">
               <h5>LOAD MORE</h5>
            </button>
         </div>
         <div class="know-arrow-project-property">
            <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
   <div class="clearfix"></div>
   </section> -->
<section id="blogs-here">
   <div class="blogs-here">
      <?php query_posts( $jpinfra_blog ); ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-md-4 blogs-here-col">
         <a href="<?php the_permalink(); ?>" class="blogs-here-new">
         <span class="blogs-here-new">
         <?php the_post_thumbnail(); ?>
         </span>
         <span class="blogs-here-overlay"></span>
         </a>
         <h5><?php the_title(); ?></h5>
         <p><?php echo the_field('date'); ?></p>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
      <div class="clearfix"></div>
   </div>
   <!-- <div class="load-more">
      <div class="project-property-button contact-btn">
         <div class="know-text-project-property">
            <button type="submit" id="button_enquiry_desktop" onclick="myfunction();return(false);">
               <h5>LOAD MORE</h5>
            </button>
         </div>
         <div class="know-arrow-project-property">
            <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
         </div>
         <div class="clearfix"></div>
      </div>
   </div> -->
   <div class="clearfix"></div>
</section>
<!---->
<script src="js/send.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>
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
<?php include customeFooter;?>