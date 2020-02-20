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
                <h4>RESUMES</h4>
            </div>
        </div>
        </div>
		</header><br>
		
@php( $forms = \App\resume::all() )  
				
           
                @php($counter = 1)
                @foreach($forms as $key => $data)
                @if($counter%2 != 0)
	
		
		<div class="timeline" >
			<div class="container left" style= "--content: '{{$data->Year}}'">
				<div class="contentheading">
					<p>{{$data->Company}}</p>
				</div>
				<div class="contenttext">
					<p>{{$data->Post}}({{$data->Start}} till {{$data->End}})</p>
				</div>
			</div>
			
			
		  @php($counter++)
                    @else
		
            <div class="timeline" >
			<div class="container right" style= "--content: '{{$data->Year}}'">
				<div class="contentheading">
					<p>{{$data->Company}}</p>
				</div>
			<div class="contenttext">
				<p>{{$data->Post}}({{$data->Start}} till {{$data->End}})</p>
			</div>
		</div>
		
		
		
		  @php($counter++)
                   @endif
		
		
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