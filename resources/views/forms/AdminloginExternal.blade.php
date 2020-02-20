<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);        
	
	
	if (isset($_POST['UserName']) and isset($_POST['Password'])){
	
	// Assigning POST values to the variables.
	$UserName = $_POST['UserName'];
	$Password = $_POST['Password'];
	 
	
	$sql = "UPDATE checkin SET UserName='$UserName',Password='$Password' WHERE IDGenerated = 2";

	if ($mydb->query($sql) === TRUE) {
		echo "<script type='text/javascript'>window.alert('Login credential updated');window.location.href = 'AdminAbout.php';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = 'Adminlogin.php';</script>";
    }
	}
	else{
		echo"<script type='text/javascript'>alert('Fields are empty please fill all')window.location.href = 'Adminlogin.php';</script>";
	}
	  
?>