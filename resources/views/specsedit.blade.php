@extends('homedesign')
@section('content')
<fieldset>
	<table align="center" border="2" width="40%">
	<form name="phpform" action = "{{url('add_img')}}" method="post" enctype="multipart/form-data"> 
	@csrf 
    <input type = "hidden" name="id" value="{{$product->id}}">
	<center style="color:yellow">Add Product Image 2<br><small><i>Please fill your details</i></small></center>
    <tr><td align="left" width="20%"> Product Name </td><td style="color:black"> <input type="text" name="pname" value="{{$product->product_name}}"></td></tr>	
	<tr><td align="left">Product Image2</td><td style="color:black"> <input type="file" name="primg2" id="fileToUpload2"></tr>
    <tr><td></td><td align="right"><br><button type="submit" class="btn btn-info" name="formsubmit">Update</button></td></tr>
    </form>
	</table>
</fieldset>
@endsection

