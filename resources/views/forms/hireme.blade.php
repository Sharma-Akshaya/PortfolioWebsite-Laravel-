<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="{{asset('/css/portfolio.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	</head>
	<body id="wrapper">
	<header>
	<div class="line">
            <div class="insideline">
                <div >
                    <h5>HIRE ME</h5>
                </div>
            </div>
        </div>
	</header>
	
	
	
	
	@php( $forms = \App\hireme::all() )  
    @foreach($forms as $key => $data)
	
	
	<div class="rowhireme">
            <div id="columnhireme" >
                <img class="imagehireme"src="{{url('/image/car1.png')}}"  alt="Cartpic">
                
                    <p>${{$data->Cost}}</p>
                    <p>{{$data->JobTitle}}</p>
                    <p>{!!nl2br($data->Task)!!}</p>
                    <hr>
                    <button id="button" type="reset" onclick="location.href='/contactme'">Contact Us</button>
                
            </div>
           
        
	
		@endforeach
	</div>
		<footer id="footer">
			<div class="flex-container">						
				<a href="/home" class=""><i class="fa fa-arrow-up"></i></a>
			</div>
		</footer>		
	</body>
</html>