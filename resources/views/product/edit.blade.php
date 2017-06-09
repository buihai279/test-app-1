@extends('layouts.app')
@section('content')
	<div class="col-sm-12 col-md-12 col-lg-8 col-lg-offset-2" style="border: 1px solid #f1f1f1">
		<h4>Edit product: <b>{{ $product->name}} </b></h4>
		<form method="POST" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
		   {{ csrf_field() }}
		  <div class="form-group">
		    <label for="inputNameProduct">Name product</label>
		    <input type="text" value="{{$product->name}}" name="txtNameProduct" class="form-control" id="inputNameProduct"  maxlength='100' autofocus autocomplete="off" placeholder="Name product">
		  </div>
		  <div class="form-group">
		    <label for="inputDes">Decription</label>
		    <textarea name="txtDescription" maxlength='300' id="inputTxtdescription" class="form-control" rows="3" required="required">{{$product->description}}</textarea>





		  </div>
		  <div class="form-group">
		    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
		    <div class="input-group">
		      <div class="input-group-addon">$</div>
		      <input type="text"  name="txtPrice" value="{{$product->price}}" class="form-control" id="inputPrice" placeholder="Price" maxlength='10' minlength='1'  placeholder="Price">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputFile">Old Image Product</label>
		  	<img src="{{asset('uploads/'.$product->photo) }}" width="300" class="img-responsive">
		  </div>
		  <div class="form-group">
		    <label for="inputFile">New Image Product</label>
		    <input type="file" name="filePhoto" accept="image/*" id="inputFile">
		    <p class="help-block">You can change image Product.</p>
		  </div>
		  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Update product</button>
		  <button type="submit" class="btn btn-danger"  formmethod="post" formaction="{{ route('product.destroy',$product->id) }}" ><i class="glyphicon glyphicon-trash"></i> Delete product</button>
		</form>
	</div>
@endsection
