    @extends('main')
    @section('content')
        <div class="card">
            <div class="card-header">
                <h2>Payments</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('payments.create') }}" class="btn btn-success btn-sm" title="Add new payment">
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
                                <th>Enrollment No</th>
                                <th>Paid Date</th>
                                <th>Amount</th>
                                <th>Actions</th>
                            </tr>


                        </thead>
                        <tbody>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $payment->enrollment->enroll_no }}</td>
                                    <td>{{ $payment->paid_date }}</td>
                                    <td>{{ $payment->amount() }}</td>
                                    <td> <a href="{{ route('payments.show', $payment->id) }}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('payments.edit', $payment->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('payments.destroy', $payment->id) }}" method="post"
                                            style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Really delete payment?')">Delete</button>
                                        </form>
                                        <a href="{{ url('report/report1/' . $payment->id) }}"
                                            class="btn btn-success">Print</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    @endsection
