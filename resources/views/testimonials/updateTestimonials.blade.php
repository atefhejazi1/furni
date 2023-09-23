@extends('layouts.main_dash')

@section('title', 'Dashboard - Add Category')




@section('mian_content')
    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('products', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $product->id }}">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input value="{{ $product->name }}" type="text" name="name" id="" class="form-control"
                    placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Details</label>
                <input value="{{ $product->details }}" type="text" name="details" id=""
                    class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
                <img width="200px" src="{{ asset('uploads/' . $product->photo) }}" alt="">
                <input type="file" name="photo" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="number" name="price" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Category</label>

                <select name="category_id" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Button</button>
        </form>

    </div>
@endsection
