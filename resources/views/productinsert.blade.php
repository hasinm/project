@extends('homedesign')
@section('content')

	<table align="center" border="2" width="40%">
	<form name="phpform" action = "{{url('add_product')}}" method="post" enctype="multipart/form-data"> 
	@csrf 
	<center style="color:yellow">Add Products<br><small><i>Please fill your details</i></small></center>
	<tr><td>Sub Category Name</td><td style="color:black"><input type="text" name="scname"></td></tr>
	<tr><td align="left" width="20%"> Product Name </td><td style="color:black"><br> <input type="text" name="pname">	
    <tr><td align="left">Upload product image:</td><td><input type="file" name="fileToUpload" id="fileToUpload">
	</td></tr>
	<tr><td align="left">Product Price </td><td style="color:black"> <input type="text" name="pprice"></td></tr>
	
    <tr><td></td><td align="right"><br><button type="submit" class="btn btn-info" name="formsubmit">Submit</button></td></tr>
    </form>
	</table>

@endsection

