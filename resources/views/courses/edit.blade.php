@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Courses Page
        </div>

        <div class="card-body">
            <form action="{{ route('courses.update',$courses->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required value="{{ $courses->name }}"> <br>

                <label for="">Syllabus</label>
                <input type="text" name="syllabus" class="form-control" required value="{{ $courses->syllabus }}"> <br>

                <label for="">Duration</label>
                <input type="text" name="duration" class="form-control" required value="{{ $courses->duration }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
