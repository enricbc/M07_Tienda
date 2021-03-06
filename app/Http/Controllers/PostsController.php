<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    public function index()
    {
      $posts = Post::all();
      return view('posts.index')->with(['posts' => $posts]);
    }


    public function show(Post $post)
    {

      return view('posts.show')->with(['post'=>$post]);
    }
    public function create()
    {

      return view('posts.create');
    }
    public function store(CreatePostRequest $request)
    {
      $post = Post::create($request->only('title', 'description', 'url'));
      return redirect()->route('posts_path');

    }
}
