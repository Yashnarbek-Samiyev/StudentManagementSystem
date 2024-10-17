@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Payments</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New Payment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Id</th>
                                    <th>Paid Date</th>
                                    <th>Amount</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Automatic numbering for each course -->
                                        <td>{{ $item->enrollment_id }}</td>
                                        <td>{{ $item->paid_date }}</td>
                                        <td>{{ $item->amount }}</td>
                                        <td>
                                            <!-- View course details -->
                                            <a href="{{ url('/payments/' . $item->id) }}" title="View Payment">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>

                                            <!-- Edit Course details -->
                                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <!-- Delete course -->
                                            <form method="POST" action="{{ url('/payments/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
{{--                                            <a href="{{ url('/reports/' .$item->id ) }}" title="Edit Payment"><button class="btn btn-success"><i class="fa fa-print" aria-hidden="true"></i>Print</button></a>--}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
{{--                        <div class="pagination-wrapper">--}}
{{--                            {!! $students->links() !!}--}}
{{--                        </div>--}}
                    </div>
                </div>

@endsection
