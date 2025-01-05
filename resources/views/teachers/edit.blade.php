@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Page
        </div>

        <div class="card-body">
            <form action="{{ route('teachers.update',$teachers->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ $teachers->name }}"> <br>

                <label for="">Address</label>
                <input type="text" name="address" class="form-control" required value="{{ $teachers->address }}"> <br>

                <label for="">Mobile</label>
                <input type="text" name="mobile" class="form-control" required value="{{ $teachers->mobile }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
