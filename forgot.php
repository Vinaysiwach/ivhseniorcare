
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
                <h1>Change your Password</h1>
                   <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
             <form name="chngpwd" action="" method="post" onSubmit="return valid();">
              <table align="center">
			  <tr height="50">
			  <td>Email:</td>
			  <td><input type="text" name="email" id="enteremail"></td>
			  </tr>
		  <tr height="50">
			  <td>New Passowrd :</td>
			  <td><input type="password" name="npwd" id="npwd"></td>
			  </tr>
		  <tr height="50">
			  <td>Confirm Password :</td>
			  <td><input type="password" name="cpwd" id="cpwd"></td>
			  </tr>
			  <tr>
			  <td><a class="loginpage"href="index.php">Back to login Page</a></td>
			  <td><input type="submit" name="Submit" value="Change Passowrd" /></td>
			  </tr>
                <tr>
              <td></td>
              <td></td>
              </tr>
			  </table>
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
