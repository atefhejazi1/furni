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
                        <th scope="col">Details</th>
                        <th scope="col">Price</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Category id</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="">
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->details }}</td>
                            <td>{{ $product->price }}</td>
                            <td><img width="150px" src="{{ asset('uploads/' . $product->photo) }}" alt=""></td>
                            <td>{{ $product->category->name }}</td>

                            <td>
                                <a href="{{ url('products/' . $product->id . '/edit') }}" class="btn btn-primary">Update</a>
                            </td>
                            <td>
                                <form action="{{ url('products', $product->id) }}" method="post">
                                    @csrf
                                    @method('delete')
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
