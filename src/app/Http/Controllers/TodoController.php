<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $bunnies = Todo::all();

        return view('index',compact('bunnies'));
    }

    public function store(TodoRequest $request)
    {
        $bunny = $request->only(['content']);
        Todo::create($bunny);

        return redirect('/')->with('message','Todoを作成しました');
    }
}
