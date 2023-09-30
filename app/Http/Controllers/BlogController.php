<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blog::all();
        return view('blogs.allBlogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.addBlogs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:blogs|max:100',
            'description' => 'required',
            'photo' => 'required|image',
        ]);


        $blog = new blog();
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->writer = Auth::user()->name;


        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $imageName);

        $blog->photo = $imageName;

        $blog->save();

        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blog $blog)
    {
        //
    }
}
