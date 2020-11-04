<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $foods = Food::with('category')->get();
        return view('welcome',compact('foods'));
    }
}
