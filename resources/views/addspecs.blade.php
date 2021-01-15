@extends('homedesign')
@section('content')

	<table align="center" border="2" width="40%">
	<form name="phpform" action = "{{url('add_specs')}}" method="post" enctype="multipart/form-data"> 
	@csrf 
	<center style="color:yellow">Add Product Specifications<br><small><i>Please fill your details</i></small></center>
	<tr><td align="left" width="20%"> Product Name </td><td style="color:black"> <input type="text" name="pname"></td></tr>	
	<tr><td align="left">Product Specifications </td><td style="color:black"> <textarea name="specs"></textarea></td></tr>
	<tr><td align="left">Product Image1</td><td style="color:black"> <input type="file" name="primg1" id="fileToUpload1"></td></tr>
	<tr><td></td><td align="right"><br><button type="submit" class="btn btn-info" name="formsubmit">Submit</button></td></tr>
    </form>
	</table>

@endsection

