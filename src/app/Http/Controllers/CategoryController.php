<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $bunnies = Category::all();

        return view('category',compact('bunnies'));
    }

    public function store(CategoryRequest $request)
    {
        $bunnies = $request->all();
        Category::create($bunnies);

        return redirect('/category')->with('message','カテゴリを作成しました');
    }
}
