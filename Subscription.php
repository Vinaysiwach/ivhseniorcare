<?php
include "connection.php";
    $ec_page_title  = "Health Care Subscription Packages | IvhSeniorcare.com";
    $ec_page_desc = " We are providing OPD & IPD Services at Hospital and supervised emergency assistance also. You can access to all Services of India Virtual Hospital ";
    require_once('header.php');
	
	$query="select * from package where status=1";

$sql=mysqli_query($conn,$query);

$result=mysqli_num_rows($sql);
$data=array();
   if($result>0){
while ($row=mysqli_fetch_assoc($sql)){
	$data[]=$row;
	
}
   }

    ?>
	<!-- Main Container -->	
	<center><h1 class="kyu">Our Products</h1></center>
	<div class="row123">
  <div class="column123">
    <h2 class="careone">Care One</h2>
   <div class="iconone">
   <img src="images/resource/careone.jpg"width="250px">
   </div>
  </div>
  <div class="column123">
    <h2 class="caretwo">Care Trust</h2>
   <div class="icontwo">
   <img src="images/resource/caretwo.jpg"width="250px">
   </div>
  </div>
  <div class="column123">
    <h2 class="carethree">Care Bliss</h2>
  <div class="iconthree">
   <img src="images/resource/carefour.jpg" width="250px">
   </div>
  </div>
  <div class="column123">
    <h2 class="carefour">Care Faith</h2>
    <div class="iconfour">
   <img src="images/resource/carethree.jpg" width="250px">
   </div>
  </div>
</div>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">  
    <div id="wrapper1">
    <div class="container">
    <div class="row">
	
	<?php 
	$color=array("blue","yellow","green","red");
	$info=array("info","warning","success","danger");
	foreach ($data as $key=>$pdata){ ?>
	<form action="payment-confirmation.php" name="payment-sub" id="form<?php echo $key;?>" method="post">
	<input type="hidden" name="packageid" value="<?php echo $pdata['packageid']?>">
    <div class="col-md-3">
	<div class="circle c<?php echo $key+1?> img-circle">
    <h4 class="<?php echo $color[$key]?>"><b><?php echo $pdata['packagetitle']?></b></h4>
	<span class="icon <?php echo $color[$key]?>"><i class="fa fa-rupee"></i></span>
	<span class="price-small"><?php echo $pdata['amount']*$pdata['dur_days']?>+18%GST</span>
	<p>Effective per month price </br><i class="fa fa-rupee"><?php echo $pdata['amount']?>/-only</i></p>
	<input type="submit" class="btn btn-<?php echo $info[$key]?>" value="Choose">
	</div>
    </div><!-- .Col-md-3 ends here -->  
	</form>	
	<?php } ?>


	
   <?php /* ?> <div class="col-md-3">
    <div class="circle c2 img-circle">
    <h4 class="yellow"><b>3 Month</b></h4>
    <span class="icon yellow"><i class="fa fa-rupee"></i></span>
    <span class="price-small">3000+18%GST</span>
    <p class="per">Effective per month price </br><i class="fa fa-rupee">1000/-only</i></p>
    <button type="button" class="btn btn-warning" action="#">Choose</button>
    </div>
    </div><!-- .Col-md-3 ends here -->         
    <div class="col-md-3">
    <div class="circle c3 img-circle">
    <h4 class="green"><b>6 Month</b></h4>
    <span class="icon green"><i class="fa fa-rupee"></i></span>
    <span class="price-small">5400+18%GST</span>
    <p class="per">Effective per month price </br><i class="fa fa-rupee">900/-only</i></p>
    <button type="button" class="btn btn-success" action="#">Choose</button>
    </div>
    </div><!-- .Col-md-3 ends here -->          
    <div class="col-md-3">
    <div class="circle c4 img-circle">
    <h4 class="red"><b>12 Month</b></h4>
    <span class="icon red"><i class="fa fa-rupee"></i></span>
    <span class="price-small">9600+18%GST</span>
    <p class="per">Effective per month price </br><i class="fa fa-rupee">800/-only</i></p>
    <button type="button" class="btn btn-danger" action="#">Choose</button>
    </div>
    </div><?php */ ?> <!-- .Col-md-3 ends here -->
    </div><!-- .Container ends here -->
    </div><!-- .Row ends here -->
    </div>
	
	
	
	<div class="box_content">	
	<div class="col-md-6">
	<ul class="li">
	<li>Allocation Of A Care Manager</li>
	<li>One Free Visit By Care Manager Per Month<br> 
    (Extra Visits Are Chargable)</li>
	<li>Coordination of Home Health Services<br>and Social Assistance Services</li>
	</ul>
	</div>
	<div class="col-md-6">
	 <ul class="li2">
	<li>Coordination Of OPD & IPD Services At Hospital</li>
	<li>Supervised Emergency Assistance</li>
	<li>Access to all Services of India Virtual Hospital</li>
	<li>Other General Assistance for Seniors</li>
	</ul>
	</div>
    </div>
	
	<!-- Our CopyRight Section -->
	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
	<br>
	<br>
	<br>
	<?php require_once('footer.php');?>
