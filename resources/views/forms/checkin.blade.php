<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);        
	
		
	
	if (isset($_POST['name']) and isset($_POST['lastname'])and isset($_POST['email'])and isset($_POST['user'])and isset($_POST['password'])and isset($_POST['repeatpassword'])){
	
	// Assigning POST values to the variables.
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$user  = $_POST['user'];
	$password = $_POST['password'];
	$repeatpassword = $_POST['repeatpassword'];
	
	$sql = "INSERT INTO checkin (FirstName,LastName,Email,UserName,Password)
    VALUES ('$name','$lastname','$email' ,'$user','$password')";
	if ($mydb->query($sql) === TRUE) {
		echo "<script type='text/javascript'>window.alert('User created Please Login now');window.location.href = 'entry.html';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = 'checkin.html#checkindiv';</script>";
    }
	}
?>