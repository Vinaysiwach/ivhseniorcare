<div class="col-sm-8 col-md-8">
			<h1><Center>Booking Appoitment</Center></h1>
                
                 <fieldset>
                     <form name="contactform" id="contactform" method="post" action="specialist.php">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group form-group-fullname">
                                        <label class="control-label" for="fullname">Name *</label>
                                        <input type="text" class="form-control" name="name" required id="fullname" placeholder="Enter Your Name">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group form-group-email">
                                        <label class="control-label" for="email">E-mail *</label>
                                        <input type="text" class="form-control" required  name="email" id="email_form" placeholder="Enter Your E-Mail">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group form-group-Phone">
                                        <label class="control-label" for="Phone">Phone *</label>
                                        <input type="text" class="form-control" required name="phone" id="Phone" placeholder="Enter Your Phone">
                                    </div>
                                </div>
								
								
								 <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group form-group-Phone">
                                        <label class="control-label"  name="gender_form"  for="Phone">Gender*</label>
                                        
										<select name="gender" class="form-control" required id="exampleFormControlSelect1">
										<option value="Select" "selected"="">Select</option>
										<option value="Male" "selected"="">Male</option>
										<option value="Female" "selected"="">Female</option>
                                            </select>
	                 
      

                                    </div>
                                </div>
								
								
								

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                     <label for="exampleFormControlInput1">Age</label>
                                      <input type="Age" class="form-control" name="age" id="exampleFormControlInput1" placeholder="">
                               </div>
  
                                </div>

								
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                     <label for="exampleFormControlInput1">State</label>
                                      <select name="state" class="form-control" id="exampleFormControlSelect1_state">
									  <option value="Select" "selected"="">Select</option>
									  <option value="Andra Prades" "selected"="">Andra Prades</option>
									  <option value="Arunachal Pradesh" "selected"="">Arunachal Pradesh</option>
									  <option value="Assam" "selected"="">Assam</option>
									  <option value="Bihar" "selected"="">Bihar</option>
									  <option value="Chhattisgarh" "selected"="">Chhattisgarh</option>
									  <option value="Goa" "selected"="">Goa</option>
									  <option value="Gujarat" "selected"="">Gujarat</option>
									  <option value="Haryana" "selected"="">Haryana</option>
									  <option value="Himachal Pradesh" "selected"="">Himachal Pradesh</option>
									  <option value="Jammu and Kashmir" "selected"="">Jammu and Kashmir</option>
									  <option value="Jharkhand" "selected"="">Jharkhand</option>
									  <option value="Karnataka" "selected"="">Karnataka</option>
									  <option value="Kerala" "selected"="">Kerala</option>
									  <option value="Madya Pradesh" "selected"="">Madya Pradesh</option>
									  <option value="Maharashtra" "selected"="">Maharashtra</option>
									  <option value="Manipur" "selected"="">Manipur</option>
									  <option value="Meghalaya" "selected"="">Meghalaya</option>
									  <option value="Mizoram" "selected"="">Mizoram</option>
									  <option value="Nagaland" "selected"="">Nagaland</option>
									  <option value="Orissa" "selected"="">Orissaa</option>
									  <option value="Punjab" "selected"="">Punjab</option>
									  <option value="Rajasthan" "selected"="">Rajasthan</option>
									  <option value="Sikkim" "selected"="">Sikkim</option>
									  <option value="Tamil Nadu" "selected"="">Tamil Nadu</option>
									  <option value="Telagana" "selected"="">Telagana</option>
									  <option value="Telagana" "selected"="">Telagana</option>
									  <option value="Uttaranchal" "selected"="">Uttaranchal</option>
									  <option value="Uttar Pradesh" "selected"="">Uttar Pradesh</option>
									  <option value="West Bengal" "selected"="">West Bengal</option>
	
                                   </select>
                               </div>
  
                                </div>
								
								
								<div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                     <label for="exampleFormControlInput1">Medical Problem</label>
                                      <select name="medical_problem" class="form-control" id="exampleFormControlSelect1_form">
									   <option value="Select" "selected"="">Select</option>
									   <option value="Cardiac" "selected"="">Cardiac</option>
									   <option value="kidney/Renal" "selected"="">kidney/Renal</option>
									   <option value="Liver/Hepatic" "selected"="">Liver/Hepatic</option>
									   <option value="Lungs/Pulmonar" "selected"="">Lungs/Pulmonar</option>
									   <option value="Neurology" "selected"="">Neurology</option>
									   <option value="Cancer/Oncology" "selected"="">Cancer/Oncology</option>
									   <option value="Bone/Orthopedic" "selected"="">Bone/Orthopedic</option>
									   <option value="Infectious Disease" "selected"="">Infectious Disease</option>
									    <option value="Skin/Dermotology" "selected"="">Skin/Dermotology</option>
										 <option value="Ear,Nose,Throat" "selected"="">Ear,Nose,Throat</option>
										  <option value="Other" "selected"="">Other</option>
     
	                                       </select>  
                               </div>
  
                                </div>
								
								
								
								
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-group-message">
                                        <label class="control-label" for="message">Describe Specific Medical Problem *</label>
                                        <textarea class="form-control" name="message" required id="message" rows="3"></textarea>
                                    </div>
                                </div>
							
							
							 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group form-group-message">
                                        <input type="submit"  value="Submit" class="btn btn-primary" name="submit">
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
    url: "/ajax.php?task=sideformlarge",
    data: form.serialize(), 
    success: function(data) {
		//alert(data);
	
		if(data==1){
			$("#contactform").trigger("reset");
		  $('#demo').html("<h3>Booking Appoitment Submitted! We will be in touch soon.</h3>").show();
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