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

        <form action="{{ url('categories', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input value="{{ $category->name }}" type="text" name="name" id="" class="form-control"
                    placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input value="{{ $category->description }}" type="text" name="description" id=""
                    class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
                <img width="200px" src="{{ asset('uploads/' . $category->photo) }}" alt="">
                <input type="file" name="photo" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <button type="submit" class="btn btn-primary">Button</button>
        </form>

    </div>
@endsection
