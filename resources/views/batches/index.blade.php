    @extends('main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Batches</h2>
        </div>
        <div class="card-body">
            <a href="{{ route('batches.create') }}" class="btn btn-success btn-sm" title="Add new batche">
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
                            <th>Batch Name</th>
                            <th>Course Name</th>
                            <th>Start Date</th>
                            <th>Actions</th>
                        </tr>


                    </thead>
                    <tbody>
                        @foreach ($batches as $batche)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $batche->name }}</td>
                                <td>{{ $batche->course->name }}</td>
                                <td>{{ $batche->start_date }}</td>
                                <td> <a href="{{ route('batches.show', $batche->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('batches.edit', $batche->id) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('batches.destroy', $batche->id) }}" method="post"
                                        style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Really delete batche?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $batches->links() }}
            </div>
        </div>
    </div>
@endsection
