@section('title')
List user
@endsection
@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6">
		@php
		@endphp
		<table class="table table-striped">
		 	<tr>
		 		<th>Id</th>
		 		<th>Name</th>
		 		<th>Email</th>
		 		<th>Avatar</th>
		 		<th>Level</th>
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
	
</div>
@endsection
