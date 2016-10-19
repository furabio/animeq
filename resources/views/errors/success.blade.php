@if(Session::has('success'))
    <div class="alert alert-success" role="success">
        {{ Session::get('success') }}
    </div>
@endif