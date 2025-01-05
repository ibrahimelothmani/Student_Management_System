@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Page
        </div>

        <div class="card-body">
            <form action="{{ route('batches.update',$batches->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="">Batch Name</label>
                <input type="text" name="name" class="form-control" required value="{{ $batches->name }}"> <br>

                <label for="">Course Name</label>
                <input type="text" name="course_id" class="form-control" required value="{{ $batches->course->name }}"> <br>

                <label for="">Start Date</label>
                <input type="date" name="start_date" class="form-control" required value="{{ $batches->start_date }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
