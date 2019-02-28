<html>
<head>
<title> Non-Seamless-kit</title>
</head>
<body>
<center>

<?php include('Crypto.php');


?>
<?php 	
	$merchant_data='193707';
	$working_key='A4C9ADA58B1F834293D6C0F4065AEBD0';//Shared by CCAVENUES
	$access_code='AVAJ80FJ97AU13JAUA';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
//echo "<pre>";print_r($_REQUEST);die;
//
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

