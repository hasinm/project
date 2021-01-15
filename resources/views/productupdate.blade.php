@extends('homedesign')
@section('content')

	<table align="center" border="2" width="40%">
	<form name="phpform" action = "{{url('update_product')}}" method="post" enctype="multipart/form-data"> 
	{{ csrf_field() }} 
    <input type = "hidden" name="id" value="{{$product->id}}">
	<center style="color:yellow">Edit Products<br><small><i>Update your details</i></small></center>
	<tr><td>Sub Category Name</td><td><input type="text" name="scname" value="{{$product->s_categoryName}}"></td></tr>
	<tr><td align="left" width="20%"> Product Name </td><td> <input type="text" name="pname" value="{{$product->product_name}}"></td></tr>	
    <tr><td align="left">Upload product image:</td><td><input type="file" name="fileToUpload" id="fileToUpload" value="{{$product->product_image}}">
	</td></tr>
	<tr><td align="left">Product Price </td><td> <input type="text" name="pprice" value="{{$product->product_price}}"></td></tr>
	<tr><td></td><td align="right"><button class="btn btn-info text-center"><a href="{{URL::to('add_jpg/'.$product->id)}}" >Update Picture 1</a></button>
    <button class="btn btn-info text-center"><a href="{{URL::to('add_img/'.$product->id)}}" >Add Picture 2</a></button>
    <button class="btn btn-info text-center"><a href="{{URL::to('add_pic/'.$product->id)}}" >Add Picture 3</a></button></td></tr>
	<tr><td></td><td align="right"><input type="submit" name="formsubmit" value="Update"></td></tr>
    </form>
	</table>
@endsection

