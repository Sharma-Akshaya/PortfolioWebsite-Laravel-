<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);

//INSERT INTO `portfolio`(`Name`, `Image`, `IDGenerated`

if(isset($_POST['InsertP'])){
			if(isset($_POST['Image'])){
			//$Image = $_POST['Image'];
	        $file = addslashes(file_get_contents($_FILES["Image"]["tmp_name"]));  
      //$query = "INSERT INTO tbl_images(name) VALUES ('$file')";
	        $query = "INSERT INTO portfolio (Name,Image,IDGenerated) VALUES ('Apps','$file','2')";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>window.alert('Information Inserted!!');
                window.location.href='DownloadCVportfolio.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>window.alert('Error in Adding');
                window.location.href='DownloadCVportfolio.html';</script>";
	        }
			
			}
	        
	       else{
	            echo "<script type='text/javascript'>window.alert('Information Not Inserted!!');
                window.location.href='DownloadCVportfolio.html';</script>";
	        }
	    }
		
if(isset($_POST['InsertR'])){
			if(isset($_POST['resume'])){
			//$resume= $_POST['resume'];
	         $file = addslashes(file_get_contents($_FILES["resume"]["tmp_name"]));
	        $query = "INSERT INTO DownloadResume (Id,resume) VALUES ('2','$file')";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='DownloadCVportfolio.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Error in Adding');
                window.location.href='DownloadCVportfolio.html';</script>";
	        }
			
			}
	        
	       else{
	            echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='DownloadCVportfolio.html';</script>";
	        }
	    }
		?>