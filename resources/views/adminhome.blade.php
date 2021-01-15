@extends('homedesign')
@section('content')	
                    		  <fieldset>
							  <h2 style ="text-align:center;color:orange;">Welcome <span style="color:royalblue">{{Session::get('adminname')}}</span></h2>
							  <h3 style ="text-align:center;color:orange;">Please Select your Field of Operation:</h3>
							  <p style ="text-align:center"><a href="{{ url('productinsert')}}"><button>Add a Product</button></a></p></br>
							  <p style ="text-align:center"><a href="{{ url('specinsert')}}"><button>Add a Product Specification</button></a></p></br>
							  <p style ="text-align:center"><a href="{{ url('productedit')}}"style ="text-align:center"><button>Edit/Delete a Product</button></a></p>
							  <p style ="text-align:center"><a href="{{ url('admin')}}">Logout</a></p>
                </fieldset>
                @endsection