@extends('layouts.app')
                        

@section('content')
    <div class="col-xs-12 col-sm-12 col-lg-3">
        @include('layouts.left-content')
    </div>
    <div class="col-xs-12 col-sm-12 col-lg-9">
        
        <div class="col-md-6">
            <img src="{{asset('uploads/'.$product->photo) }}" class="img-responsive" alt="Image">
        </div>
        <div class="col-md-6">
            <h3>Name: {{$product->name}}</h3>
            <p>Price: {{$product->price}}$</p>
            <p>Description: {{$product->description}}</p>
        </div>
    </div>

@endsection
