<!DOCTYPE html>
<html>

<head>
    <title>#shoppin - Search</title>
</head>
<script>
        
        function submit{
            document.getElementById("basic-text1").submit();
        };
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e7898c17ee.js" crossorigin="anonymous"></script>
    <style>
         @import url('https://fonts.googleapis.com/css?family=Quicksand');
        .breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
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
        h3{
            color:forestgreen;
        }
        .input-group.md-form.form-sm.form-2 input.lime-border {
          border: 1px solid #cddc39;

        }
        .pl-0, .px-0 {
          padding-left: 900;
          padding-right: 800;
  
        }
        a{
          text-decoration:none;
          color: #9cb4d8;
        }
        input[type="submit"] {
            font-family: FontAwesome;
            font-size: 1.3333333333333333em;
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
    <body>
    <div class="container-fluid">
          <div class="row"> 
          <div class="col-lg-12" style="padding-right:100px;background-color:	#556B2F;">
          <form action = "{{URL::to('/search')}}" method="post" role="search">
          {{ csrf_field() }}
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
                 <td><div class="input-group-append"><input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search" name="q">
                  <input type="submit" value="&#xf002;">
                </div></td>
  </form>              
                   
            <td>&emsp;<a href="{{url('/home') }}"> Home</td>
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
            @if(isset($details))
            <center><p><br> The Search results for your query <b> {{ $query }} </b> are:</p>
                <h2>Product Details</h2>
                
                @foreach($details ?? '' as $user) 
                
            <div class="col-lg-3 col-md-4 col-sm-6">
            <a href="{{URL::to('sum/'.$user->id)}}" style="color:black;text-decoration:none;">
            <p>Name: {{$user->product_name}}</p>
            <p><img src="{{asset('uploads/'.$user->product_image)}}" alt="image" alt="image" width="100px" height="100px"></p>
            <p>Category: {{$user->s_categoryName}}</p>
            <p>Price: Rs.{{$user->product_price}}</p></a>
            <button class="btn btn-primary align-center"><a href="{{URL::to('add_tocart/'.$user->id)}}" style="color:navy;">Add to Cart</a></button> 
            <br><br><div class="row">
            </div>
          </div>

          @endforeach
          @elseif(isset($message))
          <p>{{ $message }}</p>
            @endif;
            </div>
</div></center>
    </body>
</html>
