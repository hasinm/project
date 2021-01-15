<!DOCTYPE html>
<html>

<head>
    <title>#shoppin - Contact</title>
</head>
<script>
        function myFunction(e) {
            text_box = document.getElementsByClassName('inputs');
            span_obj = document.getElementsByClassName('message');
            if (text_box[0].value == '') {
                span_obj[0].innerHTML = '<b>Please enter your First Name&emsp;&nbsp;Please enter your Sur name</b>';
                span_obj[0].style.color = 'red';
             }
             
            
             if (text_box[1].value == '') {
                span_obj[1].innerHTML = '<b>Please enter your mobile number</b>';
                span_obj[1].style.color = 'red';
             }
             
             if (text_box[2].value == '') {
                span_obj[2].innerHTML = '<b>Please enter your Email id</b>';
                span_obj[2].style.color = 'red';
                
             }
             if (text_box[3].value == '') {
                span_obj[3].innerHTML = '<b>Please complete your message<b>';
                span_obj[3].style.color = 'red';
             }
             return false;
            }
        function submit{
            document.getElementById("basic-text1").submit();
        }
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
        input[type="submit"] {
            font-family: FontAwesome;
            font-size: 1.3333333333333333em;
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
        .fa-search{
            position:relative;
        }
        </style>
    <body>
    <div class="container-fluid">
          <div class="row"> 
          <div class="col-lg-12" style="background-color:	#556B2F;">
          <form action = "{{URL::to('/search')}}" method="post" role="search">
          {{ csrf_field() }}
          <table width="100%" cellspacing="0">
  	            <tr>
                  <td><h1 class="fixed-bg">#shoppin</h1> </td>
                 <td><div class="input-group-append"><input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search" name="q">
                <input type="submit" value="&#xf002;">
                </div></td>
                
                   
            <td><a href="{{url('/home') }}">&emsp; Home</td>
            <td><a href="{{url('/products') }}">Products</a></td>
            <td><a href="{{url('/cart') }}">Cart</a></td>
            <td  class="active">&emsp;Contact</td>


</tr>
            </table>
            </div>
</div>
    <table>
        <br><h3>Contact Us</h3>
        <p  class="form-group"><input type="text" placeholder="Firstname" class="inputs" style="padding-right:30px;">&emsp;&emsp;<input type="text" placeholder="Surname" class="inputs" style="padding-right:30px;"></p>
        <p><span class = "message"></span></p>
        <p class="form-group"><input type="text" placeholder="Mobile Number" class="inputs" style="padding-right:270px;"></p>
        <p  class="form-group"><span class = "message"></span></p>
        <p class="form-group"><input type="text" placeholder="Email" class="inputs" style="padding-right:270px;"></p>
        <p  class="form-group"><span class = "message"></span></p>
        <p  class="form-group"><textarea class="inputs" style="padding-right:285px;">Your message here...</textarea></p>
        <p  class="form-group"><span class = "message"></span></p>
        <input type="button" style="font-family:Helvetica, sans-serif;color:white;
         text-align:center;font-size:17px;padding-left:20px;padding-right:25px;
         background-image:linear-gradient(#67ae55, #578843);border-radius:5px;width:180px;height:30px;" 
        value="Submit"></td>
                    </tr>
            
</td>
            </table>
        </body>