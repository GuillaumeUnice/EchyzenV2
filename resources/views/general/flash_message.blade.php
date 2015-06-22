

@if (Session::has('flash_error'))
    <div class="alert alert-danger"> {{ Session::get('flash_error') }} </div><br/>
@endif

@if (Session::has('flash_success'))
    <div class="alert alert-success"> {{ Session::get('flash_success') }} </div><br/>
@endif

@if (Session::has('flash_info'))
    <div class="alert alert-info"> {{ Session::get('flash_info') }} </div><br/>
@endif

@if (Session::has('flash_primary'))
    <div class="alert alert-primary"> {{ Session::get('flash_primary') }} </div><br/>
@endif

@if (Session::has('flash_warning'))
    <div class="alert alert-warning"> {{ Session::get('flash_warning') }} </div><br/>
@endif
