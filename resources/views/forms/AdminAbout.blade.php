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
      
      
       
      .outterakbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 0px,0px,0px,20px;
      
      }
      form {
      width:80%;
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
  
      input:hover, textarea:hover {
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
		<div class="rsideAdmin">
			<div class="outterakbox">
				<form action="{{action('FormController@adminabout')}}" method="POST">
					{{csrf_field()}}
					<div class="head">
						@php( $forms = \App\about::all() ) 
						@foreach($name as $key => $n)

						<h2>ABOUT ME ACCESS</h2>
					</div>
					<div class="elementsAdminAbout">
						<p>First Name</p>
						<input type="text" id="FormInput" name="name" value="{{$n->FirstName}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Last Name</p>
						<input type="text" id="FormInput" name="lastname" value="{{$n->LastName}}" required>
					</div>
					@endforeach
					@foreach($forms as $key => $data)
					<div class="elementsAdminAbout">
						<p>DtaeOfBirth</p>
						<input type="date" id="FormInput" name="DtaeOfBirth" value="{{$data->DtaeOfBirth}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Address</p>
						<input type="text" name="Address" id="FormInput" value="{{$data->Address}}"required>
					</div>
					<div class="elementsAdminAbout">
						<p>Phone</p>
						<input type="text" name="Phone" id="FormInput" value="{{$data->Phone}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Nationality</p>
						<input type="text" name="Nationality" id="FormInput" value="{{$data->Nationality}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Skype</p>
						<input type="text" name="Skype" id="FormInput" value="{{$data->Skype}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Website</p>
						<input type="text" name="Website" id="FormInput" value="{{$data->Website}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Email</p>
						<input type="text" name="Email" id="FormInput" value="{{$data->Email}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>Signature</p>
						<input type="file" name="Signature" id="FormInput" value="{{$data->Signature}}" required>
					</div>
					<div class="elementsAdminAbout">
						<p>ProfilePic</p>
						<input type="file" name="ProfilePic" id="FormInput" value="{{$data->ProfilePic}}" required>
					</div>
						
					<div class="elementsAdminAbout">
						<p>Description</p>
						<textarea rows="4" id="FormInput" name="Description" required>{{$data->Description}}</textarea>
					</div>
					@endforeach
					<div class="ButtonAdminAbout">
						<button type="submit"  ID="button" href="/">Update Information</button>
					</div>
				</form>
			</div>
		</div>
	</div>
    
  </body>
</html>
