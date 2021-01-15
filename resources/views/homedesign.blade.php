<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>#Shoppin - Admin</title>
    
    <!-- Google Fonts -->
    <link href="{{url('http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300')}}" rel='stylesheet' type='text/css'>
    <link href="{{url('http://fonts.googleapis.com/css?family=Raleway:400,100')}}" rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    body{
  background-image: url('/images/project/background.jpg'); 
}
td{
  color:yellow;
}
.fixed-bg {
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 100%;
    width: 100%;
    color: lime;
    text-align: center;
    display: table;
}

h1 {
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
}
 </style>
  </head>
  <body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
					
                    </div>
                </div>
		   </div>
		</div>
   </div>
   <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                    <h1 style = "text-align:center"><a href="{{ url('home')}}"><h1 class="fixed-bg">#shoppin</h1></a><h2 class="caption title" style="color:white;">
                    <a href="{{ url('admin')}}"><center>	Admin</a> <span class="primary"><strong>Home</strong></center></span>
							</h2></h1>
                    </div>
                </div>
			</div>
		</div>
    </div>		
                    		  <fieldset>
							  </br>
							  @yield('content')
							  </fieldset>
			</body>
</html>