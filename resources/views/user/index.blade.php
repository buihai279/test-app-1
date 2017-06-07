@extends('layouts.app')
@section('content')
	<div class="col-sm-12 col-md-6 col-lg-6" style="border: 1px solid #f1f1f1">
		@php
		@endphp
		<table class="table table-striped">
		 	<tr>
		 		<th>id</th>
		 		<th>name</th>
		 		{{-- <th>description</th> --}}
		 		<th>Photo</th>
		 		<th>Price</th>
		 		<th>option</th>
		 	</tr>
			@foreach ($users as $user)
				<tr>
				  	<td>{{$user->id}}</td>
				  	<td>{{$user->name}}</td>
				  	<td>{{$user->email}}</td>
				  	<td><img src="{{ asset('uploads/'.$user->avatar) }}"	height="40px"></td>
				  	<td>
				  		@if ($user->level==1)
				  			<span class="label label-success">Admin</span>
				  		@elseif($user->level==0)
					  		<span class="label label-info">Member</span>
				  		@endif
					  	
				  	</td>
				  </tr>
			@endforeach
		</table>
		{{$users->links()}}
	</div>
@endsection
