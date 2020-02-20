<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-----References : https://stackoverflow.com/questions/20525820/css3-simple-donut-chart */--->
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="{{asset('/css/portfolio.css')}}">

	</head>
	<body id="wrapper">
	<header>
	<div class="line">
            <div class="insideline">
                <div >
                    <h4>Skills</h4>
                </div>
            </div>
        </div>
		</header>
		
		<div id="containerskills">
        <div class="rowskills" id="skillsfontsize">
            <div class="column1skills" >
                MARKETABLE SKILLS
				
				@php( $forms = \App\marketableskills::all() )  
				@php( $owners = \App\transferable::all()) 
				@foreach($forms as $key => $data)
				<style>
		#webtech1{
	    width: {{$data->Percentage}}%;
		height: 30px;
		position: absolute;
		background-color: #5A69A6;
		}
  </style>
				
                <div class="Bar">
                <div id="webtech1"> 
                    <span class="Area ">{{$data->Skill}}</span>
                    <span class="Percent ">{{$data->Percentage}} %</span>
                </div>
                </div>
                @endforeach
                
                
            </div>
            <div class="column1skills" >
                TRANSFERABLE SKILLS
				
				@foreach($owners as $key => $da)
								<style>
		#com1{
	    width: {{$da->Percentage}}%;
		height: 30px;
		position: absolute;
		background-color: #5A69A6;
		}
  </style>
				
                <div class="Bar">
                <div id="com1">
                    <span class="Area">{{$da->Skill}}</span>
                    <span class="Percent">{{$da->Percentage}} %</span>
                </div>
                </div>
				@endforeach
                
                
        </div>
    </div>
    <br><br>
    LANGUAGE SKILLS & KNOWLEDGE
    <br><br>
	
	@php( $languages = \App\languages::all()) 
	@foreach($languages as $key => $lan)
	
	<style>
	.spanish1 .circle_animation {
    -webkit-animation: spanish1 1s ease-out forwards;
    animation: spanish1 1s ease-out forwards;
  }
	
	@-webkit-keyframes spanish1 {
  to {
    stroke-dashoffset: 440-({{$lan->Percentage}}/100*440);
  }
  }
  
  @keyframes spanish1 {
  to {
    stroke-dashoffset:440-({{$lan->Percentage}}/100*440);
  }
  }
  </style>
	
	
    <div class="log spanish1" >
	
	

	
	
        <h2>{{$lan->Percentage}}%</h2>
        <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
            <g>
                <title>Layer 1</title>
                <circle class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="8" stroke="#6fdb6f" fill="none"/>
            </g>
        </svg>
        <h3>{{$lan->Know}}</h3>
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