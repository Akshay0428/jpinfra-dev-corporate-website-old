<?php include 'header.php';?>

<div class="logo-banner">
	      <a href="https://www.dotwisedigital.com/jpuat">
            <img src="img/JP Infra Logo.png">
        </a>
	   </div>
<div class="contact_banner">
    <img src="img/Contact-us-banner.jpg" alt="contact_banner" class="contact_desk">
    <img src="img/jp_contact_mobile_banner.jpg" alt="contact_image" class="contact_mob">
</div>
<div class="contact_frm"> 
   <div class="contact_line"></div>
    <h1 data-aos="fade-up" data-aos-duration="3000">Find Us Here</h1>

    <div class="contact_finfo">
        <div class="contact_linfo">
            <h5><img src="img/add.png" alt="icon" class="contact_ifcon">JP Infra Mumbai Pvt. Ltd.</h5><p class="texxxt">4th Floor, Viraj Towers, Western Express Highway, Near WEH Metro Station, Andheri(E), Mumbai-400093</p>
            <p class="texxt"><img src="img/email.png" alt="icon" class="contact_ifcon">sales@jpinfra.com</p>
            <p class="texxt"><img src="img/phone.png" alt="icon" class="contact_ifcon">022 42415678</p>
            <p class="texxt"><img src="img/fax.png" alt="icon" class="contact_ifcon">022 42415679</p>
        </div>
        <div class="contact_rinfo">
            <form name="myform" action="" method="post" name="formdata">
                <h4>HAVE A QUESTION?</h4>
                <p class="texxt"> Ask Us Here</p>
                <!--<input type="hidden" name="Brand" class="form-control" value="M3M" id="brand">-->
                <!--<input type="hidden" name="Category" class="form-control" value="Commercial" id="category" required>-->
                <input type="text" placeholder="Name"  id="insightly_firstName" class="form-control" name="insightly_firstName" required>
                <input type="email" placeholder="Email" id ="insightly_Email" class="form-control" name="insightly_Email" required>
                <input type="text" placeholder="Phone" id="insightly_Phone" class="form-control" name="insightly_Phone" minlength="10" maxlength="10" required>
                <input type="text" name="insightly_Message" placeholder="Message" class="form-control frmSubmit" name="Message" id="insightly_Message" required>
                <br>
                <!--btn-->
	            <div class="project-property-button contact-btn">
	                <div class="know-text-project-property">
	                    <button type="submit" id="button_enquiry_desktop" onclick='myfunction();return(false);'><h5>Know More</h5></button>
	                </div>
	                <div class="know-arrow-project-property">
	                    <img src="img/Project Button Arrow.png" class="know-arrow-property" alt="arrow">
	                </div>
	                <div class="clearfix"></div>
	            </div>
	            <div class="clearfix"></div>
            </form>
        </div>
<!--         <div class="contact_linfo mobile_cont">
            <h5><img src="img/add.png" alt="icon" class="contact_ifcon">JP Infra Mumbai Pvt. Ltd.</h5><p class="texxxt">4th Floor, Viraj Towers, Western Express Highway, Near WEH Metro Station, Andheri(E), Mumbai-400093</p>
            <p class="texxt"><img src="img/email.png" alt="icon" class="contact_ifcon">sales@jpinfra.com</p>
            <p class="texxt"><img src="img/phone.png" alt="icon" class="contact_ifcon">022 42415678</p>
            <p class="texxt"><img src="img/fax.png" alt="icon" class="contact_ifcon">022 42415679</p>
        </div> -->
        <div class="clearfix"></div>
    </div>
</div>

<div class="contact_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7542713413377!2d72.85377001421337!3d19.118433055607074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c82d9321e4a7%3A0x9e3705d14d40f385!2sJP%20Infra%20Mumbai%20Private%20Limited!5e0!3m2!1sen!2sin!4v1581407877291!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe><div class="clearfix"></div>
</div>

<script src="js/contactfrm.js"></script>
<?php include 'footer.php';?>