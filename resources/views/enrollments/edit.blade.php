@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Students Page
        </div>

        <div class="card-body">
            <form action="{{ route('enrollments.update', $enrollments->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="">Enroll No</label>
                <input type="text" name="enroll_no" class="form-control" required value="{{ $enrollments->enroll_no }}"> <br>

                <select name="batch_id" id="batch_id" class="form-control">
                    @foreach ($batches as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                <label for="">Student</label>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach ($students as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
                <label for="">Join date</label>
                <input type="date" name="join_date" class="form-control" required value="{{ $enrollments->join_date }}">
                <br>
                <label for="">Fee</label>
                <input type="text" name="fee" class="form-control" required value="{{ $enrollments->fee }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
