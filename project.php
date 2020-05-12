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
		    	.test-slider-main .prev-button {
		    		background-image: url(img/project/testimonial/Arrow_test_right.png) !important;
				    top: 30%;
				    left: -70px;
				    width: 50px;
				    height: 25px;
		    	}
		    	.test-slider-main .next-button {
		    		background-image: url(img/project/testimonial/Arrow_test_left.png) !important;
				    top: 30%;
				    right: -50px;
				    width: 50px;
				    height: 26px;
		    	}
		    	@media screen and (max-width: 800px) {
		    	  .next-button {
		    	    display: none !important;
		    	  }
		    	}

			</style>
			
			<!-- banner start -->
			    <div class="logo-banner">
			      <a href="https://www.dotwisedigital.com/jpuat">
	            <img src="img/JP Infra Logo.png">
	        </a>
			   </div>
				<!--<section class="main-banner">-->
				<!--	<div class="banner"> -->
				<!--		<img class="banner_project" src="img/Projects_Banner.jpg">-->
				<!--	</div>-->
				<!--</section>-->

				<!-- Banner end Here -->
				
				<!-- jp world start -->
				
				<!--<div class="world_main">	-->
				<!--	<div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    -->
				<!--		<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">The World Of JP North</h1>-->
				<!--		<div class="lable_line">-->
				<!--			<img src="img/Gray-Head-line.png" class="northimage">-->
				<!--		</div>-->
				<!--		<div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
				<!--			<p>Nestled in the heart of Mira Road, amidst lush greenery, JP North brings to you a dream home and a perfect lifestyle. Encompassing all essential aspects for a healthy mind and body, it has been designed to enhance your mental, physical and social well-being in an elegant and fashionable manner.</p>   -->
				<!--		</div>-->
				<!--	</div>-->
				<!--</div>-->
				
				<!-- jp world end -->

			    <!-- Projects starts Hrere -->
		    	<!--<div id="project" class="main_section">-->
		    	<!--   <div class="container_main">-->
		    	<!--      <div class="project">-->
		    	<!--         <div class="pr_cont_slider">-->
		    	            <!-- Ongoing -->
		    	            
		    	<!--            <div class="pr_showcase" id="hProngoing">-->
		    	<!--               <div id="ongoing" class="carousel slide" data-ride="carousel">-->
		    	                  <!-- Indicators start -->
		    	                  
		    	<!--                  <ol class="carousel-indicators">-->
		    	<!--                     <li data-target="#ongoing" data-slide-to="0" class="active"></li>-->
		    	<!--                     <li data-target="#ongoing" data-slide-to="1"></li>-->
		    	<!--                     <li data-target="#ongoing" data-slide-to="2"></li>-->
		    	<!--                     <li data-target="#ongoing" data-slide-to="3"></li>-->
		    	<!--                     <li data-target="#ongoing" data-slide-to="4"></li>-->
		    	<!--                  </ol>-->
		    	                  <!-- Indicators ends -->
		    	                  
		    	                  <!-- Wrapper for slides -->
		    	<!--                  <div class="carousel-inner">-->
		    	<!--                     <div class="item active">-->
		    	<!--                        <div class="col_pr_txt_img">-->
		    	<!--                           <div class="pr_sl_img" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">-->
		    	<!--                              <img class="d-block w-100" src="img/project/world-jp/gardencity.jpg" alt="Jp Infra">-->
		    	<!--                           </div>-->
		    	<!--                           <div class="pr_sl_txt" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">-->
		    	                              <!--<h5>2018</h5>-->
		    	<!--                              <h3>North Garden City</h3>-->
		    	<!--                              <h4 class="projects_h4">22+ ACRE IN THE HEART OF MIRA ROAD</h4>-->
		    	<!--                              <p>Dive into pure bliss at North Garden City’s spacious and comfortable homes. Find 1, 2 & 3 BHK houses that are designed to provide you with the experience of a lifetime with over 35+ amenities and 16 themed garden. The dream home awaits your presence at JP’s North Garden City.</p>-->
		    	<!--                           </div>-->
		    	                           <!--btn-->
		    	<!--                           <div class="jp-north-button">-->
		    	<!--                               <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">-->
		    	<!--                                   <div class="know-text-jp-north north-project">-->
		    	<!--                                   <h5>Know More</h5>-->
		    	<!--                                </div>-->
		    	<!--                               </a>-->
		     <!--       	                           <div class="know-arrow-jp-north">-->
		     <!--       	                               <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
		     <!--       	                           </div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                                </div>-->
		    	<!--                               <div class="clearfix"></div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                        </div>-->
		    	<!--                     </div>-->
		    	<!--                     <div class="item">-->
		    	<!--                        <div class="col_pr_txt_img">-->
		    	<!--                           <div class="pr_sl_img">-->
		    	<!--                              <img class="d-block w-100" src="img/project/world-jp/Codename-Hotcake.jpg" alt="Jp Infra">-->
		    	<!--                           </div>-->
		    	<!--                           <div class="pr_sl_txt">-->
		    	                              <!--<h5>2018</h5>-->
		    	<!--                              <h3>Codename Hotcake</h3>-->
		    	<!--                              <h4 class="projects_h4">OPEN PAYMENT PLANS - YOUR HOUSE, YOUR CHOICE</h4>-->
		    	<!--                              <p>Enjoy the finer things in life at Codename Hotcake’s lavish and cosy homes. Comprising 1 and 2 BHK houses, Codename Hotcake promises spacious and well-ventilated interiors with a vast range of avant-garde amenities. Equipped with the latest security featuring ‘Key-less door for Key-less entry’, all your needs are covered at Codename Hotcake.</p>					-->
		    	<!--                           </div>-->
		    	                           <!--btn-->
		    	<!--                               <div class="jp-north-button">-->
		    	<!--                                   <a href="http://www.jpinfra.com/codenamehotcake/" target="blank">-->
		    	<!--                                    <div class="know-text-jp-north north-project">-->
		    	<!--                                        <h5>Know More</h5>-->
		    	<!--                                    </div>-->
		    	<!--                                    </a>-->
		    	<!--                                    <div class="know-arrow-jp-north">-->
		    	<!--                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
		    	<!--                                    </div>-->
		    	<!--                                    <div class="clearfix"></div>-->
		    	<!--                                </div>-->
		    	<!--                               <div class="clearfix"></div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                        </div>-->
		    	<!--                     </div>-->
		    	<!--                     <div class="item">-->
		    	<!--                        <div class="col_pr_txt_img">-->
		    	<!--                           <div class="pr_sl_img">-->
		    	<!--                              <img class="d-block w-100" src="img/project/world-jp/donald.jpg" alt="Jp Infra">-->
		    	<!--                           </div>-->
		    	<!--                           <div class="pr_sl_txt">-->
		    	                              <!--<h5>2018</h5>-->
		    	<!--                              <h3>Codename Now Or Never</h3>-->
		    	<!--                              <h4 class="projects_h4">ANOTHER NORTHERN DELIGHT</h4>-->
		    	<!--                              <p>Located in the heart of North Garden City, Codename now or never is nothing short of extraordinary. Featuring 8 themed gardens and 28 lifestyle amenities, Codename now or never is tuned perfectly to serve all your needs and wants. Leave your worries out before you enter because we’ve got you covered.</p>					-->
		    	<!--                           </div>-->
		    	                           <!--btn-->
		    	<!--                               <div class="jp-north-button">-->
		    	<!--                                   <a href="http://www.jpinfra.com/jp-north/codenamenowornever/" target="blank">-->
		    	<!--                                       <div class="know-text-jp-north north-project">-->
		    	<!--                                        <h5>Know More</h5>-->
		    	<!--                                    </div>-->
		    	<!--                                   </a>-->
		    	<!--                                    <div class="know-arrow-jp-north">-->
		    	<!--                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
		    	<!--                                    </div>-->
		    	<!--                                    <div class="clearfix"></div>-->
		    	<!--                                </div>-->
		    	<!--                               <div class="clearfix"></div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                        </div>-->
		    	<!--                     </div>-->
		    	<!--                     <div class="item">-->
		    	<!--                        <div class="col_pr_txt_img">-->
		    	<!--                           <div class="pr_sl_img">-->
		    	<!--                              <img class="d-block w-100" src="img/project/world-jp/Codename-Open-Streets.jpg" alt="Jp Infra">-->
		    	<!--                           </div>-->
		    	<!--                           <div class="pr_sl_txt">-->
		    	                              <!--<h5>2018</h5>-->
		    	<!--                              <h3>Codename Open Streets</h3>-->
		    	<!--                              <h4 class="projects_h4">INSPIRED BY THE EUROPEAN CITY OF BARCELONA</h4>-->
		    	<!--                              <p>Wake up each day to stunning views of lush greenery and start your day humming to nature’s symphonies at JP’s Codename Open Streets. An ultra modern residential project, it offers luxurious 1, 2 and 3 BHK houses tailored to fulfil your dreams and more.</p>-->
		    	<!--                           </div>-->
		    	                           <!--btn-->
		    	<!--                               <div class="jp-north-button">-->
		    	<!--                                   <a href="http://www.jpinfra.com/codenameopenstreets/" target="blank">-->
		    	<!--                                    <div class="know-text-jp-north north-project">-->
		    	<!--                                        <h5>Know More</h5>-->
		    	<!--                                    </div>-->
		    	<!--                                    </a>-->
		    	<!--                                    <div class="know-arrow-jp-north">-->
		    	<!--                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
		    	<!--                                    </div>-->
		    	<!--                                    <div class="clearfix"></div>-->
		    	<!--                                </div>-->
		    	<!--                               <div class="clearfix"></div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                        </div>-->
		    	<!--                     </div>-->
		    	<!--                     <div class="item">-->
		    	<!--                        <div class="col_pr_txt_img">-->
		    	<!--                           <div class="pr_sl_img">-->
		    	<!--                              <img class="d-block w-100" src="img/project/world-jp/celeste.jpg" alt="Jp Infra">-->
		    	<!--                           </div>-->
		    	<!--                           <div class="pr_sl_txt">-->
		    	                              <!--<h5>2018</h5>-->
		    	<!--                              <h3>North Celeste</h3>-->
		    	<!--                              <h4 class="projects_h4">FUTURISTIC LIFESTYLE</h4>-->
		    	<!--                              <p>North Celeste offers Spanish - styled 1 and 2 BHK homes that are modelled to suit all your needs and more. The vast range of avante-garde amenities will not just leave you in awe but also make life simple and comfortable in a stylish way.</p>					-->
		    	<!--                           </div>-->
		    	                           <!--btn-->
		    	<!--                               <div class="jp-north-button">-->
		    	<!--                                   <a href="https://www.jpinfra.com/jp-north/celeste/" target="blank">-->
		    	<!--                                    <div class="know-text-jp-north north-project">-->
		    	<!--                                        <h5>Know More</h5>-->
		    	<!--                                    </div>-->
		    	<!--                                    </a>-->
		    	<!--                                    <div class="know-arrow-jp-north">-->
		    	<!--                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
		    	<!--                                    </div>-->
		    	<!--                                    <div class="clearfix"></div>-->
		    	<!--                                </div>-->
		    	<!--                               <div class="clearfix"></div>-->
		    	<!--                           <div class="clearfix"></div>-->
		    	<!--                        </div>-->
		    	<!--                     </div>-->
		    	<!--                  </div>-->
		    	<!--               </div>-->
		    	<!--            </div>-->
		    	<!--         </div>-->
		    	<!--         <div class="clearfix"></div>-->
		    	<!--      </div>-->
		    	<!--      <div class="clearfix"></div>-->
		    	<!--   </div>-->
		    	<!--   <div class="clearfix"></div>-->
		    	<!--</div>-->
			<!-- Projects end Hrere -->

				<!-- Project bg start-->
				<div class="project-background">
					<h1>Projects</h1>
					<div class="project-white-sec"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
					    <p>Over the past __ years, JP Infra has delivered __ square meters of happiness and strives to continue providing dream homes to help you realize your dreams and live the life you were always meant to. In the hustle and bustle of the busy city, JP Infra offers a thoughtful lifestyle for its residents to enjoy ultra-modern amenities with state-of-the-art technology, sustainable development, and lush green landscapes.</p>
					</div>
				</div>
				<!-- Project bg end -->



				<!-- ongoing projects start -->
				<div class="ongoing_project">	
					<div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">
						<div class="lable_line">
								<img src="img/Gray-Head-line.png" class="northimage">
							</div>  
						<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Ongoing Projects</h1>
							
							<div class="liveHead2 padding-project" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
								<!--<p>Over the past __ years, JP Infra has delivered __ square meters of happiness and strives to continue providing dream homes to help you realize your dreams and live the life you were always meant to.</p>   -->
							</div>
					</div>
					    <!-- slider start-->
				        <div class="project-ongoing-slider responsivepro">
							
	<!-- 						<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/boulevard.jpg" alt="Boulevard">
									<div class="media_hveff_pro"><h5>EASY ACCESSIBILITY EASY LIFE</h5>
		                                <p class="proj_hvtext">
		                                    2BHK & 3 BHK<br>
		                                    Children’s Play Area<br>
		                                    Rain Water Harvesting<br>
		                                    Great Connectivity<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Boulevard</h3>
									</div>
									<div>
										<p>Jogeshwari</p>
									</div>
			                               <div class="project-ongoing-button">
			                                   <a href="http://www.jpinfra.com/boulevard.html" target="blank">
			                                       <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                   </a>
			                                    
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div> -->
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/donald.jpg">
									<div class="media_hveff_pro"><h5>EASY ACCESSIBILITY EASY LIFE</h5>
		                                <p class="proj_hvtext">
		                                    8 Themed Gardens<br>
		                                    28 Lifestyle Amenities<br>
		                                    Green Living<br>
		                                    Grand Clubhouse<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Codename Now Or Never</h3>
									</div>
									<div>
										<p>Mira Road</p>
									</div>
			                               <div class="project-ongoing-button">
			                                   <a href="http://www.jpinfra.com/jp-north/codenamenowornever/" target="blank">
		    	                                   <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
		    	                                   </a>
			                                    
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div>
							
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/Codename-Hotcake.jpg" alt="Codename Hotcake">
									<div class="media_hveff_pro"><h5>OPEN PAYMENT PLANS - YOUR HOUSE, YOUR CHOICE</h5>
		                                <p class="proj_hvtext">
		                                    1 & 2 BHK<br>
		                                    Child Centric<br>
		                                    Recreation<br>
		                                    Entertainment - Amphitheatre<br>
		                                    Games Area<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Codename Hotcake</h3>
									</div>
									<div>
										<p>Mira Road</p>
									</div>
									    <div class="project-ongoing-button">
									        <a href="http://www.jpinfra.com/codenamehotcake/" target="blank">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                        </div>
									       </a>
			                               
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div>
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/Codename-Open-Streets.jpg" alt="Codename Open Streets">
									<div class="media_hveff_pro"><h5>INSPIRED BY THE EUROPEAN CITY OF BARCELONA</h5>
		                                <p class="proj_hvtext">
		                                    1 & 2 BHK<br>
		                                    Landscaped Garden<br>
		                                    Acupressure Walkway<br>
		                                    Amphitheatre<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Codename Open Streets</h3>
									</div>
									<div>
										<p>Mira Road</p>
									</div>
									<div class="project-ongoing-button">
			                                   <a href="http://www.jpinfra.com/codenameopenstreets/" target="blank">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                    </a>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/Elara.jpg">
									<div class="media_hveff_pro"><h5>UNOBSTRUCTED LUSH GREEN VIEWS</h5>
		                                <p class="proj_hvtext">
		                                    1,2 & 3 BHK<br>
		                                    Child Centric<br>
		                                    Fitness<br>
		                                    Recreation<br>
		                                    Green Living<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Elara</h3>
									</div>
									<div>
										<p>North Garden City, Mira Road</p>
									</div>
									<div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div>
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/Euphoria.jpg">
									<div class="media_hveff_pro"><h5>A HAVEN OF PURE BLISS AND DELIGHT</h5>
		                                <p class="proj_hvtext">
		                                    2 BHK & 3 BHK<br>
		                                    Fitness<br>
		                                    Recreation<br>
		                                    Convenience<br>
		                                    Games Area<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Euphoria</h3>
									</div>
									<div>
										<p>North Garden City, Mira Road</p>
									</div>
									<div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>	
								</div>
							</div>
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/Alexa.jpg" alt="alexa">
									<div class="media_hveff_pro"><h5>AN OASIS OF LUXURY IN THE HEART OF MIRA ROAD</h5>
		                                <p class="proj_hvtext">
		                                    1 BHK<br>
		                                    CCTV Cameras<br>
		                                    24 Hr Backup Electricity<br>
		                                    24 Hr Water Supply<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Alexa</h3>
									</div>
									<div>
										<p>North Garden City, Mira Road</p>
									</div>
									<div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>	
								</div>
							</div>
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/ongoing/altus.jpg" alt="Altus">
		    						<div class="media_hveff_pro"><h5>UNOBSTRUCTED 270 DEGREE VIEW OF CITY SKYLINE</h5>
		                                <p class="proj_hvtext">
		                                    
		                                    3BHK<br>
		                                    Park<br>
		                                    Gym<br>
		                                    Swimming Pool<br>
		                                </p>
		                            </div>
		                        </div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Altus</h3>
									</div>
									<div>
										<p>Worli</p>
									</div>
									
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                   <a href="http://www.jpinfra.com/altus.html" target="blank">
			                                       <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                   </a>
			                                    
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
								</div>
							</div>
						</div>
					<!-- slider ends -->
					<div class="clearfix"></div>
				</div>
				<!-- ongoing projects ends -->



				<!-- delivery projects start -->
				<div class="delivery_project">
				    <div class="new-del-project">
				        <div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;"> <div class="lable_line">
								<img src="img/Gray-Head-line.png" class="northimage">
							</div>   
						    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Delivered Projects</h1>
							
							<div class="liveHead2 padding-project" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
								<!--<p>In the hustle and bustle of the busy city, JP Infra offers a thoughtful lifestyle for its residents to enjoy ultra-modern amenities with state-of-the-art technology, sustainable development, and lush-green landscapes.</p>   -->
							</div>
							<div class="clearfix"></div>
					    </div>
					<!-- slider start-->
					<div class="project-ongoing-slider responsivepro">
							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Unity.jpg" alt="Unity Towers">
									<div class="media_hveff_pro"><h5>LIVE LIFE THE ELEGANT WAY WITH JP INFRA</h5>
		                                <p class="proj_hvtext">
		                                   1, 2 BHK Apartment<br>
		                                    Terrace garden<br>
		                                    Banquet Hall<br>
		                                    Separate parking tower<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Unity Towers</h3>
									</div>
									<div>
										<p>Worli</p>
									</div>
									<!--btn-->
			                        <div class="project-ongoing-button">
			                            <a href="http://www.jpinfra.com/unity-tower.html" target="blank">
			                                <div class="know-text-project-ongoing">
			                                    <h5>Know More</h5>
			                                </div>
			                            </a>
			                             <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/JP-Decks.jpg" alt="JP-Decks">
									<div class="media_hveff_pro"><h5>AVANT-GARDE HOMES FOR AVANT-GARDE LIFESTYLE</h5>
		                                <p class="proj_hvtext">
		                                    Luxurious 2 & 3 BHK Apartments<br>
		                                    Swimming pool<br>
		                                    Kids Play Area<br>
		                                    Amphitheatre<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>JP Decks</h3>
									</div>
									<div>
										<p>Goregaon</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Chalet-Amar.jpg" alt="Chalet Amar">
									<div class="media_hveff_pro"><h5>CH TEAU DE COMFORT AT JUHU</h5>
		                                <p class="proj_hvtext">
		                                    5 BHK<br>
		                                    Super Spacious Apartments<br>
		                                    Terrace garden<br>
		                                    Signature suites<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Chalet Amar</h3>
									</div>
									<div>
										<p>Juhu</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                   <a href="http://www.jpinfra.com/chalet-amar/" target="blank">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                    </a>
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Celeste.jpg" alt="Celeste">
									<div class="media_hveff_pro"><h5>FUTURISTIC LIFESTYLE</h5>
		                                <p class="proj_hvtext">
		                                    Spanish-Styled 1 & 2 BHK Homes<br>
		                                    Bio Diverse Gardens<br>
		                                    Library Café<br>
		                                    Kids Play Area<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>North Celeste</h3>
									</div>
									<div>
										<p>Mira Road</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Atria.jpg" alt="Atria">
									<div class="media_hveff_pro"><h5>REDEFINING INTEGRATED LIVING</h5>
		                                <p class="proj_hvtext">
		                                   1 & 2 BHK luxurious Apartments<br>
		                                    Club House<br>
		                                    Landscaped Gardens<br>
		                                    24 Hour Water Supply<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Atria</h3>
									</div>
									<div>
										<p>North Garden City, Mira Road</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                   <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                    </a>
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Estella.jpg" alt="Estella">
									<div class="media_hveff_pro"><h5>LUXURY BEYOND 4 WALLS</h5>
		                                <p class="proj_hvtext">
		                                    1,2,3 BHK Apartments<br>
		                                    Indoor games<br>
		                                    Sun-Deck Spa<br>
		                                    Cafe &amp; library<br>
		                                    Banquet Hall<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Estella</h3>
									</div>
									<div>
										<p>North Garden City, Mira Road</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                   <a href="https://www.jpinfra.com/jp-north/gardencity/" target="blank">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                                   </a>
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="project-ongoing">
								<div class="projectongoingimg columews">
									<img src="img/project/delivered/Dreamland.jpg" alt="Dreamland">
									<div class="media_hveff_pro"><h5>A SLICE OF PARADISE</h5>
		                                <p class="proj_hvtext">
		                                   1, 2, 3 BHK Spacious Apartments<br>
		                                    Parking Space<br>
		                                    24 Hr Backup Electricity<br>
		                                    Water supply<br>
		                                </p>
		                            </div>
								</div>
								<div class="ongoingproject-txt">
									<div class=slider-txt>
										<h3>Dream Land Apartment</h3>
									</div>
									<div>
										<p>Khar</p>
									</div>
									<!--btn-->
			                               <div class="project-ongoing-button">
			                                    <div class="know-text-project-ongoing">
			                                        <h5>Know More</h5>
			                                    </div>
			                 
			                                    <div class="know-arrow-project-ongoing">
			                                        <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">
			                                    </div>
			                                    <div class="clearfix"></div>
			                                </div>
									<div class="clearfix"></div>	
								</div>
								<div class="clearfix"></div>
							</div>
							<!--<div class="project-ongoing">-->
							<!--	<div class="projectongoingimg columews">-->
							<!--		<img src="img/project/delivered/Glow.jpg" alt="glow">-->
							<!--		<div class="media_hveff_pro"><h5>MI CASA | LA CASA PERFECTA</h5>-->
		     <!--                           <p class="proj_hvtext">-->
		     <!--                               1 BHK<br>-->
		     <!--                               CCTV Cameras<br>-->
		     <!--                               24 Hr Backup Electricity<br>-->
		     <!--                               24 Hr Water Supply<br>-->
		     <!--                           </p>-->
		     <!--                       </div>-->
							<!--	</div>-->
							<!--	<div class="ongoingproject-txt">-->
							<!--		<div class=slider-txt>-->
							<!--			<h3>Glow</h3>-->
							<!--		</div>-->
							<!--		<div>-->
							<!--			<p>MI CASA | LA CASA PERFECTA</p>-->
							<!--		</div>-->
									<!--btn-->
			    <!--                           <div class="project-ongoing-button">-->
			    <!--                                <div class="know-text-project-ongoing">-->
			    <!--                                    <h5>Know More</h5>-->
			    <!--                                </div>-->
			                 
			    <!--                                <div class="know-arrow-project-ongoing">-->
			    <!--                                    <img src="img/Project Button Arrow.png" class="know-arrow-north" alt="arrow">-->
			    <!--                                </div>-->
			    <!--                                <div class="clearfix"></div>-->
			    <!--                            </div>-->
							<!--		<div class="clearfix"></div>	-->
							<!--	</div>-->
							<!--	<div class="clearfix"></div>-->
							<!--</div>-->
							
						</div>
						
					<!-- slider ends -->
					    <div class="clearfix"></div>
				    </div>	
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<!-- delivery projects ends -->

				<!--testimonials starts  -->
			<div class="testimonial_main">
			    <div class="new-del-project padd-test">
			        <div class="lable_line">
					<img src="img/Gray-Head-line.png" class="northimage">
				</div>
				<div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
					<p class="center_para">Cherished customers</p>   
				</div>
				<div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
					<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Testimonials</h1>
					<div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
						<p>The passion and panache with which JP Infra approaches and delivers its projects is reflected in our projects and by our happy customers.</p>   
					</div>

					<div class="test-slider-main">
						<div class="test-slider-div">
							<div class="test-inner">
								<div class="test-img"><img src="img/project/testimonial/Charu.png" alt="Charu"></div>
								<div class="test-text"><p>"I like everything. The concept is very good. Construction-wise, the height of the flat and everything is the same as what they had shown us."</p>
									<h6>Charu</h6>
							</div>
							</div>
						</div>
						<div class="test-slider-div">
							<div class="test-inner">
								<div class="test-img"><img src="img/project/testimonial/Nitin.png" alt="Nitin"></div>
								<div class="test-text"><p>"JP Infra is fulfilling the promises which they made to the customers. I am totally satisfied."</p>
									<h6>Nitin</h6>
							</div>
							</div>
						</div>
						<div class="test-slider-div">
							<div class="test-inner">
								<div class="test-img"><img src="img/project/testimonial/Bijal.png" alt="Bijal"></div>
								<div class="test-text"><p>"This is what we call as life!"</p>
									<h6>Bijal</h6>
							</div>
							</div>
						</div>
						<div class="test-slider-div">
							<div class="test-inner">
								<div class="test-img"><img src="img/project/testimonial/Nitin.png" alt="Nitin"></div>
								<div class="test-text"><p>"JP Infra is fulfilling the promises which they made to the customers. I am totally satisfied."</p>
									<h6>Nitin</h6>
							</div>
							</div>
						</div>
					</div>



					
	<!-- 			<div class="testimonial-slider-main">	
					<div class="jp-testimonial">
					    <div class="testi-text">
					        <div class="left-comma"><img src="img/project/testimonial/left-inverted-comma.png" alt="left-inverted-comma"></div>
	    				    <p> Very good  project and Jp Infra has delivered as per expectation </p>
	    				    <div class="right-comma"><img src="img/project/testimonial/right-inverted-comma.png" alt="right-inverted-comma"></div>
	    				    <div class="clearfix"></div>
					    </div>
					    <div class="testi-nameby">
					        <h6>Dhiraj Patil</h6>
					    </div>
	    				<div class="clearfix"></div>    
					</div>
					<div class="jp-testimonial">
					    <div class="testi-text">
					        <div class="left-comma"><img src="img/project/testimonial/left-inverted-comma.png" alt="left-inverted-comma"></div>
	    				    <p> I have never seen such a wonderful project in Mira road or any other place </p>
	    				    <div class="right-comma"><img src="img/project/testimonial/right-inverted-comma.png" alt="right-inverted-comma"></div>
	    				    <div class="clearfix"></div>
					    </div>
					    <div class="testi-nameby">
					        <h6>Santosh Jadhav</h6>
					    </div>
	    				<div class="clearfix"></div>    
					</div>
					<div class="jp-testimonial">
					    <div class="testi-text">
					        <div class="left-comma"><img src="img/project/testimonial/left-inverted-comma.png" alt="left-inverted-comma"></div>
	    				    <p>It is way better than expected and I am confident it will get better in the future as a project is a progressed</p>
	    				    <div class="right-comma"><img src="img/project/testimonial/right-inverted-comma.png" alt="right-inverted-comma"></div>
	    				    <div class="clearfix"></div>
					    </div>
					    <div class="testi-nameby">
					        <h6>Sanjay Patil</h6>
					    </div>
	    				<div class="clearfix"></div>    
					</div>
					<div class="jp-testimonial">
					    <div class="testi-text">
					        <div class="left-comma"><img src="img/project/testimonial/left-inverted-comma.png" alt="left-inverted-comma"></div>
	    				    <p>It is an upper-level experience offered by Jp Infra and it is a worthy investment</p>
	    				    <div class="right-comma"><img src="img/project/testimonial/right-inverted-comma.png" alt="right-inverted-comma"></div>
	    				    <div class="clearfix"></div>
					    </div>
					    <div class="testi-nameby">
					        <h6>Dhanshree Nair</h6>
					    </div>
	    				<div class="clearfix"></div>    
					</div>
					<div class="jp-testimonial">
					    <div class="testi-text">
					        <div class="left-comma"><img src="img/project/testimonial/left-inverted-comma.png" alt="left-inverted-comma"></div>
	    				    <p>It is one number project in mira road offering top facilities and Jp Infra has fulfilled the promise they made</p>
	    				    <div class="right-comma"><img src="img/project/testimonial/right-inverted-comma.png" alt="right-inverted-comma"></div>
	    				    <div class="clearfix"></div>
					    </div>
					    <div class="testi-nameby">
					        <h6>Nitin</h6>
					    </div>
	    				<div class="clearfix"></div>    
					</div>
				</div>	 -->
					<div class="clearfix"></div>
				</div>
			    </div>
				
			</div>
			
			<!-- testimonials ends -->

				<!-- above testimonials start -->
				<div class="abovefooter_main proj-property">
					<div class="container_aks bg-3 text-center wow fadeIn" data-wow-duration="4s" style="visibility: visible; animation-duration: 4s; animation-name: fadeIn;">    
						<h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Looking for a property,<br> but not sure where to start?</h1>
						<div class="liveHead2" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
							<p>Let us help. Speak to our property expert today.</p>   
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
				<!-- above testimonials ends -->

				<script src="js/slickminjscode.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js"></script>

				<script>
	                $('.responsivepro').slick({
					dots: false,
					arrow: true,
					prevArrow:'<button type="button" class="prev-button"></button>',
			        nextArrow:'<button type="button" class="next-button"></button>',
					infinite: true,
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

				
				
				$('.test-slider-main').slick({
				dots: false,
				arrow: true,
				prevArrow:'<button type="button" class="prev-button right-arrow"></button>',
		        nextArrow:'<button type="button" class="next-button right-arrow"></button>',
				infinite: true,
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
						prevArrow:'<button type="button" class="prev-button test-right-arrow"></button>',
		        		nextArrow:'<button type="button" class="next-button test-left-arrow"></button>',
						infinite: true,
						dots: false
					}
					},
					{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						arrow: true,
						prevArrow:'<button type="button" class="prev-button test-right-arrow"></button>',
		        		nextArrow:'<button type="button" class="next-button test-left-arrow"></button>',
						slidesToScroll: 1
					}
					},
					{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						arrow: true,
						prevArrow:'<button type="button" class="prev-button test-right-arrow"></button>',
		       			nextArrow:'<button type="button" class="next-button test-left-arrow"></button>',
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