<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);
	
	if(isset($_POST['name']) and isset($_POST['lastname'])and isset($_POST['Email'])and isset($_POST['DtaeOfBirth'])and isset($_POST['Address'])and isset($_POST['Phone']) and isset($_POST['Nationality']) and isset($_POST['Skype']) and isset($_POST['Website'])and isset($_POST['Description'])){
	
	// Assigning POST values to the variables.
	
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$Email = $_POST['Email'];
	$DtaeOfBirth  = $_POST['DtaeOfBirth'];
	$Address = $_POST['Address'];
	$Phone = $_POST['Phone'];
	$Nationality = $_POST['Nationality'];
	$Skype = $_POST['Skype'];
	$Website = $_POST['Website'];
	$Description = $_POST['Description'];
	//$Signature = file_get_contents($_FILES["Signature"]["tmp_name"]); 
	$Signature  = addslashes(file_get_contents($_FILES["Signature"]["Signature"])); 
	$ProfilePic = addslashes(file_get_contents($_FILES["ProfilePic"]["tmp_name2"])); 
	
	$sql = "UPDATE checkin SET FirstName='$name',LastName='$lastname' WHERE IDGenerated = 2";
	$sql2 = "UPDATE about SET Phone='$Phone',Address='$Address',DtaeOfBirth='$DtaeOfBirth',Nationality='$Nationality',Signature='$Signature',ProfilePic='$ProfilePic',Description='$Description',Skype='$Skype',Website='$Website',Email='$Email' WHERE IDGenerated = 2";
	if ($mydb->query($sql) === TRUE and $mydb->query($sql2) === TRUE ) {
		echo "<script type='text/javascript'>window.alert('User created Please Login now');window.location.href = 'AdminAbout.php';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = 'AdminAbout.php';</script>";
    }
	}
	else{
		echo"<script type='text/javascript'>alert('Some fields are empty please fill all')window.location.href = 'AdminAbout.php';</script>";
	}
	  
?>