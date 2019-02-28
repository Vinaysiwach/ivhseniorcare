<!DOCTYPE html>
<?php include "connection.php";
    $ec_page_title  = "Health Care Subscription Packages | IvhSeniorcare.com";
    $ec_page_desc = " We are providing OPD & IPD Services at Hospital and supervised emergency assistance also. You can access to all Services of India Virtual Hospital ";
    require_once('header.php');
	
	

    ?>
		<div class="col-sm-12 col-md-6 col-lg-5 text-center hvr-float-shadow">
			    <form id="userForm" class="ulockd-login-form" method="post" action="login.php">
				<h3><span class="flaticon-lock"></span> Login</h3>
				<p class="vinay">Enter Email and Password to login:</p>
				<div class="form-group">
				<input type="email" class="form-control" name="email" id="useremail" placeholder="Email">
				</div>
				<div class="form-group">
				<input type="password" class="form-control" name="userpass" placeholder="Password">
				</div>
				<button type="submit"  name="submit" class="btn btn-default ulockd-btn-thm2">Login to account</button>
				
		<div class="social-box">
			<div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>    Login with Facebook
                </a>
			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
                <a href="#" class="btn btn-info btn-block" >
                  <i class="icon-google"></i>    Login with Google
                </a>
            </div>
		</div>
<div>		
			<p>Don't have an Account? Register Now</p>
			<div class="col-md-12social">
                <a href="registered.php" class="btn btn-info btn-block" >
                  <i class="icon-google"></i>Register 
                </a>
            </div>
          </div>
		</div>
		
      </form>
	</div>
	</div>
<?php
session_start();
$txtTransID = '';	
//echo "<pre>";print_r($_SESSION);
//echo "<pre>";print_r($_REQUEST);
if (isset($_SESSION['userInfo']['id']) && $_SESSION['userInfo']['id'] > 0) {
	
	$query="select * from package where packageid=".$_POST['packageid']." and status=1";

	$sql=mysqli_query($conn,$query);

	$result=mysqli_num_rows($sql);
	$data=array();
	   if($result>0){
			while ($row=mysqli_fetch_assoc($sql)){
				$data[]=$row;
				
			}
	   }
	   $data=$data[0];
	$packageid = $_REQUEST['packageid'];
	$amount=$data['amount']*$data['dur_days'];
    $gst =   $amount* 18/100;
    $final_amount = $amount + $gst;
	
    $userid = isset($_SESSION['userInfo']['id']) ? $_SESSION['userInfo']['id'] : '';
    $amount = isset($final_amount) ? $final_amount : '';
   // $remark = isset($_POST["remark"]) ? $_POST["remark"] : '';
    $packageid = isset($_REQUEST["packageid"]) ? $_REQUEST["packageid"] : '';
  
    //$gst = 0;

    //validate again coupon --------------------- 

   
} else {
    header("location:index.php");
    die;
}



?>

<html>
    <head>
        <title>Javascript AutoSubmit Form </title>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>		
    </head>
    <body>	                    <!--Form here-->
        <form  method='post' name='pgWallet'  action='/ccavenue/NON_SEAMLESS_KIT/ccavRequestHandler.php' id='pgWallet'>
			<input type="hidden" name="tid" id="tid" value="<?php echo time(); ?>" />
			<input type="hidden" name="merchant_id" value="193707"/>
			<input type="hidden" name="order_id" value="123654789"/>
			<input type="hidden" name="amount" value="<?php echo $final_amount ?>"/>
			<input type="hidden" name="currency" value="INR"/>
			<input type="hidden" name="redirect_url" value="http://www.ivhseniorcare.com/ccavenue/NON_SEAMLESS_KIT/ccavResponseHandler.php"/>
			<input type="hidden" name="cancel_url" value="http://www.ivhseniorcare.com/ccavenue/NON_SEAMLESS_KIT/ccavResponseHandler.php"/>
			<input type="hidden" name="language" value="EN"/>			
           <!-- <input type="hidden" name="requestparameter" value="<?php //echo $requestparameter ?>">
            <input type="hidden" name="shippingDtls" value="<?php //echo $ShippingDtls ?>">
            <input type="hidden" name="billingDtls" value="<?php //echo $BillingDtls ?>">
            <input type="hidden" name="txtTransID" value="<?php //echo $id ?>">
            <input type="hidden" name="MID" value ="151"/>	 -->             

        </form>
		
        <script>
            $(document).ready(function () {
                $("#pgWallet").submit();
            });
        </script>
    </body>
</html>
<?php require_once('footer.php');?>
