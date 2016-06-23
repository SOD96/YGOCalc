@if (Session::has('errors'))
    <div class="alert alert-danger" role="alert">
        <button class="close" data-dismiss="alert"></button>
        <strong>Oops: </strong>An error has occured with your last action. Please try again, and if you see this message again. Notify an administrator.
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <button class="close" data-dismiss="alert"></button>
        <strong>Success: </strong>{{ Session::get('success') }}
    </div>
@endif

@if (Session::has('message'))
    <div class="alert alert-info" role="alert">
        <button class="close" data-dismiss="alert"></button>
        <strong>Info: </strong> {{ Session::get('message')}}
    </div>
@endif
