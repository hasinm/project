<html>
    <head>
        <title>Project</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e7898c17ee.js" crossorigin="anonymous"></script>
      <style>
        @import url('https://fonts.googleapis.com/css?family=Quicksand');
        .wrapper {
  height: 100%;
  font-family: 'Quicksand', sans-serif;
  line-height: 1.5;
  word-spacing: 4px;
  letter-spacing: 1px;
}

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

.fixed-bg h1 {
  display: table-cell;
  vertical-align: middle;
}

.scroll-bg {
  background-color: #0f0f0a;
  padding: 10px 70px;
  color: #676767;
}

/* first section */

.bg-1 {
  background-image: url('/images/project/cloth.jpg');
}

/* third section */

.bg-2 {
  background-image: url('/images/project/books.jpg');
}

/* fifth section */

.bg-3 {
  background-image: url('/images/project/gadgets.jpg');
}
body{
  background-image: url('/images/project/stay.jpg');
}
        
        .breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
            }
        .textfield{
          text-align:center;
          background-image:url('https://media.giphy.com/media/j1z0fyUD68vOjTpqG3/giphy.gif');
          background-repeat:none;
          background-size:stretch;
          padding-bottom:20px;
        }
        .center{
          display: block;
          margin-left: auto;
          margin-right: auto;
          
        }
        a{
          text-decoration:none;
          color: #9cb4d8;
        }
        marquee{
          font-size:50px;
          
          background-repeat: no-repeat;
          margin-left:30px;
        }
        .input-group.md-form.form-sm.form-2 input.lime-border {
          border: 1px solid #cddc39;

        }
        .pl-0, .px-0 {
          padding-left: 900;
          padding-right: 800;
  
        }
        ul.dropdown-menu.show{
          background-color:seagreen;
        }
        .article__fresh {
          position: relative;
          top: -15;
          left: 0;
          padding: 0.1px 0.2px;
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
        input[type="submit"] {
            font-family: FontAwesome;
            font-size: 1.3333333333333333em;
        }
      </style>
      </head>
    <body>
      <div class="container-fluid">
      <div class="row">
                <div class="col-lg-12" style="padding-right:100px;background-color:	#556B2F;">
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
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<h3 align = "left"></h3></td>

<script>
function openNav() {
document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
document.getElementById("mySidenav").style.width = "0";
}
</script>
                  <td><h1 class="fixed-bg">#shoppin</h1> </td>
                 <form action = "{{URL::to('/search')}}" method="post" role="search">
                 {{ csrf_field() }}
                 <td><div class="input-group-append"><input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search" name="q">
                <input type="submit" value="&#xf002;">
                </div></td>
    
                
                   
            <td class="active" style="color:white;">&emsp; Home</td>
            <td><a href="{{url('/products') }}">Products</a></td>
            <td style="background-image: url('/images/project/products.png');background-repeat: no-repeat;background-size: 60px 60px;"><a href="{{url('/cart') }}">Cart</a><span class="article__fresh">{{ Cart::count() }}</span></td>
            <td>@if(session()->get('username'))<span style="color:gold;"><button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">{{Session::get('username')}}</button>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
            <li><a href="{{url('wishlist')}}" style="color:white;">&nbsp;My Wishlist</a></li>
            <li><a href="{{url('logout')}}" style="color:white;">&nbsp;Logout</a></li>
            </ul>
            </span>@else&emsp;<button class="btn btn-success"><a href="{{url('/hlogin') }}" style="color:white;">Log In</button></a>@endif</td>
            </tr>
            </table>
            </div>
</div>
<h3 style="color:#17202A;background-image: url('https://media.giphy.com/media/JmVItNiJ8PGSnDVf0e/giphy.gif');background-repeat:no-repeat;background-size:cover;padding-bottom:150px;">
<marquee behavior="slide"></marquee><center>50% OFF</center></h3>
<div class="textfield">
<marquee behavior="alternate"><h3 style="margin-top:10px;padding-right:100px;width: 50%;color:#ff0040;font-family: Quicksand;">&emsp;&emsp;WELCOME  TO  BIG#OPPIN  EXPERIENCE !</h3></marquee>
         </div>
         <div class="wrapper"> <!-- wrapper div starts -->
  
  <div class="fixed-bg bg-1">
    <h1><a href="{{url('fsnproducts') }}">#Fashion</a></h1>
  </div>
  
  <div class="scroll-bg">
    <h3>Pose in your Hashtags</h3>
  </div>
  
  <div class="fixed-bg bg-2">
    <h1><a href="{{url('books') }}">#Books</a></h1>
  </div>
  
  <div class="scroll-bg">
    <h3>Post with your Hashtags</h3>
  </div>
  
  <div class="fixed-bg bg-3">
    <h1><a href="{{url('gadgets') }}">#Gadgets</a></h1>
  </div>
  <div class="scroll-bg">
    <h3>Watch with the World</h3>
  </div>
  </div>
</div>
</html>
