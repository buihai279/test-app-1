@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6">
		<table class="table table-striped">
		 	<tr>
		 		<th>id</th>
		 		<th>name</th>
		 		<th>Photo</th>
		 		<th>Price</th>
		 		<th>option</th>
		 	</tr>
		 	@if (count($products)<1)
		 	<tr>
			 	<td colspan="5">
		 			No result
			 	</td>
		 	</tr>
		 	@endif
			@foreach ($products as $product)
				<tr>
				  	<td>{{$product->id}}</td>
				  	<td>{{$product->name}}</td>
				  	<td><img src="{{ asset('uploads/'.$product->photo) }}"	height="40px"></td>
				  	<td>{{$product->price}}</td>
				  	<td><a href="{{ route('product.edit',$product->id) }}">edit</a> | <a href="{{ route('detail',$product->id) }}">view</a></td>
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
		    <input type="text" value="{{ old('txtNameProduct') }}" name="txtNameProduct" class="form-control" id="inputNameProduct" autocomplete="off" placeholder="Name product">
		  </div>
		  <div class="form-group">
		    <label for="inputDes">Decription</label>
		    <textarea name="txtDescription" id="inputTxtdescription" class="form-control" rows="3" required="required">{{ old('txtDescription') }}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="inputPrice">Price</label>
		    <input type="text" name="txtPrice" value="{{ old('txtPrice') }}" class="form-control" id="inputPrice" placeholder="Price">
		  </div>
		  <div class="form-group">
		    <label for="inputFile">Image Product</label>
		    <input type="file" name="filePhoto"  id="inputFile">
		    <p class="help-block">Upload Image Product.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Add product</button>
		</form>
	</div>
</div>
@endsection
