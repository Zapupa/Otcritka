<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function create()
    {
        $works = Work::where('user_id', Auth::user()->id)->get();

        $categories = Category::all();

        $i = 0;
        foreach ($works as $work) {
            $i++;
        }
        if ($i == 0)
            return view('work.create', compact('categories'));
        else
            return view('work.complete');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string',
            'category' => 'string',
            'path_img' => 'image|mimes:png,jpg,jpeg,gif|max:800'
        ]);

        $imageName = time() . '.png'; // f[f[f[f]]]

        $data['path_img']->move(public_path('images'), $imageName);

        Work::create([
            'title' => $data['title'],
            'score' => 0,
            'path_img' => $imageName,
            'category_id' => $request['category'],
            'user_id' => Auth::user()->id
        ]);
        return redirect()->route('dashboard');
    }
}
