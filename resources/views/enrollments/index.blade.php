@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Enrollment Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-sm" title="Add New Enrollment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Enrollment Num</th>
                                    <th>Batch Id</th>
                                    <th>Student</th>
                                    <th>Join Date</th>
                                    <th>Fee</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrollments as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Automatic numbering for each course -->
                                        <td>{{ $item->enroll_num }}</td>
                                        <td>{{ $item->batch->name }}</td>
                                        <td>{{ $item->student->name }}</td>
                                        <td>{{ $item->join_date }}</td>
                                        <td>{{ $item->fee }}</td>
                                        <td>
                                            <!-- View course details -->
                                            <a href="{{ url('/enrollments/' . $item->id) }}" title="View Enrollment">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>

                                            <!-- Edit Course details -->
                                            <a href="{{ url('/enrollments/' . $item->id . '/edit') }}" title="Edit Enrollment">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <!-- Delete course -->
                                            <form method="POST" action="{{ url('/enrollments/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Course" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
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
