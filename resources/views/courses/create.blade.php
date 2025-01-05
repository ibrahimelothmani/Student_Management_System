@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Courses Page
        </div>

        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="post">
                @csrf
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" required> <br>

                <label for="">Syllabus</label>
                <input type="text" name="syllabus" class="form-control" required> <br>

                <label for="">Duration</label>
                <input type="text" name="duration" class="form-control" required> <br>

                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>
@stop
