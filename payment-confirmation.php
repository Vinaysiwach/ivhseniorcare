
<?php
include "connection.php";
    $ec_page_title  = "Nursing Home Care delhiNCR | Home Nurse Services Chandigarh| IVHSeniorcare.com";
    $ec_page_desc = " Nursing care services at home by Ivhsenior care. ivhSeniorCare, make sure provide best quality nursing services at an affordable cost. ";
    require_once('header.php');
	
	
	
    ?>     
<div class="row container-kamn">
    <img src="images/resource/Payment-Confirmation-banner.jpg" class="blog-post" alt="Home Health Care" align="right" width="100%" height=""> 
    </div>
<?php
if (isset($_POST['packageid'])) {

    // if ($_POST['packageid'] == 1) {
        // $packageName = PACKAGE_1;
        // $amount = PACKAGE_1_AMOUNT;
      
    // }
    // if ($_POST['packageid'] == 2) {
        // $packageName = PACKAGE_2;
        // $amount = PACKAGE_2_AMOUNT;
    // }
    // if ($_POST['packageid'] == 3) {
        // $packageName = PACKAGE_3;
        // $amount = PACKAGE_3_AMOUNT;
    // }
	// if ($_POST['packageid'] == 4){
		// $packageName = PACKAGE_4;
	// }
    //$remark = REMARKS;
	
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
	//print_r($data);
    $packageid = $_POST['packageid'];
	$amount=$data['amount']*$data['dur_days'];
    $gst =   $amount* 18/100;
    $final_amount = $amount + $gst;
} else if (isset($_POST['amount'])) {
    $packageid = 0;
    $packageName = CUSTOM_PACKAGE;
    $remark = isset($_POST["remark"]) ? $_POST["remark"] : '';
    $final_amount = $amount = isset($_POST['amount']) ? $_POST["amount"] : '';
} else {
   
}
?>

<section class="full contact_page">
    <div class="container">
        <div class="col-sm-12 contact_text">
            <h1>Payment Confirmation</h1>
        </div>
       
        <div class="col-sm-12 contact_text">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Package Selected</td>
                        <td><?php echo $data['packagetitle']; ?></td>
                    </tr>
                    <tr>
                        <td>Amount (<?php echo $data['amount']; ?>*<?php echo $data['dur_days']; ?>)</td>
                        <td><?php echo '<i class="fa fa-inr" aria-hidden="true"></i>' . ' ' . $amount; ?></td>
                    </tr>
                    <?php //if(isset($gst) && $gst > 0){ ?>
                     <tr>
                        <td>Tax 18%</td>
                        <td><?php echo '<i class="fa fa-inr" aria-hidden="true"></i>' . ' ' . $gst; ?></td>
                    </tr>
                    <?php //} ?>
                   
                    <tr>
                        <td>Final Amount</td>
                        <td><span id="amount"><?php echo '<i class="fa fa-inr" aria-hidden="true"></i>' . ' ' . $final_amount; ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>       
        <div class="col-md-4" >
            <span id="appliedCode" class="col-md-12 couponErrorMsg"></span>
        </div>
        <div class="col-md-12" >
            <span id="appliedCodeFail" class="col-md-12 ErrorMsg"></span>
        </div>
        <div class="contact_detail">
            <div class="col-sm-12 contact_form">
                <form method='post' name='myForm1' action='payment.php' id='myForm1'>
                    <input type="hidden" name="id" value="<?php print($_SESSION['userID']); ?>">
                    <input type="hidden" name="amount" required="" value="<?php echo $data['amount']; ?>">
                    <input type="hidden" name="packageid" required="" value="<?php echo $_POST['packageid']; ?>">
                    <div class="full form_button">
                        <button class="buttonpay1">Pay <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
	<!-- Our CopyRight Section -->
	<br>
	<br>
	<br>
	<?php require_once('footer.php');?>
