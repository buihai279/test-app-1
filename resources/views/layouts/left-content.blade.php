<div class="panel panel-default">
  <div class="panel-heading">User profile</div>
  <div class="panel-body">
    @if (!Auth::guest())
    	<img src="{{asset('uploads/'.Auth::user()->avatar) }}" class="img-responsive">
    	<h4>
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        <b class="text-success">{{Auth::user()->name}}</b>
      </h4>
    	<span>
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
        <small class="text-info">{{Auth::user()->email}}</small> 
      </span>
    @else
    	<h3>
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
        Guest
      </h3>
    @endif

  </div>
</div>
