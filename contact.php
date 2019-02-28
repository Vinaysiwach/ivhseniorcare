<?php
    $ec_page_title  = "Contact us | ivhseniorcare.com";
    $ec_page_desc = " Please take a minute to fill out the form below.You can also email or call us. ";
    require_once('header.php');
    ?>
	 <div class="row container-kamn">
     <img src="images/resource/Contact-US-Banner (1).jpg" class="blog-post" alt="ElderCare in India" align="right" width="100%" height=""> 
    </div>
	<!-- Home Design Inner Pages -->
	<!-- Inner Pages Main Section -->
	<section class="ulockd-contact-page">
		<div class="container">
		<div class="row">
		<div class="col-lg-6 col-lg-offset-3 text-center">
		<div class="ulockd-srvc-title hvr-float-shadow">
		<h2 class="">Contact Details</h2>
		<p></p>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-3">
		<div class="ulockd-ohour-info style2 mb305-xsd text-center">
		<div class="ulockd-icon text-thm2"><span class="fa fa-envelope"></span></div>
		<div class="ulockd-info">
		<h3>Mail Us</h3>
		<p class="ulockd-addrss"><strong>Email:</strong> info@ivhseniorcare.com</p>
		</div>
		</div>
		<div class="ulockd-ohour-info style2 text-center">
		<div class="ulockd-icon text-thm2"><span class="fa fa-phone"></span></div>
		<div class="ulockd-info">
		<h3>Call Us</h3>
		<p class="ulockd-addrss">+91 882-653-6161, 965-440-6114</p>
		</div>
		</div>
		<div class="ulockd-ohour-info style2 text-center">
		<div class="ulockd-icon text-thm2"><span class="fa fa-map-signs"></span></div>
		<div class="ulockd-info">
		<h3>Corporate Office</h3>
		<p>1st Floor, A-3, Block-A, Sector-4, Noida, Uttar Pradesh 201301</p>
		</div>
		</div>
		</div>		
		<div class="col-md-9 ulockd-mrgn1260">
		<div class="ulockd-contact-form style2">
		<form id="contact_form" name="contactform" class="contact-form" method="post">
		<div class="messages"></div>
		<div class="row">
		<div class="col-md-3">
		<div class="form-group">
       	 <input name="first_name" class="form-control ulockd-form-fg required" placeholder="First name" required="required" data-error="Name is required." type="text">
   	    <div class="help-block with-errors"></div>
		</div>
		</div>
		<div class="col-md-3">
		<div class="form-group">
		<input name="last_name" class="form-control ulockd-form-fg required" placeholder="Last name" required="required" data-error="Name is required." type="text">
		<div class="help-block with-errors"></div>
		</div>
        </div>
		<div class="col-md-3">
		  <div class="form-group">
		  <input name="email" id="contect_email" class="form-control ulockd-form-fg required email" placeholder="Your email" required= "required" data-error="Email is required." type="email">
		   <div class="help-block with-errors"></div>
		   </div>
		</div>  
		<div class="col-md-3">
		  <div class="form-group">
		  <input name="telephone" class="form-control ulockd-form-fg required" placeholder="Phone" required="required" data-error="Phone Number is required." type="text">
		  <div class="help-block with-errors"></div>
		 </div>
		</div>		
		<div class="col-md-12">
		 <div class="form-group">
		   <textarea name="comments" class="form-control ulockd-form-tb required" rows="8" placeholder="Your message" required="required" data-error="Message is required."></textarea>
		 <div class="help-block with-errors"></div>
		</div>
		<div class="form-group ulockd-contact-btn">
		 <input type="submit"   value="Submit" class="btn btn-primary" name="submit">
		<p id="demo"></p>
		</div>
		</div> 
        </div>
         </form>
		</div>
		</div>
		<div class="col-md-12">
		<div class="ulockd-google-map">
		<iframe class="h400" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7007.2696139305135!2d77.322802!3d28.580727!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc28e990a00c623d0!2sIndia+Virtual+Hospital!5e0!3m2!1sen!2sin!4v1533124920958" width="" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		</div>
		</div>
		</div>
	</section>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
<script type="text/javascript">
$("#contact_form").submit(function(e) {	
	e.preventDefault();
	var form = $(this);
$.ajax({
    type: "POST",
    url: "/send_mail.php",
    data: form.serialize(), 
    success: function(data) {
		//alert(data);
	if (isNaN(data)){			
		$('#demo').html(data);
		setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
	}else{
		if(data==1){
		$("#contact_form").trigger("reset");
		$('#demo').html("<h3>Contact Form Submitted! We will be in touch soon.</h3>").show();
		setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
		}
		else if(data==3){
		$('#demo').html("<h3>We are sorry, but there appears to be a problem with the form you submitted.</h3>").show();
		setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
		}		
		else{
		$('#demo').html("<h3>Something Went Wrong Mail not sent</h3>").show();
		setTimeout(function() {
        $("#demo").hide('blind', {}, 500)
    }, 5000);
		}		
	}			
    }
  });
  });
</script>
	<!-- Our Footer ---->
<?php require_once('footer.php');?>
