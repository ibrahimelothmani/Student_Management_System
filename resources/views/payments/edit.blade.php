@extends('main')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit Page
        </div>

        <div class="card-body">
            <form action="{{ route('payments.update',$payments->id) }}" method="post">
                @method('PUT')
                @csrf

                <label for="">Enrollment No</label>
                <input type="text" name="course_id" class="form-control" required value="{{ $payments->enrollment_id }}"> <br>

                <label for="">Paid Date</label>
                <input type="date" name="start_date" class="form-control" required value="{{ $payments->paid_date }}"> <br>

                <label for="">Amount</label>
                <input type="text" name="name" class="form-control" required value="{{ $payments->amount }}"> <br>

                <button type="submit" class="btn btn-success"> Update </button>
            </form>
        </div>
    </div>
@stop
