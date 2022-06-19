<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{

    public function index() {

        $posts = Post::latest();

        if(request('search')) {
            $posts->filter();
        }

        return view('posts', [
            "title" => "posts",
            "posts" => $posts->paginate(10)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "single post",
            "post" => $post->load('categories')
        ]);
    }
}
