@extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            Enrollments Page Show
        </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Enroll No: {{ $enrollments->enroll_no }}</h5>
                <p class="card-text">Batch: {{ $enrollments->batch->name }}</p>
                <p class="card-title">Student: {{ $enrollments->student->name }}</p>
                <p class="card-title">Join Date: {{ $enrollments->join_date }}</p>

                <p class="card-title">Fee: {{ $enrollments->fee }}</p>


            </div>

            <hr>
        </div>
    </div>
@endsection
