<?php session_start();?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column123 {
  float: left;
  width: 25%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row123:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '713443405682384');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=713443405682384&ev=PageView&noscript=1"
/></noscript>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124294661-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-124294661-1');
</script>
<meta name="p:domain_verify" content="446d46e4272b1e0c543cbe8a2d624a98"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/lightbox.css">
<!-- Title -->
<?php
$ec_page_keyword = isset($ec_page_keyword) ? $ec_page_keyword : " Seniorcare, eldercare, nursing services, elder care, seniorcare";
?>
<meta name="keywords" content="<?php echo $ec_page_keyword; ?>"/>
<?php
$ec_page_desc = isset($ec_page_desc) ? $ec_page_desc : " IVH Seniorcare provides best property consultation services in India. Buy, Sell, Rent Best Residential and Commercial Properties. Best Real Estate Property in India";
?>
<meta name="description" content="<?php echo $ec_page_desc; ?>">
<?php
$ec_page_title = isset($ec_page_title) ? $ec_page_title : "IVH Seniorcare, Senior care at your doorstep|Because you matter";
?>
<title><?php echo $ec_page_title; ?> </title>
<!-- Favicon -->
<link href="images/favicon.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>

<body>
<div class="wrapper" style="background-color:#eaeaea;">
<?php if (!empty($_SESSION['error'])){echo "<script type='text/javascript'> alert('".$_SESSION['error']."')</script>";unset($_SESSION['error']);}?>
<div class="header-top">
<div class="container">
<div class="row">
<div class="col-md-4 col-xs-12">
<div class="social-linked">
<ul class="list-inline">
<li><p class="ulockd-welcntxt">Toll Free no<span class="text-thm1"> 1800 102 6998</span></p></li>
</ul>
</div>
</div>
<div class="col-md-4 col-xs-12">
<div class="welcm-ht text-right">
<p>One Month Subscription Package @ INR 1500 + GST </p>
</div>
</div> 				
<div class="col-md-4 col-xs-12">
<div class="welcm-ht text-right1">
<ul class="list-inline">						
<li>
<?php if(!empty($_SESSION['userInfo'])){
//echo"<pre>"; print_r($_REQUEST);die;
echo $_SESSION['userInfo']['fname'];								
echo "|<a href='logout.php'>Logout</a>" ;								
}else{?>
<a class="color-white" href="#" data-toggle="modal" data-target="#sign-form" data-whatever="@mdo">Sign In | Sign Up </a>
<li class="nav-item">
<a href="#"  data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
</a>
<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
<li><a href="#"><span class="fa fa-user author-log-ic"></span>My Service</a>
</li>
<li><a href="changepassword.php"><span class="fa fa-cog author-log-ic"></span>Change Password</a>
</li>
<li><a href="logout.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
</li>
</ul>
</li>
<?php }?>
<div class="modal fade bs-example-modal-lg" id="sign-form" tabindex="-1" role="dialog">
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
			    <form id="userForm" class="ulockd-login-form" method="post" action="login.php">
				<h3><span class="flaticon-lock"></span> Login</h3>
				<p>Enter username and password to login:</p>
				<div class="form-group">
				<input type="email" class="form-control" name="email" id="useremail" placeholder="Email">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" name="userpass" placeholder="Password">
				</div>
				<button type="submit"  name="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
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
			   <input type="password" name="cpassword" class="password_validate form-control" id="cpassword" onChange="checkPasswordMatch()" placeholder="Confirm Password" value="">
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
	<select class="form-control" id="state" name="state" onChange="getCityListForFront($(this).val())">
	<option value="">Select State </option>
	<option value="Andaman Nicobar">Andaman Nicobar</option> 
		<option value="Andhra Pradesh">Andhra Pradesh</option> 
		<option value="Arunachal Pradesh">Arunachal Pradesh</option> 
		<option value="Assam">Assam</option> 
		<option value="Bihar">Bihar</option> 
		<option value="Chandigarh">Chandigarh</option> 
		<option value="Chhattisgarh">Chhattisgarh</option> 
		<option value="Dadra &amp; Nagarhaweli">Dadra &amp; Nagarhaweli</option> 
		<option value="Daman &amp; Diu">Daman &amp; Diu</option> 
		<option value="Delhi">Delhi</option> 
		<option value="Goa">Goa</option> 
		<option value="Gujarat">Gujarat</option> 
		<option value="Haryana">Haryana</option> 
		<option value="Himachal Pradesh">Himachal Pradesh</option> 
		<option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option> 
		<option value="Jharkhand">Jharkhand</option> 
		<option value="Karnataka">Karnataka</option> 
		<option value="Kerala">Kerala</option> 
		<option value="Lakshadweep">Lakshadweep</option> 
		<option value="Madhya Pradesh">Madhya Pradesh</option> 
		<option value="Maharashtra">Maharashtra</option> 
		<option value="Manipur">Manipur</option> 
		<option value="Meghalaya">Meghalaya</option> 
		<option value="Mizoram">Mizoram</option> 
		<option value="Nagaland">Nagaland</option> 
		<option value="Orissa">Orissa</option> 
		<option value="Pondicherry">Pondicherry</option> 
		<option value="Punjab">Punjab</option> 
		<option value="Rajasthan">Rajasthan</option> 
		<option value="Sikkim">Sikkim</option> 
		<option value="Tamil Nadu">Tamil Nadu</option> 
		<option value="Telangana">Telangana</option> 
		<option value="Tripura">Tripura</option> 
		<option value="Uttar Pradesh">Uttar Pradesh</option> 
		<option value="Uttarakhand">Uttarakhand</option> 
		<option value="West Bengal">West Bengal</option> 
	</select>
    </div>
	<div class="form-group">
	<input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Zipcode">      
	</div>
	 <p id="error_msg"></p>
	<div class="form-group text-center">
	<button type="submit" id="" name="submit" class="btn btn-default ulockd-btn-thm2">Sign Me Up</button>
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
  	</div>
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
     <li><a href="index.php" class="">Home</a></li>
     <li><a href="elderly-care.php">About Us</a></li>
	 <li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Care Manager</a>
	<ul class="dropdown-menu">	
   <li> <a href="home-care.php">Introduction</a></li>
   <li> <a href="recruit.php">Recruitment</a></li>
   </li>
   </ul>
     <li><a href="home-health-care.php">Expert Panel</a></li>  
	<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Senior care Services</a>
	<ul class="dropdown-menu">	
   <li> <a href="home-care-services.php">Social Assistance Services</a></li>
   <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home Health Services</a>
   <ul class="dropdown-menu">
	<li> <a href="nursing-home-care.php">Nursing Care</a></li>
	<li><a href="post.php">Post Hospitalisation</a></li>
	<li><a href="ambulance-service-in-delhi.php">Emergency</a></li>
	<li><a href="physiotherapy-at-home.php">Physiotherapy</a></li>
   </ul>
   </li>
   <li> <a href="http://ivhcare.ivh.health/" target="_blank">Medical Assistance</a></li>
   </ul>
   </li>
   <li> <a href="Product.php">Products</a></li>
   <li><a href="http://www.ivhseniorcare.com/blog/">News & Events</a></li>
   <li><a href="contact.php">Contact Us</a></li>
</ul>   

<!--<div class="synapse">
<font color=lightgrey><a href="http://www.ivhseniorcare.com/synapse/">Synapse Writing Campaign Participate & Win</a></font>
</div>	---->							                
</div>
</div>
</nav>
</div>
</div>		
</header>
