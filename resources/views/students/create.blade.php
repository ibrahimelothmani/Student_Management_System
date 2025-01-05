@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Students Page
        </div>

        <div class="card-body">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required> <br>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <label for="">Address</label>
                <input type="text" name="address" class="form-control" required> <br>
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <label for="">Mobile</label>
                <input type="text" name="mobile" class="form-control" required> <br>
                @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>
@stop
