@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Batch
        </div>

        <div class="card-body">
            <form action="{{ route('batches.store') }}" method="post">
                @csrf
                <label for="">Batch Name</label>
                <input type="text" name="name" class="form-control" required> <br>

                <label for="">Course</label>
                {{-- <input type="text" name="course_id" class="form-control" required> <br> --}}
                <select class="form-control" name="course_id" id="course_id">
                    @foreach ($courses as $id => $name)
                        <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>

                <label for="">Start Date</label>
                <input type="date" name="start_date" class="form-control" required> <br>

                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>
@stop
