<!doctype html>
<html lang="en">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">

	</head>
	<body id="wrapper">
	<header>
	<div class="line">
            <div class="insideline">
                <div >
                    <h4>REFERENCES</h4>
                </div>
            </div>
        </div>
		</header>
		
			
@php( $forms = \App\reference::all() ) 
@foreach($forms as $key => $data)
		
		<div id="rowreference" >
                <div class="recommender">
                    
           
                        
                        <img src="{{url('/image/referen/joe.jpg')}}"/>
         
                  
                    <p id="recotitle">{{$data->Name}}</p>
                    <p id="place">{{$data->JobTitle}}</p>
                    <p id="refercontent">{{$data->Recommendation}}</p>
                </div>
                
                    
            </div>            
		
		@endforeach
		
		
		
		<footer id="footer">
				<div class="flex-container">						
						<a href="/home" class=""><i class="fa fa-arrow-up"></i></a>
				</div>
		</footer>
	</body>
</html>