<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="widht=device-width">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/portfolio.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  </head>
  <body id="wrapper">
    <div class="line">
            <div class="insideline">
                <div >
                    <h5>ABOUT ME</h5>
                </div>
            </div>
        </div>
    <div class="row">
      <div class="column1 fimage">
    
        <?php
        /*if(!empty($ProfilePic)){
        echo '<img class="faceimage" src="data:image/jpeg;base64,'.base64_encode( $ProfilePic ).'"/>';
        }else{
                        echo '<img src="{{url('image/akshaya.PNG')}}"/ class ="faceimage">';
                    }*/
                    ?>
                 <img src="{{url('image/akshaya.PNG')}}"/ class ="faceimage">
        <p>Developer / 3D Design</p>
      </div>
      <div class ="column rtext">
        <div class ="lefticoncolumn">
          <div class="flex-container">
            <i class="icon fa fa-user"></i>
            <span class="iconheading">Name 
            <!--<br><?php  $name; ?> <?php$lname; ?></span>-->
          </div>
          <div class="flex-container">
            <i class="icon fa fa-volume-control-phone"></i>
            <span class="iconheading">Phone 
            <br>{{$forms['Phone']}}</span>
          </div>
          <div class="flex-container">
            <i class="icon fa fa-map-marker"></i>
            <span class="iconheading">Address 
            <br>{{$forms['Address']}}</span>
          </div>  
        </div>
          <div class ="lefticoncolumnRight">      
            <div class="flex-container">
            <i class="icon fa fa-envelope"></i>
            <span class="iconheading">Email 
            <br>{{$forms['Email']}}</span>
          </div>
          <div class="flex-container">
            <i class="icon fa fa-calendar"></i>
            <span class="iconheading">Date Of Birthday 
            <br>{{$forms['DtaeOfBirth']}}</span>
          </div>
          <div class="flex-container">
            <i class="icon fa fa-flag"></i>
            <span class="iconheading">Nationality 
            <br>{{$forms['Nationality']}}</span>
          </div>
        </div>
      <div class= "column2">
        <p> Social Profiles 
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-pinterest"></a>
        <a href="#" class="fa fa-google-plus"></a>
        <a href="#" class="fa fa-snapchat"></a></p> 
        <p> {{$forms['Description']}}.</p>
        <br>
        <p>Yours sincerely,</p>
      
        <?php 
        /*if(!empty($Signature)){
        echo '<img class="iamge1" src="data:image/jpeg;base64,'.base64_encode( $Signature ).'"/>';  }else{
                        echo '<img src="{{url('image/twke3.jpg')}}" class ="iamge1">';
                    }*/
                    ?>
                    <img src="{{url('image/twke3.jpg')}}" class ="iamge1">
        <footer id="footer">
        <div class="flex-container">            
            <a href="home.html" class=""><i class="fa fa-arrow-up"></i></a>
        </div>
    </footer>
      </div>
      </div>
    </div>
    
  </body>
</html>