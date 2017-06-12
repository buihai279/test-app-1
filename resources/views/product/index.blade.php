@section('title')
Manager product
@endsection
@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6">
		<table class="table table-striped">
		 	<tr>
		 		<th>Id</th>
		 		<th width="40%">Name</th>
		 		<th>Photo</th>
		 		<th>Price</th>
		 		<th>Option</th>
		 	</tr>
		 	@if (count($products)<1)
		 	<tr>
			 	<td colspan="5">
		 			No result
			 	</td>
		 	</tr>
		 	@endif
			@foreach ($products as $product)

			@if(session('active-id')==$product->id)
   				<tr class="success">
   			@else
				<tr>
			@endif
				  	<td>{{$product->id}}</td>
				  	<td>{{$product->name}}</td>
				  	<td><img src="{{ asset('uploads/'.$product->photo) }}"	height="40px"></td>
				  	<td>{{number_format($product->price)}} $</td>
				  	<td>
				  		<a href="{{ route('product.edit',$product->id) }}"  data-toggle="tooltip" title="Edit: {{$product->name}}">
				  			<i class="glyphicon glyphicon-pencil"></i>
			  			</a> 
				  		<a href="{{ route('detail',$product->id) }}" target="_bank"  data-toggle="tooltip" title="Open new tab: {{$product->name}}">
				  			<i class="glyphicon glyphicon-eye-open"></i>
			  			</a>
				  	</td>
				  </tr>
			@endforeach
		</table>
		{{$products->links()}}
	</div>
	<div class="col-sm-12 col-md-6 col-lg-6">
		<h4>Create new product</h4>
		<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
		    {{ csrf_field() }}

		  <div class="form-group">
		    <label for="inputNameProduct">Name product</label>
		    <input type="text" autofocus value="{{ old('txtNameProduct') }}" name="txtNameProduct" class="form-control" id="inputNameProduct" autocomplete="off" placeholder="Name product" required>
		  </div>

		  <div class="form-group">
		    <label for="inputDes">Decription</label>
		    <textarea name="txtDescription" id="inputTxtdescription" class="form-control" rows="3">{{ old('txtDescription') }}</textarea>
		  </div>

		  <div class="form-group">
		    <label for="inputPrice">Price</label>
		    <input type="text" name="txtPrice" value="{{ old('txtPrice') }}" class="form-control" id="inputPrice" placeholder="Price" required>
		  </div>
		  
		  <div class="form-group">
		    <label for="inputFile">Image Product</label>
		    <input type="file" accept="image/*" name="filePhoto"  required id="inputFile">
            <small><i>Upload Image Product.</i></small>
		  </div>
		  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Add product</button>
		</form>
	</div>
</div>
@endsection
