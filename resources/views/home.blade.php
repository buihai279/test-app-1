@section('title')
Home page
@endsection
<style type="text/css">
  @medi
</style>
@extends('layouts.app')
@section('content')
    <div class="col-sm-12 col-md-3 col-lg-3">
       @include('layouts.left-content')
    </div>
    <div class="col-sm-12 col-md-9 col-lg-9">
      <div class="panel panel-default">
        <div class="panel-heading">Home page</div>
        <div class="panel-body">
          @if (count($products)<1)
              <h3 class="text-danger">No result</h3>
          @endif
          @foreach ($products as $product)
              <div class="col-sm-4" style="height: 330px;margin-bottom:15px;overflow: hidden;">
                  <div class="panel panel-default">
                    <div class="panel-body bg-success" >
                      <img src="{{asset('uploads/'.$product->photo) }}" class="img-responsive" style="max-height: 200px; margin: 0 auto">
                      <h5 style="height: 30px;overflow: hidden;" data-toggle="tooltip" title="Product: {{$product->name}}">
                        <a href="{{ route('detail',$product->id) }}">{{$product->name}}</a>
                      </h5>
                      <h5><span class="glyphicon glyphicon-tag"></span> {{number_format($product->price)}} $</h5>
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
