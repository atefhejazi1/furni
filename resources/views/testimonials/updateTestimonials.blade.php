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

        <form action="{{ url('testimonials', $test->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input name="name" value="{{ $test->name }}" type="text" id="" class="form-control"
                    placeholder="" aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Job Title</label>
                <input value="{{ $test->job_title }}" type="text" name="job_title" id="" class="form-control"
                    placeholder="" aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <img src="{{ asset('uploads/' . $test->photo) }}" width="200px" height="150px" alt="">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Feedback</label>
                <textarea name="feedback" rows="10" class="form-control">{{ $test->feedback }} </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Button</button>
        </form>

    </div>
@endsection
