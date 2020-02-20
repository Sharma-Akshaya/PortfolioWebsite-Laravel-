<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);
	
	//`hireme`(`Cost`, `JobTitle`, `Task`, `JobID`, `IDGenerated`
	$Cost = $_POST['Cost'];
	$JobTitle = $_POST['JobTitle'];
	$Task = $_POST['Task'];
	if(isset($_POST['Insert'])){
	if(isset($_POST['Cost']) and isset($_POST['JobTitle'])and isset($_POST['Task'])){
		$Cost = $_POST['Cost'];
		$JobTitle = $_POST['JobTitle'];
		$Task = $_POST['Task'];
		$sql = "INSERT INTO hireme (Cost,JobTitle,Task,IDGenerated) VALUES('$Cost','$JobTitle','$Task ','2')";
		if ($mydb->query($sql) === TRUE ) {
		echo "<script type='text/javascript'>window.alert('Data Inserted');window.location.href = 'Adminhireme.html';</script>";
    } else {
        echo"<script type='text/javascript'>alert('Error in database')window.location.href = 'Adminhireme.html';</script>";
    }
	}else{
		echo"<script type='text/javascript'>alert('Some fields are empty please fill all')window.location.href = 'Adminhireme.html';</script>";
	}
	}elseif(isset($_POST['Delete'])){
		
		$sql2="DELETE FROM hireme WHERE JobTitle = '$JobTitle'";
		
		if ($mydb->query($sql2) === TRUE) {
			echo"<script type='text/javascript'>window.alert('Data Deleted from database');window.location.href = 'Adminhireme.html';</script>";
			}else{
				echo"<script type='text/javascript'>window.alert('Data not in Table');window.location.href = 'Adminhireme.html';</script>";
			}
					
	}
	?>