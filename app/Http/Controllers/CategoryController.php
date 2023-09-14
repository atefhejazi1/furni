<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::all();
        return view('category.allCat', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.addCat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
            'description' => 'required',
            'photo' => 'required|image',
        ]);


        $category = new category();
        $category->name = $request->name;
        $category->description = $request->description;


        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $imageName);

        $category->photo = $imageName;

        $category->save();

        return redirect('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return  view('category.updateCat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:categories|max:100',
            'description' => 'required',
            'photo' => 'required|image',
        ]);

        $cat = category::find($request->id);

        $cat->name = $request->name;
        $cat->description = $request->description;


        $image = $request->file('photo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('uploads'), $imageName);

        $cat->photo = $imageName;

        $cat->save();

        return redirect('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();


        return redirect('categories');
    }
}
