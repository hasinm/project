<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#Shoppin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <script src="https://kit.fontawesome.com/e7898c17ee.js" crossorigin="anonymous"></script>
    <script>
    var msg = "{{Session::get('alert')}}";
    var exist = "{{Session::has('alert')}}";
    if(exist){
        alert(msg);
    }
</script>   

<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    
    .mid-center {
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    .card {
        height: 370px;
        margin-top: auto;
        margin-bottom: auto;
        width: 700px;
        background-color: white;
    }
    
    .fbheader h3 {
        color: #3b5998;
        margin-top: 10px;
        font-size: 20px;
        margin-left: 10px;
    }
    
    .formc {
        margin-left: 50px;
    }
    input[type="submit"] {
            font-family: FontAwesome;
            font-size: 1.3333333333333333em;
    }
    a{
          text-decoration:none;
          color: #9cb4d8;
        }
    
    .footer {
        background-color: white;
        height: 55px;
        width: 100%;
    }
    
    * {
        box-sizing: border-box;
    }
    
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: white;
        margin-top: 25px;
        border: none;
    }
    
    form.example button {
        float: left;
        width: 40px;
        height: 45px;
        padding: 10px;
        background: #E5E7E9;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
        margin-top: 25px;
        border: none;
    }
    
    form.example button:hover {
        background: #E5E7E9;
        ;
    }
    
    form.example::after {
        content: "";
        clear: both;
        display: table;
    }
    
    .update {
        background-color: #3b5998;
        height: 35px;
        border: none;
        margin-top: 10px;
        width: 40px;
    }
    .profilen {
        height: 200px;
        margin-top: 20px;
        margin-bottom: auto;
        width: 700px;
        background-color: white;
    }
    
    .profilen2 {
        height: 200px;
        margin-top: 100px;
        width: 700px;
        background-color: white;
    }
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
.breadcrumb{
          background-color:	#556B2F;
          margin-left:700px;
        }
        .breadcrumb > li + li:before{
                padding: 0 5px;
                content:"|";
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
        ul.dropdown-menu.show{
          background-color:seagreen;
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
                 <td><div class="input-group-append"><input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
  
    <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search"
        aria-hidden="true"></i></span>
  </div></td>
                
                   
            <td>&emsp;<a href="{{url('/home') }}"> Home</td>
            <td class="active"><a href="{{url('/products') }}">Products</a></td>
            <td style="background-image: url('/images/project/products.png');background-repeat: no-repeat;background-size: 60px 60px;"><a href="{{url('/cart') }}">Cart</a></td>
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

        <div class="row h-1000" style="background-color: #E5E7E9 ;height:500px">
            <div class="container">
                <div class="d-flex justify-content-center h-100">
                    <div class="card">
                        <div class="fbheader">
                        <br><br><h2 class="fixed-bg" style="color:teal;">User Login</h2>
                        <hr>
                        </div>
                        <form class="formc" action="{{url('home_action')}}" method="post"> {{ csrf_field() }}
                        <center><strong>Username:</strong> <input type="text" name="contact" style="padding-right:30px;width: 50%;" required></center><br>
                        <center><p  class="form-group"><span class = "message"></span></p></center>
                        <center><strong>Password:</strong> &nbsp;<input type="password" name="security" style="padding-right:30px;width: 50%;margin-top:5px;"></center><br>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2" style="text-align: right;"></div>
                                <div class="col-sm-10">
                                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<button type="submit" style="background-color:teal; color:white; height: 28px; font-size: 15px;">Log In</button>
                                &emsp;<a href="{{ url('forgetpwd')}}">Forgot Password? </a>
                                <br><br>New User? <button style="background-color:teal; width: 100px; font-size: 15px;"><a href="{{ url('uadd')}}" style="color:white;">Sign Up</a></button></center>
                                   
                                </div>
                            </div>
                        </form>
                        
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="footer">

    </div>
</body>

</html>