<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')
        ->where('draft', false)
        ->get();
        
        $favorites = Post::where('draft', 0)
        ->where('favorite', 1)
        ->orderBy('created_at', 'desc')
        ->get();
        return view('welcome', compact('posts', 'favorites'));
    }
}
