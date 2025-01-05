@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Students Page
        </div>

        <div class="card-body">
            <form action="{{ route('students.update',$students->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ $students->name }}"> <br>

                <label for="">Address</label>
                <input type="text" name="address" class="form-control" required value="{{ $students->address }}"> <br>

                <label for="">Mobile</label>
                <input type="text" name="mobile" class="form-control" required value="{{ $students->mobile }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
