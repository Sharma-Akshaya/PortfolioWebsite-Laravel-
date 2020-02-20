<?php
if(isset($_POST["submit"])){
// Checking For empty Fields if any.....
if($_POST["yourname"]==""||$_POST["email"]==""||$_POST["phonenumber"]==""||$_POST["messageif"]==""){
echo "Fill All Fields..";
}else{
// Check if the Sender's Email field is inputted with some value
$email=$_POST['email'];
// Sanitization of E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validation of E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$email2 = $_POST['email'];
$subject = $_POST['phonenumber'];
$message = $_POST['messageif'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
// Send Mail By PHP Mail Function
if(mail("akshaya762@gmail.com", $subject, $message, $headers)){
echo "<script>window.alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";
echo "<script>window.location.href='contactme.php'</script>";
}
else{
    echo "Not sent....";
}
}
}
}
?>