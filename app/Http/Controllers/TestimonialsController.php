<?php

namespace App\Http\Controllers;

use App\Models\testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = testimonials::all();
        return view('testimonials.allTestimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('testimonials.addTestimonials');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:testimonials|max:100',
            'job_title' => 'required',
            'photo' => 'required|image',
            'feedback' => 'required',
        ]);


        $product = new testimonials();
        $product->name = $request->name;
        $product->job_title = $request->job_title;
        $product->feedback = $request->feedback;


        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $imageName);

        $product->photo = $imageName;

        $product->save();

        return redirect('testimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonials = testimonials::find($id);

        $testimonials->delete();

        return redirect('/testimonials');
    }
}
