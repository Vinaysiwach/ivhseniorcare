
	<?php
    $ec_page_title  = "Senior Care in India | Senior Care in Delhi | Senior Care in Mumbai | Senior Care in Punjab| Home Health Care Delhi | Home Healthcare Company | Best Nursing at home";
    $ec_page_desc = " IVHSeniorcare is best home healthcare provider in India. We also providing home healthcare services in Delhi-NCR, Bangalore, Haryana, Punjab & Mumbai";
    require_once('header.php');  
    ?>       
	<section>
	<div class="div_class">	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators --> 
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="2000" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2000"></li>
    <li data-target="#myCarousel" data-slide-to="2000"></li>
  </ol>
  <!-- Wrapper for slides --> 
  <div class="carousel-inner">  
	<div class="item active">
      <img src="images/resource/Slider05.jpg" alt="Home Nursing Care – ivhseniorcare.com">
      <div class="carousel-caption">
      <h2 class="home-title2">Worried about your ageing parents? <br>Leave your worries to us...</h2>
      </div>
    </div>
    <div class="item">
      <img src="images/resource/Slider02.jpg" alt="Senior Care">
      <div class="carousel-caption">
      <h2 class="home-title2">Technology Training...<br>Internet Se Dosti...</h2> 
      </div>
    </div>
    <div class="item">
      <img src="images/resource/Slider03.jpg" alt="Nursing care In Delhi">
      <div class="carousel-caption">
      <h2 class="home-title2">Party Toh Banti Hai...</h2>
      </div>
    </div>
		
	<div class="item">
      <img src="images/resource/Slider06.jpg" alt="Senior care in DelhiNCR –ivhseniorcare.com">
      <div class="carousel-caption">
      <h2 class="home-title2">Masti, Dawat Aur Ghoomna...</h2>
      </div>
    </div>
	<!--<div class="item">
      <img src="images/resource/synapse.jpg" alt="Nurses In India">
      <div class="carousel-caption">
      <h2 class="home-title2"> Dil khol ke likho...</h2>
      </div>
    </div>---->
	<div class="item">
      <img src="images/resource/Care.jpg" alt="Senior Care Manager – ivhseniorcare.com">
      <div class="carousel-caption">
      <h2 class="home-title2"> Hamesha Aapke sath...</h2>
      </div>
    </div>	
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left"></span>
   <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right"></span>
   <span class="sr-only">Next</span>
  </a>
</div>
<div>
</section>
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book Assesment</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog"> 
     <!-- Modal content-->
     <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
	<div class="">
			<h1><Center>Contact Us </Center></h1>
			<fieldset>
			<form name="contactform" id="contactform" method="post">
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group form-group-fullname">
			<label class="control-label" for="name">Name</label>
			<input required type="text" class="form-control" name="name" id="fullname" placeholder="Enter Your Name">
			</div>
            </div>

			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group form-group-email">
			<label class="control-label" for="email">Address*</label>
			<input required type="text" class="form-control" name="address" id="address" placeholder="Enter Your address">
			</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group form-group-Phone">
			<label class="control-label" for="Phone">Phone *</label>
			<input required type="text" class="form-control" name="phone" id="Phone" placeholder="Enter Your Phone">
			</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
			<label for="exampleFormControlInput1">Senior Care Services</label>
			<select name="services" required class="form-control" id="exampleFormControlSelect1">
			<option value="">--Preferred Services--</option>
			<option value="Basic Care Attendant" "selected"="">Basic Care Attendant</option>
			<option value="Dementia Care" "selected"="">Dementia Care</option>
			<option value="Premium Senior Care" "selected"="">Premium Senior Care</option>
			<option value="Palliative & Hospice Care Nursing care" "selected"="">Palliative & Hospice Care Nursing care</option>
			<option value="Advanced Nursing Care Setting up ICU at Home" "selected"="">Advanced Nursing Care Setting up ICU at Home</option>
			<option value="Basic Physiotherapy" "selected"="">Basic Physiotherapy</option>
			<option value="Specialised Physiotherapy" "selected"="">Specialised Physiotherapy</option>
			<option value="Doctor (GP) Visit at Home (NCR)" "selected"="">Doctor (GP) Visit at Home (NCR)</option>
			<option value="Expert Second Medical Opinion" "selected"="">Expert Second Medical Opinion</option>
			<option value="Others" "selected"="">Others</option>
			</select>									   
			</div>          
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group form-group-message">
			<input type="submit" value="Submit" class="btn btn-primary" name="submit">
			<p id="demo"></p>
			</div>
			</div>
			</form>
            </fieldset>
    </div>
							<script type="text/javascript">
$("#contactform").submit(function(e) {
	
	e.preventDefault();
	var form = $(this);
$.ajax({
    type: "POST",
    url: "/ajax.php?task=sidecontact",
    data: form.serialize(), 
    success: function(data) {
		//alert(data);
	
		if(data==1){
			$("#contactform").trigger("reset");
		  $('#demo').html("<h3>Contact Form Submitted! We will be in touch soon.</h3>").show();
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
  });
  });
</script>
</div>       
    </div>     
    </div>
  </div>  
</div>	
</div>
	<section class="ulockd-about-one pdn_section_01">
	<div class="container">
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 ulockd-abtonspc">
	<div class="ulockd-about-detail">
	<h2><b>Who are we ?</b><span class="text-thm1"></span></h2>
<p>Old age is a challenging phase of life. Children living away from home face huge difficulty in providing trustworthy healthcare and security to their elderly parents back home. We, at ivhSeniorCare, understand this problem and provide customized solutions as home health care services, social assistance services & other<h1 class="small1">senior care services</h1></p><P class="para">for elders living alone.</p>  <!--Good health is directly proportional to a good life. At IVH SeniorCare, we aim to empower you to make informed decisions for yourself and your seniors health.--->
<p>In big cities, home care has become a need because number of nuclear families are on the rise. Also, need of social assistance services with rising elder population is realised in recent times.</p>
<p>Yale School of Public Health study finds that strengthening and better integrating social assistance services with home health care services for people in need may improve health outcomes and reduce medical costs. The study—Patterns of Collaboration among Health Care and Social Services Providers in Communities with Lower Health Care Utilization and Costs— is published in the journal Health Services Research.  </p>
<p class="ulockd-abt-ondtls-para"> Our <b>‘Care Manager’</b>program ensures that health and wellbeing of every senior citizen associated with us is supervised by a former defence personnel – either a soldier, nurse or paramedic from Indian Navy, Air Force or Army. We take pride in integrating the values of selfless care and discipline with professional expertise and compassionate care for taking care of your elders. We provide our services <b>Pan India</b> through a network present in 25+ cities including <b>Delhi NCR, Chandigarh, Pune, Mumbai, Lucknow, Kanpur & Jabalpur</b> to name a few.			
<p><b>Ivhseniorcare</b> commits to provide best of services which include home health care, social assistance, nursing care  and other relevant<h2 class="small2">elder care services</h2></p><p class="para2">in India.</p>
</div>
	</div>
	</div>
	</div>
	</section>
	<!-- Our Testimonial -->
	<section class="ulockd-testimonial">
	<div class="container">
	<div class="row">
	<div class="col-lg-6 col-lg-offset-3 text-center">
	<div class="ulockd-testimonial-title hvr-float-shadow">
	<h2 class="">What Our Clients saying ?</h2>
	</div>
	</div>
	</div>
	<div class="row ulockd-mrgn1260">
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="ulockd-tsmnl hvr-float-shadow">
	<div class="testi-thumb pull-right">
	<iframe width="480" height="200" src="https://www.youtube.com/embed/UeTtx5W-laM"></iframe>
	<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fivhseniorcare.com%2F&layout=button_count&size=small&mobile_iframe=true&width=75&height=20&appId" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>								
	</div>
	</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="ulockd-tsmnl hvr-float-shadow">
	<div class="testi-thumb pull-right">
	<iframe width="480" height="200" src="https://www.youtube.com/embed/eXxlBCUNYgI"></iframe>
	<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fivhseniorcare.com%2F&layout=button_count&size=small&mobile_iframe=true&width=75&height=20&appId" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>					
	</div>			
	</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
	<div class="ulockd-tsmnl hvr-float-shadow">
	<div class="testi-thumb pull-right">
	<img class="img-responsive img-whp thumbnail" src="images/testimonial/s3.jpg" alt="ICU Nurses">
	</div>
	<h4 class="ulockd-commentetor-name">Mrs Kamal Anand</h4>
	<h6 class="commentetor-post">Age 76</h6>
	<p class="cmmentetor-comment">I was associated with SeniorCare a month back. Their services are exemplary and I am very satisfied. The care managers are punctual, efficient and softspoken. They are extremely respectful and it's very nice having them in my life. Thank you SeniorCare.</p>
	</div>
	</div>
	</div>
	</div>
	</section>	
	<a href="https://api.whatsapp.com/send?phone=+918767780676&text=Hi, I contacted you Through your website." class="social-icon whatsapp"></a>
	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
	<!-- Our CopyRight Section -->
	<?php require_once('footer.php');?>
