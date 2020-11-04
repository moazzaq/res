<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::with('category')->get();
        return view('backend.food.index',compact('foods'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('backend.food.create',compact('categories'));
    }

    public function store(Request $request)
    {

        $file = $request->image;
        $name = $file->hashName();
        $file->move(public_path().'/food/',$name);

        $food = new Food();
        $food->name = $request->name;
        $food->category_id = $request->category_id;
        $food->image = $name;
        $food->save();
        return redirect('/foods');
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return back();
    }
}
