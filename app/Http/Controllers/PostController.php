<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'body' => 'required',
    ]);

    Post::create([
        'title' => $request->title,
        'body' => $request->body,
    ]);

    return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan');
}
}
