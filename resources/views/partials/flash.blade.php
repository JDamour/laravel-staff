@if(Session::has('above-navbar-message') && auth()->check())
    <div class="alert alert-info status-box" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {!! Session::get('above-navbar-message') !!}
    </div>
@endif
@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('status') }} status-box">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        {{ Session::get('message') }}
    </div>
@endif