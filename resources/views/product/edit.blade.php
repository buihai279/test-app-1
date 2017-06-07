@extends('layouts.app')
@section('content')
	<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2" style="border: 1px solid #f1f1f1">
		<h4>Edit product: <b>{{ $product->name}} </b></h4>
		<form method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
		   {{-- {{ method_field('PUT') }} --}}
		   {{ csrf_field() }}
		  <div class="form-group">
		    <label for="inputNameProduct">Name product</label>
		    <input type="text" value="{{$product->name}}" name="txtNameProduct" class="form-control" id="inputNameProduct" autocomplete="off" placeholder="Name product">
		  </div>
		  <div class="form-group">
		    <label for="inputDes">Decription</label>
		    <textarea name="txtDescription" id="inputTxtdescription" class="form-control" rows="3" required="required">{{$product->description}}</textarea>
		  </div>
		  <div class="form-group">
		    <label for="inputPrice">Price</label>
		    <input type="text" name="txtPrice" value="{{$product->price}}" class="form-control" id="inputPrice" placeholder="Price">
		  </div>
		  <div class="form-group">
		    <label for="inputFile">Old Image Product</label>
		  	<img src="{{asset('uploads/'.$product->photo) }}" width="300" class="img-responsive">
		  </div>
		  <div class="form-group">
		    <label for="inputFile">New Image Product</label>
		    <input type="file" name="filePhoto"  id="inputFile">
		    <p class="help-block">You can change image Product.</p>
		  </div>
		  <button type="submit" class="btn btn-default">Update product</button>
		  <button type="submit" class="btn btn-danger" onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">Delete product</button>
		</form>
		<form id="delete-form" action="{{ route('product.destroy',$product->id) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	</div>
@endsection
