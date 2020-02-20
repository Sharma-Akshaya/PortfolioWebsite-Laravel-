<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);
		
	if (isset($_POST['username']) and isset($_POST['password'])){
		$name = $_POST['username'];
		$password = $_POST['password'];
		$isDatapresent = "SELECT * FROM `checkin` WHERE UserName='$name' and Password='$password'";
	
		$result = mysqli_query($mydb, $isDatapresent) or die(mysqli_error("Error".$mydb->error));
		$flag = mysqli_num_rows($result);
		 $res = $mydb -> query($isDatapresent);
		$result1 = $res->fetch_assoc();
		
	
		if ($flag == 1){
		 
	        if($result1['IDGenerated']== 2){
	            	//echo "Login Credentials for admin verified";
		echo "<script type='text/javascript'>window.alert('Login Credentials for Admin verified ..WELCOM Admin');window.location.href = 'AdminAbout.php';</script>";
	        }else{
	        
	        
		//echo "Login Credentials verified";
		echo "<script type='text/javascript'>window.alert('Login Credentials verified');window.location.href = 'home.html';</script>";}
	
		}else{
		echo "<script type='text/javascript'>window.alert('Invalid Login Credentials or user name not found')window.location.href = 'login.html#logindiv';</script>";
		//echo "Invalid Login Credentials";
		}
	}
?>
	