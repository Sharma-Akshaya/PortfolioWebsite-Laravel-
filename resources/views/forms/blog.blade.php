<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-width">
		<title>Portfolio</title>
		<link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('/css/blog.css')}}">

	</head>
	<body id="wrapper">

	<header>
	<div class="line">
            <div class="insideline">
                <div >
                    <p><strong>LATEST FROM BLOG</strong></p>
                </div>
            </div>
        </div>
	</header>
	<h4><center>All Articles<span id="blucol"> Here</span></center></h4>
	
	<div class="rowblog">

@php( $forms = \App\blog::all() )  
 @foreach($forms as $key => $data)
            <div id="columnblog" >
                <img class="imageblog"src="{{url('/image/blog/1.jpeg')}}"  alt="ArticleImage">
                <p class="blogtopic">{{$data->Title}}</p>
				<p id="blogcontent">{{$data->Article}}
				<hr id="blogbelow"><span id="blogbelow">
				<i class="icon fa fa-user"></i> Akshaya Sharma &nbsp;&nbsp;<i class="icon fa fa-tags"></i> {{$data->BlogID}}&nbsp;&nbsp;<i class="icon fa fa-comments-o"></i>14 </span></p>
                   
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