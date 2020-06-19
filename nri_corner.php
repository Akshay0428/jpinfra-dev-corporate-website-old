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
            <div class="nri-banner m_hide" id="">
              <img src="img/nri-corner.jpg" alt="nri-corner">
            </div>
            <div class="nri-banner d_hide" id="">
              <img src="img/nri/NRI-Banner-mob.jpg" alt="nri-corner">
            </div>
    </section>
    <!-- Banner end Hrere -->

    <section class="nri-corner-text">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="aos-init aos-animate">NRI Corner</h1>
      <div class="nri-text">
        <h3 id="link_opportunities">NRI Opportunities</h3>
        <p>For better opportunities in education, employment, and business, several Indians migrate to foreign countries each year. However, over time, India has become an attractive investment destination, drawing global attention. With the help of various factors such as improved foreign relations, steady strengthening of the dollar against the rupee, low inflation, and interest rates, transparency and security of investments, and the flurry of developmental activities across the country’s real estate sector is creating highly favorable opportunities for investment. As a result of this, there are multiple opportunities present for NRIs, which include</p>        
        <p><ul>
        <li><strong>Tax exemption:</strong> By investing in real estate an NRI can save tax. Tax deduction on home loans on principal repayment and interest component can be claimed by the NRIs.</li>
        <li><strong>Rental Income:</strong> You can rent out your property on lease in India without any trouble. The income can be received to an account in India or the NRI’s account in the country he is currently residing in.</li>
        <li><strong>Retirement benefits:</strong> NRIs that tend to plan their retirement can invest in India and take advantage of a reverse mortgage. This type of mortgage is not factored in the taxable income for NRIs. In this way, ageing NRIs can enjoy the benefits of their property in India.</li>
        <li><strong>Prime Location:</strong> JP Infra has projects in most of the supreme destinations for investment. We create townships that balance luxury and convenience.</li>
        <li><strong>Emotional security:</strong> Most NRIs nurse a dream of returning to their motherland and settling comfortably in their homes in the sunset years.</li>
        </ul></p>
      </div>
    </section>

    <div class="nri_yinvest">
      <div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">  
        <div class="container_main pdng">
          <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="m_hide">Why Invest</h1>
          <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="d_hide marg-mob-nri">Why Invest</h1>
          <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="f-10">If you are an NRI interested in investing in property in India, there’s no time like the present. The unique tax reforms presented by the government have allowed transparency into the Indian real estate market, making it the best time for NRI Real Estate Buyers to invest in property. The Indian Realty market is expected to grow at a CAGR of 11.2percent. Combining these factors along with the RERA bill, GST reforms and the stable price-points of real estate that India has been offering since 2016, there has never been a more beneficial time to step into the real estate space of India. Banks are also playing their part in wooing home buyers by offering excellent interest rates that are low enough to make buying property in India the right investment decision for all NRIs.</p>  
          <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="f-10">Mumbai being the city of dreams has always been a highly viable option for real estate investment for all. For NRIs, it remains the easy choice as it is the financial hub of India housing headquarters and offices of major businesses as well as being the centre of connectivity within Maharashtra. The civic involvement and growth of infrastructure is fast making it an attractive option for investment to all NRIs.</p> 
      </div>
      <div class="whitey_line"></div>
      
    </div></div>





    <section class="nri-corner-text">
      <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
      <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500" class="aos-init aos-animate" id="link_faq">FAQ'S</h1>
      <div class="nri-text">
        <div class="accordion-container">
          <div class="set">
            <a>
            1. Who is a Non-Resident Indian (NRI)? 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p>An Indian citizen who stays abroad for employment/ carrying business or vocation for a certain period is a non-resident.</p>
            </div>
          </div>
          <div class="set">
            <a>
            2. Who is Overseas Citizen of India (OCI)? 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p>The Overseas Citizenship of India (OCI) is an immigration status permitting a foreign citizen of Indian origin to live and work in India.</p>
            </div>
          </div>
          <div class="set">
            <a>
            3. Can NRIs buy real estate properties in India? 
              <i class="fa fa-plus"></i>
            </a>
            <div class="content">
              <p>Yes. NRIs can buy and sell residential and commercial properties in India.</p>
            </div>
          </div>
          <div class="set">
            <a>
            4. Is there any restriction on the number of properties, NRIs can buy in India? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>There is no restriction on the number of residential or commercial properties an NRI can own in India. But there are certain laws that restrict NRIs from purchasing any kind of agricultural land/ plantation property/ farm house in India.</p>
            </div>
          </div>
          <div class="set">
            <a>
            5. Do NRIs have to take permission from Reserve Bank before purchasing a property in India? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Reserve Bank has granted general permission to the NRI's whether resident in India or abroad, to purchase immovable property in India for their bonafide residential purpose. They are, therefore, not required to obtain the permission of the Reserve Bank.</p>
            </div>
          </div>
          <div class="set">
            <a>
            6. Are there any formalities required to be completed by NRIs for purchasing real estate properties? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>They are required to file a declaration in form IPI 7 with the Central Office of Reserve Bank at Mumbai within a period of 90 days from the date of purchase of immovable property or final payment of purchase consideration along with a certified copy of the document evidencing the transaction and bank certificate regarding the consideration paid.</p>
            </div>
          </div>
          <div class="set">
            <a>
            7. Can such property be sold without permission of Reserve Bank? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Yes, Reserve Bank has granted permission for sale of such property.</p>
            </div>
          </div>
          <div class="set">
            <a>
            8. Can the properties be given on rent if not required for immediate use? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Yes. Reserve Bank has granted general permission for letting out any immovable property in India. Any sort of income from such investment is eligible for repatriation.</p>
            </div>
          </div>
          <div class="set">
            <a>
            9. Can NRIs transfer residential property by way of gift? If yes, to whom? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Yes, the Reserve Bank has granted permission to NRIs to acquire or dispose of NRI India Properties by way of a gift from or to a relative who may be an Indian citizen whether resident in India or not.</p>
            </div>
          </div>
          <div class="set">
            <a>
            10. Can NRIs obtain loans from financial institutions? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Yes, the Reserve Bank has granted permission to certain financial institutions providing housing finance e.g. HDFC, LIC Housing Finance Ltd., etc., and authorized dealers to grant housing loans to NRI nationals for acquisition of a house/flat for self-occupation subject to certain conditions.</p>
            </div>
          </div>
          <div class="set">
            <a>
            11. What are the kind of properties an NRI cannot buy? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>An NRI cannot buy agricultural land/plantation property/farmhouses in India. Proposals to buy such land have to be specifically approved by RBI, in consultation with the Government of India.</p>
            </div>
          </div>
          <div class="set">
            <a>
            12. Does NRI/OCI have to file tax returns? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>If you are an NRI/OCI, you would have to file your tax returns if you fulfill either of these conditions:
                 Your taxable income in India during the year was above the basic exemption limit of INR.1.6 lakh or you have earned short-term or long-term capital gains from the sale of any investments or assets, even if the gains are less than the basic exemption limit.</p>
            </div>
          </div>
          <div class="set">
            <a>
            13. How can NRIs file tax returns if they are currently away from India? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>In these cases, you can file your tax return either by giving a power of attorney to someone in India or by sending your form and documents to a tax expert in India who would then file the return on your behalf. You can file the tax returns by using the online platform also.</p>
            </div>
          </div>
          <div class="set">
            <a>
            14. What is the Tax treatment for income generated from property selling or renting for NRI/OCI? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Only purchasing the property does not attract income tax. However, any income accruing from the ownership of it, in the form of rent/annual value of the house and/or capital gains, arising on the sale of this house or part, thereof is taxable in the hands of the owner.</p>
            </div>
          </div>
          <div class="set">
            <a>
            15. Does Capital Gains Tax (CGT) apply to NRI/OCI? 
              <i class="fa fa-plus"></i> 
            </a>
            <div class="content">
              <p>Yes. Long-term and short-term capital gains are taxable to NRI/OCI.</p>
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
<script src="js/slickminjscode.js"></script>
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