@extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Course Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('courses.create') }}" class="btn btn-success btn-sm" title="Add new course">
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
                            <th>Syllabus</th>
                            <th>Duration</th>
                            <th>Actions</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->syllabus }}</td>
                                <td>{{ $course->duration() }}</td>
                                <td> <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('courses.edit', $course->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Really delete course?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $courses->links() }}
            </div>
        </div>
    </div>
@endsection
