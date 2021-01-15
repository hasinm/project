<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>#Shoppin</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
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
    @import url('https://fonts.googleapis.com/css?family=Quicksand');
    .fixed-bg {
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 100%;
    width: 100%;
    color: #556B2F;
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
.caption title{
  color: white;
}
    body{
      background-image: url('/images/project/background.jpg');
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
							<center>	Admin <span class="primary"><strong>Login</strong></center></span>
							</h2></h1>
                    </div>
                </div>
			</div>
		</div>
    </div>		
<form action="{{url('enter_admin')}}" method="post" enctype="multipart/form-data">{{ csrf_field() }}
	<h3 align="center" style="color:gold">Kindly login to perform admin privileges</h3>
	<table border="1" width="100" height="100" align="center" id="form_tab">
		<th bgcolor="green" style="color:pink">&emsp;&emsp;&emsp;Login Here</th>
		<tr>
		<td><input type="text" name="username" placeholder="username"></td>
	    </tr>
	    <tr>
	    <td><input type="password" name="password"  placeholder="password"></td>
	    </tr>
	    <tr>
		<td align="center"><input type="submit" value="Login"></td><br>
		</tr>
    <tr>
    <td align="center" style="color:teal;"><br>New User? <button><a href="{{ url('admadd')}}">Sign Up</a></button></td>
    </tr>
	</table>
</form>
</body>
</html>