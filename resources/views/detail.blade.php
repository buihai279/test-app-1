@section('title')
Product: {{$product->name}}
@endsection
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-3">
            @include('layouts.left-content')
        </div>
        <div class="col-xs-12 col-sm-12 col-lg-9">

            <div class="col-md-6">
                <img src="{{asset('uploads/'. $product->photo) }}" class="img-responsive">
            </div>

            <div class="col-md-6">
                <h3>
                    Name: <b class="text-success">{{ $product->name }}</b>
                    @if (!Auth::guest()&&Auth::user()->level==1)
                        (<a href="{{ route('product.edit',$product->id) }}">Edit</a>)
                    @endif
                </h3>
                <p>Price: <b class="text-primary">{{number_format($product->price)}}</b> $</p>
            </div>
            
            <div class="clearfix"></div>
            <div class="col-md-12">
                <p>
                    <h6>Description: </h6> 
                    @php
                        echo $product->description;
                    @endphp
                </p>
            </div>
        </div>
    </div>
@endsection
