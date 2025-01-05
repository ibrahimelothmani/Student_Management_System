@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Payment
        </div>

        <div class="card-body">
            <form action="{{ route('payments.store') }}" method="post">
                @csrf

                <label for="">Enrollment No</label>
                {{-- <input type="text" name="course_id" class="form-control" required> <br> --}}
                <select class="form-control" name="enrollment_id" id="enrollment_id">
                    @foreach ($enrollments as $id => $enroll_no)
                        <option value="{{ $id }}">{{ $enroll_no }}</option>
                    @endforeach
                </select>
                <label for="">Paid Date </label>
                <input type="date" name="paid_date" class="form-control" required> <br>

                <label for="">amount</label>
                <input type="text" name="amount" class="form-control" required> <br>

                <button type="submit" class="btn btn-success"> Save </button>
            </form>
        </div>
    </div>
@stop
