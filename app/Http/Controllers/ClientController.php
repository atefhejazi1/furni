<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\testimonials;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        $testimonials = testimonials::all();
        $products = product::all();


        return view('welcome', compact('testimonials', 'products'));
    }
}
