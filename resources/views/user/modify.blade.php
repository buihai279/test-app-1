@extends('layouts.app')
@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Update</div>
	                <div class="panel-body">
	                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
	                        {{ csrf_field() }}

	                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	                            <label for="name" class="col-md-4 control-label">Name</label>

	                            <div class="col-md-6">
	                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

	                                @if ($errors->has('name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('name') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>
	                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
	                            <label for="avatar" class="col-md-4 control-label">Old Avatar</label>

	                            <div class="col-md-6">

	                        			<img style="max-width: 300px" src="{{ asset('uploads/'.$user->avatar) }}">
	                                
	                            </div>
	                        </div>
	                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
	                            <label for="avatar" class="col-md-4 control-label">New Avatar</label>

	                            <div class="col-md-6">
	                                <input type="file" accept="image/*" name="avatar">
	                                @if ($errors->has('avatar'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('avatar') }}</strong>
	                                    </span>
	                                @endif
	                                <small><i>You can change new avatar</i></small>
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

	                            <div class="col-md-6">
	                                <input id="email" type="email" class="form-control" value="{{ $user->email }}" readonly="readonly">
	                            </div>
	                        </div>


	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" name="change-info" value="submit" class="btn btn-success">
	                                    Update profile
	                                </button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Change password</div>
	                <div class="panel-body">
	                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
	                        {{ csrf_field() }}

	                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                            <label for="password" class="col-md-4 control-label">Old Password</label>

	                            <div class="col-md-6">
	                                <input id="password" type="password" class="form-control" name="password" required>

	                                @if ($errors->has('password'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
	                            </div>
	                        </div>

	                        <div class="form-group">
	                            <label for="newpassword" class="col-md-4 control-label">New Password</label>

	                            <div class="col-md-6">
	                                <input id="newpassword" type="password" class="form-control" name="newpassword" required>
	                            </div>
	                            @if ($errors->has('newpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpassword') }}</strong>
                                    </span>
                                @endif
	                        </div>

	                        <div class="form-group">
	                            <label for="newpassword-confirm" class="col-md-4 control-label">Confirm Password</label>

	                            <div class="col-md-6">
	                                <input id="newpassword-confirm" type="password" class="form-control" name="newpassword_confirmation" required>
	                            </div>
	                            @if ($errors->has('newpassword_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpassword_confirmation') }}</strong>
                                    </span>
                                @endif
	                        </div>


	                        <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" name="change-pass" value="submit" class="btn btn-success">
	                                    Update password
	                                </button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
