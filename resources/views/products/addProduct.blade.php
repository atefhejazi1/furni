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

        <form action="{{ url('products') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="details" class="form-label">Details</label>
                <input type="text" name="details" id="details" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
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
