@extends('layouts.app')

@section('content')

    <div class="col-sm-12 col-md-6 col-lg-3">
        
    </div>
    <div class="col-sm-12 col-md-6 col-lg-9">


        @foreach ($products as $product)
            
            <div class="col-sm-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <img src="{{asset('uploads/'.$product->photo) }}" class="img-responsive" alt="Responsive image">
                    <h3><a href="{{ route('detail',$product->id) }}">{{$product->name}}</a></h3>
                  </div>
                </div>
            </div>

        @endforeach
        {{ $products->links() }}

    </div>

@endsection
