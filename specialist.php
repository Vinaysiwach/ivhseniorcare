
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124294661-1"></script>
<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124294661-1');
</script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>IVH SENIORCARE</title>
<!-- Favicon -->
<link href="images/favicon.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
</head>

<body>
<div class="wrapper">
	
  	<div class="header-top">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-4 col-xs-12">
  					<div class="social-linked">
  						<ul class="list-inline">
  							
  							<li><p class="ulockd-welcntxt">Phone<span class="text-thm1"> +91 852 775 5571</span></p></li>
  						</ul>
  					</div>
  				</div>
				<div class="col-md-4 col-xs-12">
  					<div class="welcm-ht text-right">
					  <p>One Month Subscription Package @ INR 800 + GST </p>
					</div>
				</div>
  				<div class="col-md-4 col-xs-12">
  					<div class="welcm-ht text-center">
	  					<p class="ulockd-welcntxt"></p>
						
						<a href="http://ivhseniorcare.com/images/Company_Profile/index.php">Media Centre</a>
						<a href="blog.php">Blog</a>
  					</div>
							
  				</div>
  				<!--<div class="col-md-3 col-xs-12">
  					<div class="welcm-ht text-right">
						<ul class="list-inline">
							
							<li>
								<a class="color-white" href="#" data-toggle="modal" data-target=".bs-example-modal-lg" data-whatever="@mdo">Sign In | Sign Up </a>
		        				<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
		        				    <div class="modal-dialog modal-lg" role="document">
			        				    <div class="modal-content">
			        				        <div class="modal-header">
				        				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        				        <h4 class="modal-title text-center" id="exampleModalLabel">Login or Register</h4>
				        				        <p class="text-center">Sign in and choose your service to have access to all our service.</p>
			        				        </div>
			        				        <div class="modal-body">
				        				      	<div class="row">
				        				      		<div class="col-sm-12 col-md-6 col-lg-5 text-center hvr-float-shadow">
				        						      <form id="userForm" class="ulockd-login-form" method="post" action="index.php">
				        						        	<h3><span class="flaticon-lock"></span> Login</h3>
				        						        	<p>Enter username and password to login:</p>
				        						            <div class="form-group">
				            								    <input type="email" class="form-control" name="email" id="useremail" placeholder="Email">
				            								</div>
				            								<div class="form-group">
				            								    <input type="password" class="form-control" name="userpass" placeholder="Password">
				            								</div>
				        						            <button type="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
				        						        </form>
				        				      		</div>
				        				      		<div class="col-sm-12 col-lg-7 hvr-float-shadow">
				        						        <form class="ulockd-reg-form text-center" method="post" action="registered.php">
				        						        	<h3> <span class="flaticon-house-key"></span> Register</h3>
				        						        	<p>Join our community today:</p>
				        						            <div class="form-group">
				            								    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
				            								</div>
				        						            <div class="form-group">
				            								    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
				            								</div>
				        						            <div class="form-group">
				            								    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
				            								</div>
															<div class="form-group">
															     <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
															</div>
															
														
															<div class="form-group">
															   <input type="password" name="password" class="password_validate form-control form-group" id="password" placeholder="Password">
                                                                  <input type="password" name="cpassword" class="password_validate form-control" id="cpassword" onchange="checkPasswordMatch()" placeholder="Confirm Password" value="">
                                                          <span id="divCheckPasswordMatch"> </span>
															</div>
															
																<div class="form-group">
															     <input type="address" class="form-control" name="address1" id="address1" placeholder="Address 1" required>
															</div>
															<div class="form-group">
															     <input type="address" class="form-control" name="address2" id="address2" placeholder="Address 2" required>
															</div>
															
															
															 <div class="form-group">
                        <select class="form-control" id="country" name="country">
                            <option value="">Select Country </option>      
                            <option value="INDIA">INDIA</option>   
                        </select>
                    </div>
															<div class="form-group">
                        <select class="form-control" id="state" name="state" onchange="getCityListForFront($(this).val())">
                            <option value="">Select State </option>
                                                                <option value="55">Andaman Nicobar</option> 
                                                                        <option value="29">Andhra Pradesh</option> 
                                                                        <option value="39">Arunachal Pradesh</option> 
                                                                        <option value="40">Assam</option> 
                                                                        <option value="34">Bihar</option> 
                                                                        <option value="51">Chandigarh</option> 
                                                                        <option value="35">Chhattisgarh</option> 
                                                                        <option value="56">Dadra &amp; Nagarhaweli</option> 
                                                                        <option value="57">Daman &amp; Diu</option> 
                                                                        <option value="50">Delhi</option> 
                                                                        <option value="47">Goa</option> 
                                                                        <option value="48">Gujarat</option> 
                                                                        <option value="23">Haryana</option> 
                                                                        <option value="24">Himachal Pradesh</option> 
                                                                        <option value="21">Jammu &amp; Kashmir</option> 
                                                                        <option value="36">Jharkhand</option> 
                                                                        <option value="30">Karnataka</option> 
                                                                        <option value="31">Kerala</option> 
                                                                        <option value="54">Lakshadweep</option> 
                                                                        <option value="28">Madhya Pradesh</option> 
                                                                        <option value="49">Maharashtra</option> 
                                                                        <option value="41">Manipur</option> 
                                                                        <option value="42">Meghalaya</option> 
                                                                        <option value="43">Mizoram</option> 
                                                                        <option value="44">Nagaland</option> 
                                                                        <option value="37">Orissa</option> 
                                                                        <option value="53">Pondicherry</option> 
                                                                        <option value="22">Punjab</option> 
                                                                        <option value="27">Rajasthan</option> 
                                                                        <option value="45">Sikkim</option> 
                                                                        <option value="32">Tamil Nadu</option> 
                                                                        <option value="33">Telangana</option> 
                                                                        <option value="46">Tripura</option> 
                                                                        <option value="25">Uttar Pradesh</option> 
                                                                        <option value="26">Uttarakhand</option> 
                                                                        <option value="38">West Bengal</option> 
                                                            </select>
                    </div>
															<div class="form-group">
                    <input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Zipcode">      
				            								</div>
															 <p id="error_msg"></p>
				            								<div class="form-group text-center">
				            						        	<button type="submit" id="" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
																

                                                                 </div>
				        						        </form>
				        				      		</div>
				        				      	</div>	
			        				        </div>
			        				        
			        				    </div>
		        				    </div>
		        				</div>
							</li>
						</ul>
  					</div>
  				</div>-->
  			</div>
  		</div>
  	</div>
  	

	<!-- Header Styles -->
	<header class="header-nav">
		<div class="main-header-nav navbar-scrolltofixed">
			<div class="container-fuild">
			    <nav class="navbar navbar-default bootsnav menu-style1 light-blue col-md-12">
					<!-- Start Top Search -->
			        <div class="top-search">
			            <div class="container">
			                <div class="input-group">
			                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
			                    <input type="text" class="form-control" placeholder="Search">
			                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			                </div>
			            </div>
			        </div>
			        <!-- End Top Search -->

			        <div class="container ulockd-pdng0">
			           
			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle pull-right dottge_menu" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
							<a class="navbar-brand wow fadeInDownBig office-logo logo_deactive text-align-logo" href="index.php" style="visibility: visible; animation-name: fadeInDownBig;"><img src="images/header-logo1.jpg" alt="Office"></a>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse" id="navbar-menu">
           
							<ul class="nav navbar-nav navbar-left" data-in="fadeIn">
			                    <li>
			                        <a href="index.php" class="active">Home</a></li>
                                    
			                    
		                    
				                     <li>   <a href="about.php">About Us</a>
				                        
				                    </li>
				            
			                       <li> <a href="care.php">Care Manager</a>
			                        
			                    </li>
			                    <li>
			                        <a href="panel.php">Expert Panel</a>
			                        
			                    </li>
                                <li class="dropdown">
			                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Senior care Service</a>
			                        <ul class="dropdown-menu">
										
										   <li> <a href="Social.php">Social Assistance Serivces</a></li>
										   <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Health Serivces</a>
										     
											  <ul class="dropdown-menu">
										        <li> <a href="nursing.php">Nursing Care</a></li>
		                                        <li><a href="post.php">Post Hospitalisation</a></li>
		                                        <li><a href="emergency.php">Emergency</a></li>
                                                <li><a href="physiotherapy.php">Physiotherapy</a></li>
										    </ul>
										     
										   </li>
										   <li> <a href="http://ivhcare.ivh.health/" target="_blank">Medical Assistance</a></li>
	                                      
										   
			                        </ul>
			                    </li>
								
			                   <li> <a href="Subscription.php">Subscription</a></li>
									<li>
			                        <a href="contact.php">Contact Us</a>
			                        
			                 </li>
							 
			                </ul>
   

<div class="synapse">

<a href="http://www.ivhseniorcare.com/synapse/">Synapse Writing Campaign Participate & Win</a>

</div>
					
			                
			            </div><!-- /.navbar-collapse -->
			        </div>

			        
			        
			    </nav>
			</div>
		</div>		
	</header>
	
	<!-- Main Container -->

    <div class="row container-kamn">
        <img src="images/resource/sp.jpg" class="blog-post" alt="Feature-img" align="right" width="100%" height=""> 
    </div>
            <br>
			<br>
			<br>
			<br>
    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">
			<p><b>SPECILALIST SELECTION</b></p>
<p>
IVHCare helps you to find specialists to fulfil your healthcare needs and support you with 360<sup>0</sup> clinical liaison.</p>

<p><b>How does it benefits you?</b></p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span> Saves Cost</p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span> Less waiting in queue outside doctors’ clinic</p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span> Provides availability of best doctors and hospitals</p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span> Less travelling to consult a doctor</p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span>A support team to manage all your medical needs</p>

<p style="margin-left:20px;"><span class="dotte_4">&#9758;</span>Coordination among all your health providers

post-intervention & follow-up care</p>

               </div>
            <?php require_once('side_formlarge.php');?>
							</div>
							</div>
							</div>
							
							
							
	
	
	<!-- Our Footer --
	<section class="ulockd-footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-widget">
    					<img alt="" src="images/footer-logo.png" class="img-responsive ulockd-footer-log">
    					<p class="ulockd-ftr-text">IVHSENIORCARE is the Rockies is a 710-bed local medicinal focus in Loveland, Colo. with a full range of administrations and spend significant time in heart and injury mind.</p>
    				</div>
    				<div class="ulockd-footer-newsletter">
    					<h4 class="title text-uppercase">News Letter</h4>
		                <form class="ulockd-mailchimp">
		                    <div class="input-group">
			                    <input type="email" class="form-control input-md" placeholder="Your email" name="EMAIL" value="">
			                    <span class="input-group-btn">
			                        <button type="submit" class="btn btn-md"><i class="icon flaticon-right-arrow"></i></button>
			                    </span>
		                    </div>
		                </form>
    				</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="ulockd-footer-lnews">
						<h3 class="text-uppercase">Latest Ne<span class="text-thm1">ws</span></h3>
						<div class="ulockd-media-box">
							<div class="media">
							  <div class="media-left pull-left">
							    <a class="thumbnail" href="#">
							      <img class="media-object" src="images/blog/s1.jpg" alt="s1.jpg">
							    </a>
							  </div>
							  <div class="media-body">
								<a href="#" class="post-date">2018</a>
							    <h4 class="media-heading">Let's Move Blog</h4>
							    <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
							<div class="media">
							  <div class="media-left pull-left">
							    <a class="thumbnail" href="#">
							      <img class="media-object" src="images/blog/s2.jpg" alt="s2.jpg">
							    </a>
							  </div>
							  <div class="media-body">
								<a href="#" class="post-date">2018</a>
							    <h4 class="media-heading">Let's Move Blog</h4>
							    <p>Notice test for Alzheimer's conclusion steps nearer...</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">
					<div class="ulockd-footer-qlink">
						<h3 class="text-uppercase">NAVIGATI<span class="text-thm1">ON</span></h3>
						<ul class="list-unstyled">
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> About Us</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Appointment</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Help Center</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Our Services</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Sitemap</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Team Details</a></li>
							<li> <span class="flaticon-checked-mark text-thm1"></span> <a href="#"> Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-4">
					<div class="flickr-widget">
						<h3 class="text-uppercase">Flickr Fe<span class="text-thm1">ed</span></h3>
						<ul class="list-inline">
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr1.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr2.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr3.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr4.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr5.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							<li>
								<div class="thumb">
									<img alt="" src="images/gallery/flckr6.jpg" class="img-responsive img-whp thumbnail">
									<div class="overlay">
										<span class="flaticon-add"></span>
									</div>
								</div>
							</li>
							
						</ul>
					</div>				
				</div>
			</div>
		</div>
	</section>

	<!-- Our CopyRight Section -->
	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
	<br>
	<br>
	<br>
	<section class="ulockd-copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright©IVH 2018 All right reserved.</p>
				</div>
			</div>
		</div>
	</section>

<a class="scrollToHome" href="#"><i class="fa fa-home"></i></a>
</div>
<!-- Wrapper End -->

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootsnav.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/video-player.js"></script>
<script type="text/javascript" src="js/jquery.barfiller.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/tweetie.js"></script>
<script type="text/javascript" src="js/color-switcher.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</body>

</html>