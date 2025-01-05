@if (Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
        @php
            Session::forget('flash_message');
        @endphp
    </div>
@endif


@if (Session::has('flash_update'))
    <div class="alert alert-info">
        {{ Session::get('flash_update') }}
        @php
            Session::forget('flash_update');
        @endphp
    </div>
@endif


@if (Session::has('flash_delete'))
    <div class="alert alert-danger">
        {{ Session::get('flash_delete') }}
        @php
            Session::forget('flash_delete');
        @endphp
    </div>
@endif
