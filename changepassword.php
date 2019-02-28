
<?php include "connection.php";
    
    require_once('header.php');
	session_start();
if(isset($_POST['Submit']))
{     
$newpassword=$_POST['npwd'];
$email=$_POST['email'];
$sql=mysqli_query($conn,"SELECT * FROM user where email='$email'");
$num=mysqli_fetch_array($sql);
//echo"<pre>"; var_dump($num); die;
if($num>0)
{
 $update = mysqli_query($conn,"update user set pass='$newpassword' where email='$email'");
 $_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Sorry This Email is not Exist!";
}
}
?>
	<div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Change Password</h1>
                   <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
             <form class=" chngpwd"  name="chngpwd" action="" method="post" onSubmit="return valid();">
             
			  
	   <div class="col-md-3">
		<div class="form-group">
		<input name="Email" class="form-control ulockd-form-fg required" id="enteremail" placeholder="Email" required="required" data-error="Name is required." type="text">
		<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
		<input name="npwd" class="form-control ulockd-form-fg required" id="npwd" placeholder="New Password" required="required" data-error="Passowrd is required." type="text">
		<div class="help-block with-errors"></div>
		</div>
		<div class="form-group">
		<input name="cpwd" class="form-control ulockd-form-fg required" id="cpwd" placeholder="Confirm Passowrd" required="required" data-error="Confirm Passowrd is required." type="text">
		<div class="help-block with-errors"></div>
		</div>
		<div class="col-md-3">
	    <a class="loginpage"href="index.php">Login here</a>			
		</div>
		<div class="col-md-3">
		<input type="submit" name="Submit" value="Change Passowrd" />
		</div>
        </div>
			  </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
<script type="text/javascript">
function valid()
{
if(document.getElementById("enteremail").value=='')
{
alert("Enter The Email");
return false;
}else if(document.getElementById("enteremail").value!=''){
var emailvalue = document.getElementById("enteremail").value;

var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (reg.test(emailvalue) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }
}if(document.getElementById("npwd").value==''){
	alert("Enter The New Passowrd");
    return false;
}else if(document.getElementById("cpwd").value==''){
	alert("Enter The Confirm Passowrd");
    return false;
  }
}

</script>


<?php require_once('footer.php');?>
