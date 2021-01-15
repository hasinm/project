@extends('homedesign')
@section('content')
<h2 align = "center" margin-left="150" style="color:yellow;">Manage Products</h2> 
<table width="916" border="1" align="center">
	<tr bgcolor="orange">
        <th width="130" class="text-center">Id</th>
		<th width="130" class="text-center">Subcategory Name</th>
		<th width="119" class="text-center">Product Name</th>
        <th width="119">Product Image</th>
        <th width="119" class="text-center">Product Price</th>
		<th colspan="2" class="text-center"><b>Edit(Update/Delete)</b></th>	
	</tr>

@foreach($product ?? '' as $prod_data)
<tr>
   <td class="text-center">{{$prod_data->id}}</td>
   <td class="text-center">{{$prod_data->s_categoryName}}</td>
   <td class="text-center">{{$prod_data->product_name}}</td>
   <td><img src="{{asset('uploads/'.$prod_data->product_image)}}" alt="image" alt="image" width="100px" height="100px"></td>
   <td class="text-center">Rs.{{$prod_data->product_price}}</td>
   <td class="text-center"><a href="{{URL::to('edit_product/'.$prod_data->id)}}" class="btn btn-warning text-center">Edit</a></td>
   <td class="text-center"><a href="{{URL::to('delete_product/'.$prod_data->id)}}" class="btn btn-danger text-center">Delete</a></td>
   </tr>
   @endforeach
   </table>

@endsection