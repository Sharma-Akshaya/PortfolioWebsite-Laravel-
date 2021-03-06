<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ADMIN</title>
    
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">
    <style>
	.rsideAdmin{
	
	margin-left:20%;
	width:80%;
	height:100%;
	
	/*
	position: fixed;*/
	overflow: auto;
}
      .outterakbox {
	  width:70%;
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 0px,0px,0px,20px;
      
      }
      form {
      width: 100%;
	  height: -webkit-fill-available;
      padding: 30px;
      border-radius: 6px;
      background: #fff;
	  outline: none;
       
      }
      
      #FormInput{
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      width: 70%;
      padding: 5px;
      
      
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
     
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
  
      .elementsAdminAbout input:hover, .elementsAdminAbout textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .elementsAdminAbout {
      position: relative;
      margin: 10px 0;
      margin-left:20%;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
    
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
     
     
     
      .ButtonAdminAbout {
      margin-top: 10px;
      text-align: center;
      }
      
	  .head{
		text-align: center;
	  }
      
    </style>
  </head>
  <body>
	<div class="main">
		<div class="navdiv">
			<nav class="">
			<img src="{{url('/image/logo.png')}}" alt="logoOfTiger" class="HLogo">
			<img src="{{url('/image/nombre1.png')}}" alt="AkshayaSharmma" class="HLogon" >
			<ul>
			    <li><a href="/AdminAbout" class=""><strong>ADMIN PANAL</strong></a></li>
				<li><a href="/AdminAbout" class=""><strong>ABOUT ME</strong></a></li>
				<li><a href="/Adminlogin" class=""><strong>LOGIN DETAILS</strong></a></li>
				
				<li><a href="/Adminresume" class=""><strong>RESUMES</strong></a></li>
				
				<li><a href="/home" class=""><strong>GUEST VIEW</strong></a></li>
				<li><a href="/Adminhireme" class=""><strong>HIRE ME</strong></a></li>
				<li><a href="/Adminreference" class=""><strong>REFERENCES</strong></a></li>
				<li><a href="/Adminskills" class=""><strong>SKILLS</strong></a></li>
				<li><a href="/DownloadCVportfolio" class=""><strong>PORTFOLIO</strong></a></li>
				<li><a href="/entry" class=""><strong>LOG OUT</strong></a></li>
				
			</ul>
			<footer style="color:white; padding:0px 9px 9px 9px;">&copy;DiazApps ALL RIGHTS RESERVED BY<span id="blucol">Akshaya Sharma</span></footer>
			</nav>
		</div>

 <!---INSERT INTO `portfolio`(`Name`, `Image`, `IDGenerated`-->

		<div class="rsideAdmin">
			<div class="outterakbox">
				<form action="{{action('FormController@adminportfolio')}}" method="POST">
					{{csrf_field()}}
					<div class="head">
						<h2>PORTFOLIO AND CV ACCESS</h2>
					</div>
					<div class="elementsAdminAbout">
						<p>PORTFOLIO</p>
					
						<input type="file" name="Image"  id="FormInput" >
					</div>
						<div class="ButtonAdminAbout">
						<button type="submit"  ID="button" name="InsertP" href="/">Insert Image</button>
					</div>
					
					<div class="elementsAdminAbout">
						<p>CV to Download</p>
						<input type="file" name="resume"  id="FormInput" >
					</div>
					<div class="ButtonAdminAbout">
						<button type="submit"  ID="button" name="InsertR" href="/">Insert Resume</button>
						
					</div>
					
					
				</form>
			</div>
		</div>
	</div>
    
  </body>
</html>
