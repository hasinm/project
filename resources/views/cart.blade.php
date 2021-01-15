<html>
    <head>
        <title>#Shoppin - Cart</title>
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
          background-image:url('/images/project/bg.jpg');
          margin-top:100px;
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
        .shop_table{
            background-color:#28B463 ;
            border-radius: 10px 5px;
            
        }
        .tab_col{
            background-color:lightblue; 
            color:#34495E;
        }
        .tab_dis{
            color:#34495E;
        }
        .remove{
            color:red;
        }
        .input-group.md-form.form-sm.form-2 input.lime-border {
          border: 1px solid #cddc39;

        }
        .pl-0, .px-0 {
          padding-left: 900;
          padding-right: 800;
  
        }
        input[type="submit"] {
            font-family: FontAwesome;
            font-size: 1.3333333333333333em;
        }
        a{
          text-decoration:none;
          color: #9cb4d8;
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
                
                   
            <td>&emsp;<a href="{{url('/home') }}"> Home</td>
            <td><a href="{{url('/products') }}">Products</a></td>
            <td class="active" style="background-image: url('/images/project/products.png');background-repeat: no-repeat;background-size: 60px 60px;color:white;">Cart<span class="article__fresh">{{ Cart::count() }}</span></td>
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
 <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br>
                    <br>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Explore Products From...</h2>
                        <div class="thubmnail-recent">
                            <img src="{{url('img/thumb-9.jpg')}}" class="recent-thumb" alt="">
                            <h2><a href="{{url('fsnproducts')}}">Fashion</a></h2>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="{{url('img/thumbnail-4.jpg')}}" class="recent-thumb" alt="">
                            <h2><a href="{{url('books')}}">Books</a></h2>                            
                        </div>
                        <div class="thubmnail-recent">
                            <img src="{{url('img/product-5.jpg')}}" class="recent-thumb" alt="">
                            <h2><a href="{{url('gadgets')}}">Gadgets</a></h2>                            
                        </div>
                        
                        
                    </div>
                    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                        <div class="col-lg-12">
                        <h2 style="margin-left:130px;font-family:Raleway;"><u>C A R T</u></h2>
                        </div>
                            <form method="post" action="#">
                                <table cellspacing="2" class="shop_table cart" style="padding:130px 150px 130px 150px;">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <br>
									<tr class='cart_item'>
                                    
                                    @foreach(Cart::content() as $row) 
                                            <td class='product-remove tab_col'>
                                                <a title='Remove this item' class='remove' href="{{URL::to('del_fromcart/'.$row->rowId)}}">×</a> 
                                            </td>
                                            <td class='product-name tab_col'>
                                                <a href='#' class="tab_dis">{{$row->name}}</a> 
                                            </td>
                                            <td class='product-price tab_col'>
                                                <span class='amount'>Rs.{{$row->price}}</span> 
                                            </td>
											<td class='product-price tab_col'>
                                                <span class='amount'>1</span> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td class="actions" colspan="6">
                                            <button><a class="add_to_cart_button" rel="nofollow" href="{{url('cartcln')}}">CLEAR CART</button></a>
                                            <button><a class="add_to_cart_button" rel="nofollow" href="{{url('checkout')}}">CHECKOUT</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                            


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>
                                
                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">: Rs.{{ Cart::subtotal() }}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>: Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">: Rs.{{ Cart::total() }}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br><br>
                            <h2>Wishlist Items</h2>
                            <p>Not thinking of buying now? Don't worry just add them to your <button class="btn btn-success"><a href="{{url('wishlist')}}">W I S H L I S T</a></button><span class="article__fresh">{{$count ?? ''}}</span></p> 
                            <table>
                            @foreach(Cart::content() as $row)
                            <tr>
                            <td><strong>{{$row->name}}&nbsp;</strong></td>
                            <td><strong>&nbsp;Rs.{{$row->price}}&nbsp;</strong></td>
                            <td>&nbsp;<button class="btn btn-success"><a href="{{url('add_towshl/'.$row->id)}}" style="color:yellow;">Add to Wishlist</button></a>
                            </td>
                             
                            </tr>
                            </table>
                            @endforeach
                            </div>

         
                            <table>
        <br><h3>Enter your Shipping Address</h3><form action ="{{url('add_adrs') }}" method="post" enctype="multipart/form-data">{{ csrf_field() }}
        <p  class="form-group"><input type="text" placeholder="Firstname" class="inputs" style="padding-right:30px;" name="fname">&emsp;&emsp;<input type="text" placeholder="Surname" class="inputs" style="padding-right:30px;"></p>
        <p><span class = "message"></span></p>
        <p class="form-group"><input type="text" placeholder="Address Line 1" class="inputs" style="padding-right:270px;" name="adrs1"></p>
        <p  class="form-group"><span class = "message"></span></p>
        <p class="form-group"><input type="text" placeholder="Address Line 2" class="inputs" style="padding-right:270px;" name="adrs2"></p>
        <p  class="form-group"><span class = "message"></span></p>
        <p  class="form-group"><input type="text" placeholder="Pin Code" class="inputs" style="padding-right:270px;" name="pincode"></p>
        <p  class="form-group"><span class = "message"></span></p>
        <input type="submit" style="font-family:Helvetica, sans-serif;color:white;
         text-align:center;font-size:17px;padding-left:20px;padding-right:25px;
         background-image:linear-gradient(#67ae55, #578843);border-radius:5px;width:180px;height:30px;" 
          value="Submit"></td><br>
                    </tr>
            
</td>
            </table>
            </form>
                            


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>


       <!-- End footer top area -->
                <br><br>                    
                <br><br>
    <div>
        <div class="container">
            <div class="row" style="background-color:black;">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2020 #Shoppin Inc. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>
