@extends('layouts.main_dash')

@section('title', 'Dashboard - Add Category')




@section('mian_content')
    <div class="container-fluid">

        <form action="{{ url('categories') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" name="description" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-primary">Button</button>
        </form>

    </div>
@endsection
