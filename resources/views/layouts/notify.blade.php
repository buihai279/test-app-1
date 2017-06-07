 @if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endforeach
@endif
@if(session('status-success'))
    <div class="alert alert-success">
        {{ session('status-success') }}
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if(session('status-error'))
    <div class="alert alert-danger">
        {{ session('status-error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
        
@endif
