@extends('main')
@section('content')

    <div class="card">
        <div class="card-header">
            Batch show
        </div>
        <div class="card-body">
            <div class="card-body">
                <h5 class="card-title">Batch Name: {{ $batches->name }}</h5>
                <p class="card-text">Course Name: {{ $batches->course->name }}</p>
                <p class="card-title">Start Date: {{ $batches->start_date }}</p>

            </div>

            <hr>
        </div>
    </div>
    @endsection
