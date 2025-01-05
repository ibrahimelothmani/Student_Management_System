@extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>enrollment Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('enrollments.create') }}" class="btn btn-success btn-sm" title="Add new enrollment">
                Add New
            </a>
            <br />
            <br />

            <x-alert></x-alert>


            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Enroll no</th>
                            <th>Batch</th>
                            <th>Student</th>
                            <th>Join Date</th>
                            <th>Fee</th>
                            <th>Actions</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($enrollments as $enrollment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enrollment->enroll_no }}</td>
                                <td>{{ $enrollment->batch->name }}</td>
                                <td>{{ $enrollment->student->name }}</td>
                                <td>{{ $enrollment->join_date }}</td>
                                <td>{{ $enrollment->fee() }}</td>


                                <td> <a href="{{ route('enrollments.show', $enrollment->id) }}"
                                        class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('enrollments.edit', $enrollment->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Really delete enrollment?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $enrollments->links() }}
            </div>
        </div>
    </div>
@endsection
