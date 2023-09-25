@extends('layouts.main_dash')

@section('title', 'Dashboard - All Product')
@section('mian_content')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id </th>
                        <th scope="col">Name</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Feedback</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $test)
                        <tr class="">
                            <td scope="row">{{ $test->id }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->job_title }}</td>
                            <td><img width="150ptest" src="{{ asset('uploads/' . $test->photo) }}" alt=""></td>
                            <td>{{ $test->feedback }}</td>

                            <td>
                                <a href="{{ url('test/' . $test->id . '/edit') }}" class="btn btn-primary">Update</a>
                            </td>
                            <td>
                                <form action="{{ route('testimonials.destroy', $test->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
