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
                        <th scope="col">Description</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Writer</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $test)
                        <tr class="">
                            <td scope="row">{{ $test->id }}</td>
                            <td>{{ $test->name }}</td>
                            <td>{{ $test->description }}</td>
                            <td><img width="150ptest" src="{{ asset('uploads/' . $test->photo) }}" alt=""></td>
                            <td>{{ $test->writer }}</td>

                            <td>
                                <a href="{{ url('testimonials/' . $test->id . '/edit') }}"
                                    class="btn btn-primary">Update</a>
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
