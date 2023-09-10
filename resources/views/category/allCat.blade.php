@extends('layouts.main_dash')

@section('title', 'Dashboard - All Categories')
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
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $cat)
                        <tr class="">
                            <td scope="row">{{ $cat->id }}</td>
                            <td>{{ $cat->name }}</td>
                            <td>{{ $cat->description }}</td>
                            <td><img width="150px" src="{{ asset('uploads/' . $cat->photo) }}" alt=""></td>
                            <td><a href="#" class="btn btn-primary">Update</a></td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
