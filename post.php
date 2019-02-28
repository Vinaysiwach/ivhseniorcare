<?php
    $ec_page_title  = "Post Hospitalisation Recuperation | IVHSeniorcare.com";
    $ec_page_desc = " Best social assistance service play vital role in this field of monitoring post-surgery recovery needs and follow up consultations. ";
    require_once('header.php');
    ?>
 <!-- Main Container -->
    <div class="row container-kamn">
    <img src="images/resource/po.jpg" class="blog-post" alt="Post Hospitalisation Recuperation" align="right" width="100%" height=""> 
    </div>
    <div id="banners"></div>
    <div class="container">   
    <div class="row">
    <div class="side-left col-sm-4 col-md-8">
    <br>
	<p class="post"><b><h1 class="small3">Post Hospitalisation Recuperation</h1></b></p>
	<p>Recovery Assistance services take care of all the post procedure requirements of patients.</p>
	<p><span class="dotte_1">&#9830;</span>Assisting with discharge formalities</p>
	<p><span class="dotte_1">&#9830;</span>Monitoring post surgery recovery needs</p>
	<p><span class="dotte_1">&#9830;</span>Follow up consultations</p>
	<p><span class="dotte_1">&#9830;</span>Medicine adherence and patient education.</p>
	<p><span class="dotte_1">&#9830;</span>Provide regular updates </p>
	<p>Patient can approach us anytime for repeat visit and referrals using their unique ID.</p>
	</div>
    <?php require_once('side_form.php');?>
	</div>
	</div>
	</div>
	</div>
	<!-- Our Footer -->
	<!-- Our CopyRight Section -->
	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b892fea8282220011a09452&product=sticky-share-buttons"></script>
	<br>
	<br>
	<br>
	<?php require_once('footer.php');?>
<?php
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$services = $_POST['services']; 
	$sql = "INSERT INTO post (name, address, phone,services)
	VALUES ('$name','$address', '$phone', '$services')";

if ($conn->query($sql) === TRUE) {
echo "<script type=\"text/javascript\">window.location.href = 'post.php';</script>";
exit;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
