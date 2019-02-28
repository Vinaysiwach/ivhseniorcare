<div class="col-sm-8 col-md-4">
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