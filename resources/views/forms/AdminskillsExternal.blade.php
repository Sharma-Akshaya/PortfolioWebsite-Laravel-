<?php
	$localhost = 'localhost';
	$username = 'akshayau_akshayaportfolio';
	$password = 'akshaya762';
	$dbname ='akshayau_akshaya_portfolio';
	$mydb= mysqli_connect("$localhost","$username","$password","$dbname")or die("Failed to connect with error- %s\n".$mydb->error);

//languages`(`Know`, `Percentage`, `IDGenerated`

if(isset($_POST['InsertL'])){
    if(isset($_POST['Know']) and isset($_POST['Percentage'])){
	        $Know = $_POST['Know'];
	        $Percentage = $_POST['Percentage'];
	        $query = "INSERT INTO languages (Know,Percentage,IDGenerated) VALUES ('$Know','$Percentage','2')";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>window.alert('Information Inserted!!');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>window.alert('Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
	    } else{
	            echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
}
	    if(isset($_POST['DeleteL'])){
	        $Know = $_POST['Know'];
	        $Percentage = $_POST['Percentage'];
	        $query = "DELETE FROM languages WHERE Know='$Know'";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='Adminskills.html';</script>";
	        }
	    }
		//marketableskills`(`Skill`, `Percentage`, `IDGenerated`
		if(isset($_POST['InsertM'])){
		    if(isset($_POST['Skill']) and isset($_POST['Percentage'])){
	        $Skill = $_POST['Skill'];
	        $Percentage = $_POST['Percentage'];
	        $query = "INSERT INTO marketableskills (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','2')";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
		    }else{
	            echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
	    }
	    if(isset($_POST['DeleteM'])){
	        $Skill = $_POST['Skill'];
	        $Percentage = $_POST['Percentage'];
	        $query = "DELETE FROM marketableskills WHERE Skill='$Skill'";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='Adminskills.html';</script>";
	        }
	    }
	//`transferable`(`Skill`, `IDGenerated`, `Percentage`	
		if(isset($_POST['InsertT'])){
		    if(isset($_POST['Skill']) and isset($_POST['Percentage'])){
	        $Skill = $_POST['Skill'];
	        $Percentage = $_POST['Percentage'];
	        $query = "INSERT INTO transferable (Skill,Percentage,IDGenerated) VALUES ('$Skill','$Percentage','2')";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Inserted!!');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
		    }else{
	            echo "<script type='text/javascript'>window.alert('All Information Not Inserted!!');
                window.location.href='Adminskills.html';</script>";
	        }
	    }
	    if(isset($_POST['DeleteT'])){
	        $Skill = $_POST['Skill'];
	        $Percentage = $_POST['Percentage'];
	        $query = "DELETE FROM transferable WHERE Skill='$Skill'";
	        if(mysqli_query($mydb, $query)){
	           echo "<script type='text/javascript'>alert('Information Deleted...');
                window.location.href='Adminskills.html';</script>";
	       }
	       else{
	            echo "<script type='text/javascript'>alert('Error deleting....');
                window.location.href='Adminskills.html';</script>";
	        }
	    }
	?>