<!--<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="widht=device-width">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">

  </head>
  <body>
  <div class="main">
    <div class="navdiv">
      <nav class="">
      <img src="{{url('image/logo.png')}}" alt="logoOfTiger" class="HLogo">
      <img src="{{url('image/nombre1.png')}}" alt="AkshayaSharmma" class="HLogon" >
      <ul>
        <li><a href="/forms/entry" class=""><strong>HOME</strong></a></li>
        <li><a href="/forms/login#logindiv" class=""><strong>LOG IN</strong></a></li>
        <li><a href="/forms/checkin#checkindiv" class=""><strong>SIGN UP</strong></a></li>
        
      </ul>
      <footer style="color:white; padding:0px 9px 9px 9px;">&copy;DiazApps ALL RIGHTS RESERVED BY<span id="blucol">Akshaya Sharma</span></footer>
      </nav>
    </div>
    <div class="rside">
      <p class="rsidedata">HELLO I'M
      <br><span id="rsideluis">AKSHAYA SHARMA</span>
      <br>FRONT END DEVELOPER
      <br>
      <a href="{{url('image/SWEjava.pdf')}}" download target=blank >
      <button type="button" href="image/SWEjava.pdf" download target=blank ID="button">Download My CV<i class="fa fa-download"></i></button></a>
      
      
      
      
      </p>
    
  </div>
  </body>
</html>-->

<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="widht=device-width">
    <title>Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">

  </head>
  <body>
  <div class="main">
    <div class="navdiv">
      <nav class="">
      <img src="{{url('image/logo.png')}}" alt="logoOfTiger" class="HLogo">
      <img src="{{url('image/nombre1.png')}}" alt="AkshayaSharmma" class="HLogon" >
      <ul>
        <li><a href="/entry" class=""><strong>HOME</strong></a></li>
        <li><a href="#logindiv" class=""><strong>LOG IN</strong></a></li>
        <li><a href="#checkindiv" class=""><strong>SIGN UP</strong></a></li>
        <!-----<li id="liwhite">&copy;DiazApps ALL RIGHTS RESERVED BY <span id="blucol">Luis M Alvarez</span></li>---->
      </ul>
      <footer style="color:white; padding:0px 9px 9px 9px;">&copy;DiazApps ALL RIGHTS RESERVED BY<span id="blucol">Akshaya Sharma</span></footer>
      </nav>
    </div>
    <div class="rside">
      <div id="logindiv" class="overlay">
      <form id="popup" class="modal-content animate" method="POST" name="loginform" action="{{action('FormController@login')}}" >
         {{csrf_field()}}
        <div >
          <label for="uname"><b>Log in</b></label>
          <a class="close" href="/entry">&times;</a><hr>
          <label for="uname"><b>User:</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label for="psw"><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          
          <hr><button type="submit" class="formbutton" ID="button" onclick= 'Javascript:Validation();'>Get In</button><span>&nbsp;</span>
          <button type="reset" onclick="location.href='/entry'" class="formbutton" ID="button">Close</button><span>&nbsp;</span>            
        </div>
      </form>
    </div>

    <div id="checkindiv" class="overlay"  >
      <form id="popup" class="modal-content" method="POST" name = "checkinform" action="checkin.php" >
         {{csrf_field()}}
        <div >
          <label for="uname"><b>Check In</b></label>
          <a class="close" href="/entry">&times;</a><hr>
          <label for="uname" ><b>Name:</b></label>
          <input type="text"  class="loginp" name="name" required>
          <label for="uname"><b>Last name:</b></label>
          <input type="text" name="lastname"class="loginp">
          <label for="uname"><b>Email:</b></label>
          <input type="text" name="email" class="loginp" required>
          <label for="uname"><b>User:</b></label>
          <input type="text" name="user"class="loginp" required>
          <label for="psw"><b>Password:</b></label>
          <input type="password" name="password" required class="loginp">
          <label for="psw"><b>Repeat Password:</b></label>
          <input type="password" name="repeatpassword" class="loginp">
          <hr><button type="submit" class="formbutton" ID="button" onclick= 'Javascript:Validate()'>Save</button>
          <button type="reset" onclick="location.href='/entry'" class="formbutton" ID="button">Close</button>           
        </div>
      </form>
      </div>
      <p class="rsidedata">HELLO I'M
      <br><span id="rsideluis">AKSHAYA SHARMA</span>
      <br>FRONT END DEVELOPER
      <br>
      <a href="{{url('image/SWEjava.pdf')}}" download target=blank >
      <button type="button" href="image/SWEjava.pdf" download target=blank ID="button">Download My CV<i class="fa fa-download"></i></button></a>
      
      
      
      
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
    
    if(!checkPassword(password)) {
      alert("Passwords should contain at least six characters, including lowercase,uppercase letters, special characters!@#$%^&* and numbers.");
      return false;
    }
  } else {
    alert("Error: Please check that you have entered password");
    return false;
  }
  
  return true;
}
  

function Validate(){
  var email = document.forms["checkinform"]["email"].value;
    var name = document.forms["checkinform"]["name"].value;
    var lastname = document.forms["checkinform"]["lastname"].value;
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var user = document.forms["checkinform"]["user"].value;
  var password = document.forms["checkinform"]["password"].value;
    var repeatpassword = document.forms["checkinform"]["repeatpassword"].value;
    
    if (name == "") {
        alert("Please enter First Name");
        return false;
    }
    if (lastname == "") {
        alert("Please enter Last Name");
        return false;
    }
  if (email == "") {
        alert("Please enter valid email address");
        return false;
    }
    if(!email.match(emailformat))
    {
        alert("Please enter a valid email address ex:example@email.com");
        return false;
    }
    if (user== "") 
    {
            alert("Please enter a user name");
            return false;
    }

     if(password != "" && password == repeatpassword) {
      if(!checkPassword(password)) {
        alert("Passwords must contain at least six characters, including uppercase, lowercase letters, special characters!@#$%^&* and numbers.");
        return false;
      }
    } 
  else {
      alert("Error: Please check that you've entered and confirmed your password!");
      
      return false;
    }
   
    return true;
}

function Validateform(){
  var user1 = document.forms["loginform"]["user1"].value;

  var password1 = document.forms["loginform"]["password1"].value;
  if (user1 == "") 
  {
    alert("Please enter a user name");
    return false;
  }
  if(password1 != "") {
      if(!checkPassword(password1)) {
        alert("Passwords must contain at least seven characters, including uppercase, lowercase letters and numbers.");
        return false;
      }
    } else {
      alert("Error: Please check that you've entered your password!");
      return false;
    }

}

</script>