@extends('layouts.app')

@section('right-content')
    @foreach ($products as $product)
        
        <div class="col-sm-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <img src="{{asset('img/'.$product->photo) }}" class="img-responsive" alt="Responsive image">
                <h3><a href="{{ route('detail',$product->id) }}">{{$product->name}}</a></h3>
              </div>
            </div>
        </div>

    @endforeach
    {{ $products->links() }}
@endsection
