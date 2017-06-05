@extends('layouts.app')

@section('right-content')
        
        <div class="col-md-6">
                <img src="{{asset('img/'.$product->photo) }}" class="img-responsive" alt="Image">
            </div>
            <div class="col-md-6">
                <h3>{{$product->name}}</h3>
                <p>Price:{{$product->price}}$</p>
                <p>{{$product->description}}</p>
            </div>

@endsection
