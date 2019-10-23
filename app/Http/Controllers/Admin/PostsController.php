<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class PostsController extends Controller
{

    public function index(){
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    public function create(){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories','tags'));
    }

    public function store(Request $request){
//        return Post::create($request->all());

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'category_id' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = Carbon::parse($request->get('published_at'));
        $post->category_id = $request->get('category_id');

        $post->save();

        $post->tags()->attach($request->get('tags'));

        return back()->with('flash', 'Tu publicacion ha sido creada');
    }
}
