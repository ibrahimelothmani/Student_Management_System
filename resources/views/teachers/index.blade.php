@extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('teachers.create') }}" class="btn btn-success btn-sm" title="Add new teacher">
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
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->address }}</td>
                                <td>{{ $teacher->mobile }}</td>
                                <td> <a href="{{ route('teachers.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('teachers.edit', $teacher->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('teachers.destroy', $teacher->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Really delete teacher?')">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    {{ $teachers->links() }}
            </div>
        </div>
    </div>
@endsection
