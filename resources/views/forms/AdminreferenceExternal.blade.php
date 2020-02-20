<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);
	
	//`reference`(`Name`, `Img`, `JobTitle`, `Recommendation`, `IDGeneration`)-->
	$Name = $_POST['Name'];
	//$Img = addslashes(file_get_contents($_FILES['Img']['tmp_name']));
	$Img = addslashes(file_get_contents($_FILES["Img"]["tmp_name"]));  
	$JobTitle = $_POST['JobTitle'];
	$Recommendation = $_POST['Recommendation'];
	if(isset($_POST['Insert'])){
	    if(isset($_POST['Name']) and isset($_POST['JobTitle'])and isset($_POST['Recommendation'])){
		        $Name = $_POST['Name'];
		        $JobTitle = $_POST['JobTitle'];
		        $Img = addslashes(file_get_contents($_FILES["Img"]["tmp_name"])); 
		        $Recommendation = $_POST['Recommendation'];
		        $sql = "INSERT INTO reference (Name,Img,JobTitle,Recommendation,IDGeneration) VALUES('$Name','$Img','$JobTitle','$Recommendation','2')";
		if ($mydb->query($sql) === TRUE ) {
		echo "<script type='text/javascript'>window.alert('Data Inserted');window.location.href = 'Adminreference.html';</script>";
    } else {
        echo"<script type='text/javascript'>window.alert('Error in database');window.location.href = 'Adminreference.html';</script>";
    }
	}else{
		echo"<script type='text/javascript'>window.alert('Some fields are empty please fill all');window.location.href = 'Adminreference.html;</script>";
	}
	}/*elseif(isset($_POST['Delete'])){
		
		$sql2="DELETE FROM reference WHERE Name = $Name";
		if ($mydb->query($sql2) === TRUE) {
			echo"<script type='text/javascript'>alert('Data Deleted from database')window.location.href = 'Adminreference.html';</script>";
			}else{
				echo"<script type='text/javascript'>alert('Data not in Table')window.location.href = 'Adminreference.html';</script>";
			}
					
	}*/
	
	if(isset($_POST['Delete'])){
	        $query = "DELETE FROM reference WHERE Name='$Name'";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>window.alert('Data Deleted from database...');
                window.location.href='Adminreference.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>window.alert('Data not in Table....');
                window.location.href='Adminreference.html';</script>";
	        }
	    }
	
	?>