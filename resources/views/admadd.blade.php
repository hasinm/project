@extends('homedesign')
@section('content')
<fieldset>	
<form action="{{url('add_admin')}}" method="post" enctype="multipart/form-data">{{ csrf_field() }}
                   <br>
                   <div class="col-md-4" style="margin-left:450px;border-style:solid;">
                   <br>
                    <h2 style="color:orange"><center><u>Create an Admin Account</u></center></h2>
                    <div class="form-group">
                        <label style="color:white"><b>Enter a Username</b></label>
                        <input class="form-control" type="text" name="username"/> <span class="error_msg"> {{ $errors->first('username') }} </span>
                    </div>
                    <div class="form-group">
                        <label style="color:white"><b>Enter a Password</b></label>
                        <input class="form-control" type="password" name="password"/> <span class="error_msg">{{ $errors->first('password') }}</span>
                    </div>
                        <button type="submit" style="background-color:royalblue">Sign me up</button>
                        <div class="form-group">
                        <label for="inputUserWebsite"><b></b></label>
                    </div>
 </form>
 <fieldset>
 @endsection