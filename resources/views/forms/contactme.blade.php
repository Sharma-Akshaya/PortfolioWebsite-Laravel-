<!doctype html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/portfolio.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://smtpjs.com/v3/smtp.js">
</script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	</head>
	<body id="wrapper">
		<header>
		<div class="line">
            <div class="insideline">
                <div >
                    <h4>CONTACT ME</h4>
                </div>
            </div>
        </div>
		</header>
		
		@php( $forms = \App\about::all() )  
			
                @foreach($forms as $key => $data)

		
		<div class="rowcontact">
			<div class="columncontact1">
				<p class="contactheading">CONTACT ADDRESS</p>
		
					<p><i class="fa fa-map-marker"></i>&nbsp;<strong>Address:</strong> {{$data->Address}}<br/>
					<i class="fa fa-phone"></i>&nbsp;<strong>Phone:</strong>{{$data->Phone}}<br/>
					<i class="fa fa-whatsapp"></i>&nbsp;<strong>Whatsapp:</strong>{{$data->Phone}} <br/>
					<i class="fa fa-skype"></i>&nbsp;<strong>Skype:</strong>{{$data->Skype}} <br/> 
					<i class="fa fa-envelope-o"></i>&nbsp;<strong>Email:</strong> <a href="#"  class="conlink">{{$data->Email}}</a> <br/>
					<i class="fa fa-home"></i>&nbsp;<strong>Website:</strong> <a href="#"  class="conlink">{{$data->Website}}</a> <br/>
					</p>
					 @endforeach
				<div>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="$Website" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-pinterest"></a>
					<a href="#" class="fa fa-google-plus"></a>
					<a href="#" class="fa fa-snapchat"></a>        
				</div>
		
			</div>
			<!--<form  method="POST" name = "contactmeak" action="{{action('FormController@sendemail')}}" onSubmit="return validate();">-->
			<form  method="GET" name = "contactmeak" action="{{url('/contactme')}}" onSubmit="return sendEMail();">
			{{csrf_field()}}
			<div class="columncontact2" >
				<p class="contactheading">LET'S HAVE A FUN </p>
				<input placeholder="Your Name" type="text" id="contactinput" name="yourname" required><br>
				<input placeholder="Email" type="text" id="contactinput" name="email" required /><br>
				<input placeholder="Phone" type="text" id="contactinput" name="phonenumber" required><br>
				<textarea placeholder="Your Message" rows="2" cols="50" class="MessageToSend" id="contactinput" name="messageif" required></textarea>
				<br>
				<button type="submit" name="submit" id="button" onclick="validate();">Send Now</button>
			</div>
			</form>
		</div>
		
		<footer id="footer">
			<div class="flex-container">						
				<a href="/home" class=""><i class="fa fa-arrow-up"></i></a>
			</div>
		</footer>		
	</body>
</html>

<script>

function validate(){
    var yourname = document.forms["contactmeak"]["yourname"].value;
    var email = document.forms["contactmeak"]["email"].value;
    var emailformat = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
    var phonenumber = document.forms["contactmeak"]["phonenumber"].value;
    var phoneformat =  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    var messageif = document.forms["contactmeak"]["messageif"].value;
    
    if (yourname == "") {
        alert("Please enter Name");				
        return false;
    }
    if(!email.match(emailformat))
    {
        alert("Please enter a email address as for ex- example@email.com");
        return false;
    }
    if(!phonenumber.match(phoneformat))
    {
            alert("Please enter valid Phone in formt- xxx xxx xxxx");
            return false;   
    }
    if (messageif == "") {
        alert("Please enter some comments");
        return false;
    }
	var subject='this is outside write';
	//document.write('<a href="mailto:akshaya762@gmail.com?subject=' +subject+ '&body=' +messageif+ '">' + 'Click here to send email as well' + '<'+'/a>');

    return true;
}

function sendEMail()
{
	var yourname = document.forms["contactmeak"]["yourname"].value;
	var phonenumber = document.forms["contactmeak"]["phonenumber"].value;
	var email = document.forms["contactmeak"]["email"].value;
	var subject='Message From Your Portfolio';
	var ebody='Guest details : Name :'+yourname+ 'Number :'+phonenumber+' Email Id :'+email+'\n\nMessage :'+messageif;
	var messageif = document.forms["contactmeak"]["messageif"].value;
	  var link = "mailto:akshaya762@gmail.com?subject="+subject+"&body=Guest details :\n    Name :"+yourname+"\n     Number :"+phonenumber+"\n         Email Id :"+email+"\n        Message :"+messageif;

    window.location.href = link;
}

</script>