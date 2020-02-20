<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n");
	
	$Company = $_POST['Company'];
		    $Post =$_POST['Post'];
		    $Start =$_POST['Start'];
		    $End =$_POST['End'];
		    $Year =$_POST['Year'];
	if (isset($_POST['Insert']))
	{
		if(isset($_POST['Company']) and isset($_POST['Post']) and isset($_POST['Start']) and isset($_POST['End']) and isset($_POST['Year']))
		{
		    $Company = $_POST['Company'];
		    $Post =$_POST['Post'];
		    $Start =$_POST['Start'];
		    $End =$_POST['End'];
		    $Year =$_POST['Year'];
			$sql="INSERT INTO resume (Company,Post,Start,End,IDGenerated,Year) VALUES ('$Company','$Post','Start','$End','2','$Year')";
			
			if ($mydb->query($sql) === TRUE)
			{
				echo"<script type='text/javascript'>window.alert('Data Inserted in database');window.location.href = 'Adminresume.php';</script>";
			}else
			{
				echo"<script type='text/javascript'>alert('Error while inserting');window.location.href = 'Adminresume.php';</script>";
			}		
		}else{
			echo"<script type='text/javascript'>alert('Some fields are empty')window.location.href = 'Adminresume.php';</script>";
		}
		
	}
	
	if(isset($_POST['Delete']))
	{
		$sql2="DELETE FROM `resume` WHERE Company = '$Company'";
		if ($mydb->query($sql2) === TRUE) {
			echo"<script type='text/javascript'>window.alert('Data Deleted from database');window.location.href = 'Adminresume.php';</script>";}else{
				echo"<script type='text/javascript'>window.alert('Data not in Table')window.location.href = 'Adminresume.php';</script>";
			}	
	}

 
	  
	?>