<div class="panel panel-default">
  <div class="panel-heading">User profile</div>
  <div class="panel-body">
    @if (!Auth::guest())
    	<img src="{{asset('uploads/'.Auth::user()->avatar) }}" class="img-responsive">
    	<h4>username: {{Auth::user()->name}}</h4>
    	<h4>email: {{Auth::user()->email}}</h4>
    @else
    	<h3>Guest</h3>
    @endif

  </div>
</div>
