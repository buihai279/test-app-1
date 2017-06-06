@extends('layouts.app')
                        

@section('content')
    <div class="col-xs-12 col-sm-12 col-lg-3">
        <img src="{{asset('img/'.Auth::user()->avatar) }}" class="img-responsive" alt="Image">
        <h3>{{Auth::user()->name}}</h3>
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-9">
        
        <div class="col-md-6">
            <img src="{{asset('img/'.$product->photo) }}" class="img-responsive" alt="Image">
        </div>
        <div class="col-md-6">
            <h3>{{$product->name}}</h3>
            <p>Price:{{$product->price}}$</p>
            <p>{{$product->description}}</p>
        </div>
    </div>

@endsection
