<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    public function store(Request $request){
        $author_id = auth()->user()->id;
        // dd($author_id);
        Post::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'category_id' => $request->category_id,
            'author_id' => $author_id
        ]);
        return redirect()->back();
    }

    public function edit($id){
        $post = Post::whereId($id)->first();
        $category = Category::all();
        return view('posts.edit', compact('category','post'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);
        return redirect()->back();
    }
}
