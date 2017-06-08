@extends('layouts.app')
@section('content')

    <div class="col-sm-12 col-md-4 col-lg-3">
       @include('layouts.left-content')
    </div>
    <div class="col-sm-12 col-md-8 col-lg-9">
    <div class="panel panel-default">
      <div class="panel-heading">Home page</div>
      <div class="panel-body">
        @if (count($products)<1)
            <h3 class="text-danger">No result</h3>
        @endif
        @foreach ($products as $product)
            
            <div class="col-sm-4" style="max-height: 310px;margin-bottom:15px;overflow: hidden;">
                <div class="panel panel-default">
                  <div class="panel-body bg-success" >
                    <img src="{{asset('uploads/'.$product->photo) }}" class="img-responsive" style="max-height: 200px; margin: 0 auto">
                    <h4 style="height: 20px;overflow: hidden;"><a href="{{ route('detail',$product->id) }}">{{$product->name}}</a></h4>
                    <h5><span class="glyphicon glyphicon-tag"></span> {{$product->price}} $</h5>
                  </div>
                </div>
            </div>
        @endforeach
        <div class="clearfix">
        
        </div>
        {{ $products->links() }}
      </div>
    </div>

    </div>

@endsection
