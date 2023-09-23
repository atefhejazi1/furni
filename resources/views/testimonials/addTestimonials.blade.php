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

        <form action="{{ url('testimonials') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Job Title</label>
                <input type="text" name="job_title" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Photo</label>
                <input type="file" name="photo" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Feedback</label>
                <textarea name="feedback" rows="10" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Button</button>
        </form>

    </div>
@endsection
