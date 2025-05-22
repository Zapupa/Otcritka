<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view("admin.index", compact('works'));
    }
}
