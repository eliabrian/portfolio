<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{   
    public function index()
    {
        return view('blog', ['posts' => Post::orderBy('created_at', 'desc')->get()]);
    }
}
