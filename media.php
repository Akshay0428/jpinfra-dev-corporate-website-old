<?php include 'header.php';?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css">

<style>
.glimpse-main {
    background-color:#e1e1e1;
    padding: 6px 153px;
    margin-top: 0px!important;
}
/**********************
slick slider
***********************/

.slick-dots li button {
    font: 0/0 a;
    text-shadow: none;
    color: #000000e6;
    background-color: #fff!important;
    border: none;
    width: 19px!important;
    height: 18px!important;
    border-radius: 50%;
}
.slick-dots {
    text-align: center;
    margin: 0 0 0px 0;
    padding: 15px;
}
.slide-media .slick-dots {
    margin: 0 0 20px 0;
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
.prev-button-home {
    color: #999;
    position: absolute;
    top: 27%;
    left: -50px;
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
    top: 27%;
    font-size: 1.5em;
    background-image: url(img/arrow_1.png);
    width: 28px;
    height: 18px;
    border: none;
    background-color: transparent;
    outline: none !important;
    left: 103%;
}
.next-button-home :hover {
    cursor: pointer;
    color: black;
}
@media only screen and (max-width:768px){
    .glimpse-main {
        background-color:#e1e1e1;
        width: 100%;
        padding: 0;
        margin-top: 0px!important;
        padding-top: 90px;
    }
button.next-button-home.slick-arrow {
    display: none !important;
}
button.prev-button-home.slick-arrow {
    display: none !important;
}
}
</style>
<!-- media start -->
    <div class="logo-banner">
    	<a href="https://www.dotwisedigital.com/jpuat">
            <img src="img/JP Infra Logo.png">
        </a>
    </div>
    <div class="clearfix"></div>


    <!-- media bg start-->
    <div class="media-background">
        <h1>Media</h1>
        <div class="media-white-sec"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <p>At JP Infra, we believe in showcasing our work as well as the fun we have. Here are the highlights of our project launches, the thoughts and opinions of the brains at JP Infra, how the outside world sees us and what we, as a team, are actually like – children at heart. Northern Light, our quarterly newsletter, talks extensively on how JP Infra has largely contributed to the growth and rise of Mira Road.  </p>
        </div>
    </div>
    <!-- media bg end -->

<!-- glimpse jp desktop start -->
 <div class="glimpse-main marg">    
    <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Glimpses of JP Infra</h1>


          <!-- slider desktop start -->
<div class="sep">
            <div class="new slide-media">
<!--                 <div class="image-hover img-shadow-1 sss">
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
                </div> -->
                <div class="image-hover img-shadow-1 sss">
                    <!-- <img src="img/media/Launch-Of-Clubhouse.jpg" alt="Launch-Of-Clubhouse"> -->
                    <iframe width="100%" height="185px" src="https://www.youtube.com/embed/m3yl55GEVEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5 class="txt-upper">Launch Of Clubhouse</h5>
                    <p>JP Infra’s luxurious clubhouse is magical and so the name “Khul Ja Sim Sim”</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <!-- <img src="img/media/Launch-Of-Hotcake.jpg" alt="Launch-Of-Hotcake"> -->
                    <iframe width="100%" height="185px" src="https://www.youtube.com/embed/tpUYth6v1wY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5 class="txt-upper">Launch Of Codename Hotcake</h5>
                    <p>Codename Hotcake was launched with hot opportunities, hot space, hot amenities and these were all grabbed by our hot home buyers</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="100%" height="185px" src="https://www.youtube.com/embed/1faplVFYv7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5 class="txt-upper">Latest Construction Update</h5>
                    <p>Have a look at how JP North is bringing your dreams to life.</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                  <a  href="img/New Newsletter_ 17 March 2020_Final_CC.pdf" target="_blank">
                    <img src="img/media/Mira-road.jpg" alt="Mira-road" class="m_hide"></a>
                    <img src="img/media/New-Newsletter-4th-Edition-mob.jpg" alt="Mira-road" class="d_hide"></a>
                    <h5 class="txt-upper">North - Newsletter 4th Edition</h5>
                    <p>Catch up on the latest events in JP North through this Newsletter</p>
                </div>
                <!-- <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/nL0aKmi_U6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    <h5>Women's Day 2020</h5>
                    <p>A glimpse of what our leaders think about who “She” is</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/7AX1_RNJkd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                    <h5>Homebuyers Given Financial Creditors Status</h5>
                    <p>We welcome the decision of SC on IBC 2018 amendment which granted the status of “Financial Creditors” to homebuyers</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                    <iframe width="245px" height="185px" src="https://www.youtube.com/embed/3_gy342pBqI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5>Gudi Padwa Offer- CNBZ Awaaz</h5>
                    <p>The celebration of Gudi Padwa with smiles around and excited homebuyers who received cash vouchers and Godrej Interio modular kitchens</p>
                </div> -->
                <div class="image-hover img-shadow-1 sss">
                   <iframe width="100%" height="185px" src="https://www.youtube.com/embed/o3qLmsuw118" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5 class="txt-upper">Zee Business Property Plus</h5>
                    <p>JP Infra features on Zee Business Property Plus, introducing JP North’s 1, 2, & 3 BHK apartments with numerous amenities</p>
                </div>
                <div class="image-hover img-shadow-1 sss">
                   <iframe width="100%" height="185px" src="https://www.youtube.com/embed/ZZhHCN0laBk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h5 class="txt-upper">Codename Openstreets Launch</h5>
                    <p>Life at Codename Openstreets is boundless, featuring the European Lifestyle to 2000+ interested buyers. </p>
                </div>
            </div>
            <div class="clearfix"></div> 
          </div>
        <!-- desktop end -->
        <div class="clearfix"></div> 
    </div>
    <!-- glimpse jp desktop ends -->


    <!-- glimpse jp mobile start -->
<!--     <div class="media_glimpse-main mobile">

        <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">media</h1>
      
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

<!-- media close -->

<!-- article start -->

<div class="media_art marg">
     <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Articles</h1>
<!--     <div class="contact_line"></div> -->

    <div class="media_article">

        <div class="row_article article-responsive">

            <div class="column_article">
                <a href="https://www.99acres.com/articles/mira-road-stands-as-one-of-the-most-preferred-locations-in-mumbai.html" target="_blank">
                    <img src="img/99_acre.jpg" alt="99acres" style="width:100%">
                </a>
            </div>

            <div class="column_article">
                <a href="https://accommodationtimes.com/living-the-integrated-way/" target="_blank">
                    <img src="img/accommodationtimes.jpg" alt="accomodatiion" style="width:100%">
                </a>
            </div>

            <div class="column_article">
                <a href="http://www.afternoondc.in/epaper_pdf/2018111620111.pdf" target="_blank">
                    <img src="img/The-Afternoon.jpg" alt="despatch & courier" style="width:100%">
                </a>
            </div>

            <div class="column_article">
                <a href="https://www.business-standard.com/article/news-ani/projects-adjacent-to-highways-attracting-mumbai-homebuyers-118090600372_1.html" target="_blank">
                    <img src="img/Business-Standard.jpg" alt="BS" style="width:100%">
                </a>
            </div>

            <div class="column_article">
                <!--<a href="">-->
                    <img src="img/2-business.jpg" alt="B2B" style="width:100%">
                <!--</a>-->
            </div>

            <div class="column_article">
                <a href="https://www.business-standard.com/article/economy-policy/north-mumbai-will-be-the-epicentre-of-realty-infra-growth-experts-117110500176_1.html" target="_blank">
                    <img src="img/business-standard-logo.jpg" alt="business standard" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://www.businessworld.in/article/North-Mumbai-to-be-epicentre-of-realty-infra-growth-Experts/05-11-2017-130553/" target="_blank">
                    <img src="img/Business-world.jpg" alt="business world" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.youtube.com/watch?v=3_gy342pBqI&feature=youtu.be" target="_blank">
                    <img src="img/CNBC-Awaaz.jpg" alt="cnbc" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://buisnessnewstrends.blogspot.com/2017/01/step-closer-to-your-dream-home-with-jp.html" target="_blank">
                    <img src="img/daily-news.jpg" alt="daily news" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.entrepreneur.com/article/306229#_=_" target="_blank">
                    <img src="img/entrepreneur-india-logo.jpg" alt="enterprenure" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.financialexpress.com/industry/north-mumbai-to-be-epicentre-of-realty-infrastructure-growth-say-experts/920373/" target="_blank">
                    <img src="img/financialexpress.jpg" alt="financial express" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.indiainfoline.com/article/news-sector-real-estate/jp-infra-announces-master-planned-neighborhood-%E2%80%98north%E2%80%99-at-mira-road-116100300099_1.html" target="_blank">
                    <img src="img/IIFL-Logo.jpg" alt="IIFL" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.indiatoday.in/pti-feed/story/biz-realty-bcm10-1253195-2018-06-07" target="_blank">
                    <img src="img/India-today.jpg" alt="india today" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.indiatoday.in/pti-feed/story/biz-realty-bcm10-1253195-2018-06-07" target="_blank">
                    <img src="img/India-today.jpg" alt="india today red" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.indiainfoline.com/article/news-top-story/jp-infra-announces-largest-project-jp-north-in-mira-road-115082500669_1.html" target="_blank">
                    <img src="img/IIFL-Logo.jpg" alt="IIFL" style="width:100%">
                </a>
            </div>
            <div class="column_article">
                <a href="https://www.indiatoday.in/pti-feed/story/biz-realty-bcm10-1253195-2018-06-07" target="_blank">
                    <img src="img/India-today.jpg" alt="india today" style="width:100%">
                </a>
            </div>
            <div class="column_article">
                <a href="https://www.khaleejtimes.com/business/local/jp-infra-displays-mumbai-projects-to-dubai-buyers" target="_blank">
                    <img src="img/khaleej-times.jpg" alt="khaleej times" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://epaperlokmat.in/Archive/epapernew.php?articleid=LOK_HMUM_20180316_1_3&arted=Hello%20Mumbai&width=375px" target="_blank">
                    <img src="img/Lokmat.jpg" alt="lokmat" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://epaper.loksatta.com/1070692/indian-express/14-%2001-2017#page/19/2" target="_blank">
                    <img src="img/Loksatta.jpg" alt="loksatta" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://epaper2.mid-day.com/epaper/27-12-2019-252-archive-edition-Mumbai-Page-51.html" target="_blank">
                    <img src="img/mid-day_logo.jpg" alt="mid-day" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.moneycontrol.com/news/business/real-estate/jone-lang-lasalle-sees-north-mumbai-as-epicentre-of-realty-infra-growth-2429425.html" target="_blank">
                    <img src="img/Money-control.jpg" alt="money control" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://mumbainewsnetwork.blogspot.com/2017/01/solemnize-makar-sankrati-with-jp-infra_11.html" target="_blank">
                    <img src="img/mumbai-news-network.jpg" alt="mumbai news network" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <!--<a href="">-->
                    <img src="img/navbharat.jpg" alt="naav bharat" style="width:100%">
                <!--</a>-->
            </div>
            
            <div class="column_article">
                <a href="http://www.indiannewsandtimes.com/2017/01/11/56383event-would-be-all-around-kite-making-nail-art-tattoo-artist-street-magic-mini-games-special-makar-sankranti-snacks-and-many-more" target="_blank">
                    <img src="img/IndianNewsAndTimes.jpg" alt="india news and time" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <!--<a href="">-->
                    <img src="img/news-barons.jpg" alt="news barons" style="width:100%">
                <!--</a-->
            </div>
            
            <div class="column_article">
                <a href="http://www.newsnow.in/article/project-adjacent-to-highways-attracting-mumbai-homebuyers" target="_blank">
                    <img src="img/newsnow.jpg" alt="news now" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://orientpublication.wordpress.com/2017/01/06/step-closer-to-your-dream-home-with-jp-infra-home-loan-mela/" target="_blank">
                    <img src="img/orientpublication.jpg" alt="orient publication" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.moneycontrol.com/news/business/economy/residential-units-worth-over-rs-10000-crore-await-buyers-around-western-express-highway-2585265.html" target="_blank">
                    <img src="img/Money-control.jpg" alt="money control" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.outlookindia.com/newsscroll/residential-units-worth-over-rs-10k-cr-await-buyers-around-weh/1325148" target="_blank">
                    <img src="img/Outlook.jpg" alt="outlook" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://epaper.saamana.com/imageview_5838_121316928_4_71.html" target="_blank">
                    <img src="img/saamana-logo.jpg" alt="saamna" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://timesofindia.indiatimes.com/business/india-business/north-mumbai-to-be-epicentre-of-realty-infra-growth-experts/articleshow/61515810.cms" target="_blank">
                    <img src="img/Timesofindia.jpg" alt="the times of india" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://timesofindia.indiatimes.com/business/india-business/residential-units-worth-over-rs-10000-crore-await-buyers-around-western-express-highway/articleshow/64495288.cms?utm_campaign=andapp&utm_medium=referral&utm_source=whatsapp.com" target="_blank">
                    <img src="img/TOI.jpg" alt="TOI" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://marathi.webdunia.com/article/marathi-current-news/udatrang-2017-117011100027_1.html" target="_blank">
                    <img src="img/webdunia.jpg" alt="web dunya" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="http://businesswebnews.blogspot.com/2017/03/this-gudi-padwa-real-estate-markets.html" target="_blank">
                    <img src="img/WebNews.jpg" alt="web news" style="width:100%">
                </a>
            </div>
            
            <div class="column_article">
                <a href="https://www.youtube.com/watch?v=o3qLmsuw118&feature=youtu.be" target="_blank">
                    <img src="img/zee-business.jpg" alt="zee business" style="width:100%">
                </a>
            </div>
            <div class="column_article">
                <a href="https://www.zeebiz.com/india/news-just-for-you-5000-houses-waiting-for-homebuyers-around-mumbai-weh-50134" target="_blank">
                    <img src="img/zee-business.jpg" alt="zee business" style="width:100%">
                </a>
            </div>
            <div class="column_article">
                <a href="https://www.zeebiz.com/agencies/north-mumbai-to-be-epicentre-of-realty-infra-growth-experts-30383" target="_blank">
                    <img src="img/zee-business.jpg" alt="zee business" style="width:100%">
                </a>
            </div>
            
        </div>
    </div>
</div>

<!-- article end -->

<!-- new slater -->
<div class="media_news padding-media">
     <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Newsletters</h1>
    <!-- <div class="contact_line"></div> -->

    <div class="media_sletters">

        <div class="row_news news-responsive">

            <div class="column_news">
                <img src="img/newssltter1.jpg" alt="Trulli" style="width:100%" class="news_img">
                <div class="media_hveff">
                    <p class="media_hvtext"><a href="http://www.jpinfra.com/images/media/JP-North-Newsletter-1st-Edition-April-2017.pdf" class="meext" target="_blank">North - Newsletter 1st Edition</a></p>
                </div>
            </div>

            <div class="column_news">
                <img src="img/newsletter3.jpg" alt="Trulli" style="width:100%" class="news_img">
                <div class="media_hveff">
                    <p class="media_hvtext"><a href="http://www.jpinfra.com/images/media/JP-North-Newsletter-2nd-Edition-June-2018.pdf" class="meext" target="_blank">North - Newsletter 2nd Edition</a></p>
                </div>
            </div>
            
            <div class="column_news">
                <img src="img/newssletter2.jpg" alt="3rd" style="width:100%" class="news_img">
                <div class="media_hveff">
                    <p class="media_hvtext"><a href="http://www.jpinfra.com/images/media/JP-North-Newsletter-3rd-Edition-December-2018.pdf" class="meext" target="_blank">North - Newsletter 3rd Edition</a></p>
                </div>
            </div>

            <div class="column_news">
                <img src="img/Newsletter-5.jpg" alt="4th" style="width:100%" class="news_img">
                <div class="media_hveff">
                    <p class="media_hvtext"><a href="img/New Newsletter_ 17 March 2020_Final_CC.pdf" class="meext" target="_blank">North - Newsletter 4rd Edition</a></p>
                </div>
            </div>

        </div>

        
        
        <div class="clearrb"></div>
    </div>
    <div class="clearrb"></div>
</div>

<!-- close news slater -->

<!-- event start -->
<div class="media_event padding-media" id="mediapage_link">
     <div class="lable_line"><img src="img/Gray-Head-line.png" class="northimage"></div>
    <h1 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">Workplace Events</h1>
    <!-- <div class="contact_line"></div> -->

    <div class="media_evimg">
        <div class="row event-responsive">

            <div class="column">
                <figure>
                    <img src="img/event4.jpg" alt="Gudi Padwa Celebration @ JP North" style="width:100%">
                    <figcaption>
                        Gudi Padwa Celebration @ JP North
                        <p class="fig_txt">October 4, 2019</p>
                    </figcaption>
                </figure>
            </div>

            <div class="column">
                <figure>
                    <img src="img/event2.jpg" alt="Diwali Celebrations" style="width:100%">
                    <figcaption>
                        Diwali Celebrations
                        <p class="fig_txt">March 4, 2019</p>
                    </figcaption>
                </figure>
            </div>

            <div class="column">
                <figure>
                    <img src="img/event6.jpg" alt="Christmas Celebration" style="width:100%">
                    <figcaption>
                        Christmas Celebration- Joy of Giving
                        <p class="fig_txt">December 25, 2018</p>
                    </figcaption>
                </figure>
            </div>

            <div class="column">
                <figure>
                    <img src="img/event8.jpg" alt="National Safety Week @ JP North" style="width:100%">
                    <figcaption>
                       National Safety Week @ JP North
                        <p class="fig_txt">November 10, 2018</p>
                    </figcaption>
                </figure>
            </div>

            <div class="column">
                <figure>
                    <img src="img/event10.jpg" alt="JP Udtarang" style="width:100%">
                    <figcaption>
                        JP Udtarang
                        <p class="fig_txt"> January 14, 2017</p>
                    </figcaption>
                </figure>
            </div>

            <!--<div class="column">-->
            <!--    <figure>-->
            <!--        <img src="img/event3.jpg" alt="#MyHomeMyGanesha" style="width:100%">-->
            <!--        <figcaption>-->
            <!--            MyHomeMyGanesha-->
            <!--            <p class="fig_txt">September 05, 2016</p>-->
            <!--        </figcaption>-->
            <!--    </figure>-->
            <!--</div>-->
            
            <!--<div class="column">-->
            <!--    <figure>-->
            <!--        <img src="img/event7.jpg" alt="Pottery workshop- Connect to Art" style="width:100%">-->
            <!--        <figcaption>-->
            <!--            Pottery workshop- Connect to Art-->
            <!--            <p class="fig_txt"> October 4, 2019</p>-->
            <!--        </figcaption>-->
            <!--    </figure>-->
            <!--</div>-->
            
            <!--<div class="column">-->
            <!--    <figure>-->
            <!--        <img src="img/event1.jpg" alt="JP Infra Christmas 2016" style="width:100%">-->
            <!--        <figcaption>-->
            <!--            JP Infra Christmas 2016-->
            <!--            <p class="fig_txt">December 23, 2016</p>-->
            <!--        </figcaption>-->
            <!--    </figure>-->
            <!--</div>-->
            
            <!--<div class="column">-->
            <!--    <figure>-->
            <!--        <img src="img/event9.jpg" alt="Twins Day Celebration" style="width:100%">-->
            <!--        <figcaption>-->
            <!--            Twins Day Celebration-->
            <!--            <p class="fig_txt">June 02, 2018</p>-->
            <!--        </figcaption>-->
            <!--    </figure>-->
            <!--</div>-->
            
            <!--<div class="column">-->
            <!--    <figure>-->
            <!--        <img src="img/event5.jpg" alt="WhatIsYourFreedom" style="width:100%">-->
            <!--        <figcaption>-->
            <!--            WhatIsYourFreedom-->
            <!--            <p class="fig_txt">August 15, 2016</p>-->
            <!--        </figcaption>-->
            <!--    </figure>-->
            <!--</div>-->

        </div>
   
        
    

    </div>  

</div>

<!-- event close -->

	<!-- above testimonials start -->
			<div class="abovefooter_main">
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

<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>


<script>

$('.event-responsive').slick({
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


<script>
$('.news-responsive').slick({
    dots: false,
    arrow: true,
    prevArrow:'<button type="button" class="prev-button-home"></button>',
          nextArrow:'<button type="button" class="next-button-home"></button>',
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
            arrow: true,
            dots: true,
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
            dots: true,
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

<script>

    $('.article-responsive').slick({
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

</script>

<!-- media slider -->
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
            dots: true,
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
            dots: true,
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


<?php include 'footer.php';?>
