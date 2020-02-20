<!---logincontent.blade.php-->
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">

	</head>
	<body >
<div class="main">
		<div class="navdiv">
			<nav class="">
			<img src="image/logo.png" alt="logoOfTiger" class="HLogo">
			<img src="image/nombre1.png" alt="AkshayaSharmma" class="HLogon" >
			<ul>
				<li><a href="entry.html" class=""><strong>HOME</strong></a></li>
				
				<li><a href="#logindiv" class=""><strong>LOG IN</strong></a></li>
				<li><a href="checkin.html#checkindiv" class=""><strong>SIGN UP</strong></a></li>
				<!-----<li id="liwhite">&copy;DiazApps ALL RIGHTS RESERVED BY <span id="blucol">Luis M Alvarez</span></li>---->
			</ul>
			<footer style="color:white; padding:0px 9px 9px 9px;">&copy;DiazApps ALL RIGHTS RESERVED BY<span id="blucol">Akshaya Sharma</span></footer>
			</nav>
		</div>
		<div class="rside">
		<div id="logindiv" class="overlay">
			<form id="popup" class="modal-content animate" method="POST" name="loginform" action="login.php" >
				<div >
					<label for="uname"><b>Log in</b></label>
					<a class="close" href="home.html">&times;</a><hr>
					<label for="uname"><b>User:</b></label>
					<input type="text" placeholder="Enter Username" name="username" required>
					<label for="psw"><b>Password:</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
					<hr><button type="submit" class="formbutton" ID="button" onclick= 'Javascript:Validation();'>Get In</button><span>&nbsp;</span>
					<button type="reset" onclick="location.href='entry.html'" class="formbutton" ID="button">Close</button><span>&nbsp;</span>						
				</div>
			</form>
		</div>
			<p class="rsidedata">HELLO I'M
			<br><span id="rsideluis">AKSHAYA SHARMA</span>
			<br>FRONT END DEVELOPER
			<br><button onclick="" ID="button" style="width:auto;">Download My CV  <img src="image/icon.png"></button>
			</p>
		
	
	
		
		</div>
		
	</body>
</html>
		
		
<script>
  function checkPassword(str)
  {
    var re = /^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[A-Z])(?=.*[a-z])[a-zA-Z0-9!@#$%^&*]{6,}$/;
    return re.test(str);
  }

function Validation(){
	
	var user = document.forms["loginform"]["username"].value;
	var password = document.forms["loginform"]["password"].value;	
	if (user == ""){
		alert("Please enter the user name");
		return false;
	}
	if(password != ""){
		
		if(!checkPassword(password1)) {
			alert("Passwords should contain at least six characters, including lowercase,uppercase letters, special characters!@#$%^&* and numbers.");
			return false;
		}
	} else {
		alert("Error: Please check that you have entered password");
		return false;
	}
	
	return true;
}
</script>