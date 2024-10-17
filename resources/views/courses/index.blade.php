@extends('layout')
@section('content')

                <div class="card">
                    <div class="card-header">
                        <h2>Courses Application</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br>
                        <br>
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
                                @foreach($courses as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Automatic numbering for each course -->
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->syllabus }}</td>
                                        <td>{{ $item->duration() }}</td>
                                        <td>
                                            <!-- View course details -->
                                            <a href="{{ url('/courses/' . $item->id) }}" title="View Course">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>

                                            <!-- Edit Course details -->
                                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit Course">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>

                                            <!-- Delete course -->
                                            <form method="POST" action="{{ url('/courses/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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
