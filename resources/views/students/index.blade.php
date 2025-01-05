@extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm" title="Add new Student">
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
                            <th>Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Actions</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->mobile }}</td>
                                <td> <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('students.edit', $student->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Really delete student?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
