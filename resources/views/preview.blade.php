<html>
    <head>
        <title>#shoppin - Products</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
        $(document).ready(function(){
          function mouseOver() {
            document.getElementById("p").style.color = "purple";
          }
          function mouseOver() {
            document.getElementById("t").style.color = "teal";
          }
          function mouseOver() {
            document.getElementById("d").style.color = "#A9A9A9";
          }
          function mouseOver() {
            document.getElementById("n").style.color = "navy";
          }
          function mouseOver() {
            document.getElementById("m").style.color = "maroon";
          }

        });
        </script>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Quicksand');
            .fixed-bg {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100%; 
            width: 100%;
            color: white;
            text-align: center;
            display: table;
        }
        body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  right: 100;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: red;
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
a{
  text-decoration:none;
  color: #9cb4d8;
}
.checked {
  color: orange;
}
.article__fresh {
    position:relative;
    top: 0;
    left: 0;
    padding: 5px 10px;
    background-color: #00b2a5;
    color: #fff;
    line-height: 1em;
}
.sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          background-color: seagreen;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
        }

        .sidenav a {
          padding: 8px 8px 8px 32px;
          text-decoration: none;
          font-size: 25px;
          color: #818181;
          display: block;
          transition: 0.3s;
        }

        .sidenav a:hover {
          color: #f1f1f1;
        }

        .sidenav .closebtn {
          position: absolute;
          top: 0;
          right: 25px;
          font-size: 36px;
          margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
          .sidenav {padding-top: 15px;}
          .sidenav a {font-size: 18px;}
        }
</style>
</head>
<body>
<div class="container-fluid">
          <div class="row"> 
          <div class="col-lg-12" style="background-color:	#556B2F;">
                <table width="100%" cellspacing="0">
  	            <tr>
                <td><div id="mySidenav" class="sidenav">

<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<h2 style="color:white;">&emsp;Shop By:</h2>
<ul><a href="{{url('fsnproducts')}}">#Fashion</a>
<a href="{{url('books')}}">#Books</a>
<a href="{{url('gadgets')}}">#Gadgets</a>
</ul>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">#<big><a href="{{ url('home')}}" style="color:white;">shoppin</a></big>
<h3 align = "left"></h3></td>

<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
</script>
</tr>
            </table>
            </div>
</div>
<table>
<tr>
@foreach($detail ?? '' as $prod_detail)
 
<br><tr align="center"><td>Product Views (Click on each image for an enlarged view) : <a href="{{url('uploads/'.$prod_detail->productimg1)}}"><img src="{{asset('uploads/'.$prod_detail->productimg1)}}" width="100px" height="100px"></a></td>
<center><td><a href="{{url('uploads/'.$prod_detail->productimg2)}}"><img src="{{asset('uploads/'.$prod_detail->productimg2)}}" width="100px" height="100px"></a></td></center>
<center><td><a href="{{url('uploads/'.$prod_detail->productimg3)}}"><img src="{{asset('uploads/'.$prod_detail->productimg3)}}" width="100px" height="100px"></a></td></center>
<center><br></tr>
<center><tr><p>Product Name: {{$prod_detail->product_name}}</p></tr></center>
<center><tr><p>Specifications:<br> {{$prod_detail->product_details}}</p></tr></center>
            </table>
            <br><br>
            
            <div class="row">
            <div class="dropdown">
            &emsp;Buying/Purchasing Options: <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Select your size
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">S</a></li>
      <li><a href="#">M</a></li>
      <li><a href="#">L</a></li>
      <li><a href="#">XL</a></li>
      <li><a href="#">XXL</a></li>
    </ul>
    </div>
    &emsp;<div class="dropdown" style="margin-left:25px;">
    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Available Colors
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li id="p" onmouseover="mouseOver()"><a href="#">Purple</a></li>
      <li id="t" onmouseover="mouseOver()"><a href="#">Teal</a></li>
      <li id="d" onmouseover="mouseOver()"><a href="#">Dark Grey</a></li>
      <li id="n" onmouseover="mouseOver()"><a href="#">Navy</a></li>
      <li id="m" onmouseover="mouseOver()"><a href="#">Maroon</a></li>
    </ul>
  </div>
  </div>
  
            <center><br><br><h4 style="font-family:Quicksand;">Product Rating:   <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span></h4>
</center>

<!-- Trigger/Open The Modal -->
<center><br><button class="btn btn-primary align-right"><a href="{{URL::to('add_tocart/'.$prod_detail->id)}}" style="color:navy;">Add to Cart</button> 
<a href="{{ url('products')}}"><button class="btn btn-primary text-center" id="myBtn">All Products</button></a></center>
@endforeach
<br>
</body>
</html>
  
    