<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth()->user()->id;

        return view('dashboard.posts.index', [
            'title' => 'My Post',
            'id' => 1,
            'posts' => Post::where('user_id', $user_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create new post',
            'categories' => Categories::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'categories_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);

        if($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        
        $validateData['slug'] = Str::of($request->title)->upper()->slug('-');
        $posts = Post::where('slug', $validateData['slug'])->get();
        $id = 1;

        foreach($posts as $post) {
            $validateData['slug'] =Str::of($request->title)->upper()->slug('-').'-'.$id++;
        }
        
        $validateData['excrept'] = Str::limit(strip_tags($request->body), 100, '...');
        $validateData['user_id'] = auth()->user()->id;
        $validateData['author'] = auth()->user()->name;
       
        Post::create($validateData);
        return redirect('/dashboard/posts')->with('status', 'successfully added post');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'Detail',
            'post' => $post,
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.update', [
            'title' => 'Update Post',
            'post' => $post,
            'categories' => Categories::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $updateData = $request->validate([
            'title' => 'required|max:255',
            'categories_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required',
        ]);
        
        $updateData['slug'] = Str::of($request->title)->upper()->slug('-');
        $posts = Post::where('slug', $updateData['slug'])->get();
        $id = 1;
        
        foreach($posts as $post) {
            $updateData['slug'] = Str::of($request->title)->upper()->slug('-').'-'.$id++;
        }
        
        $updateData['excrept'] = Str::limit(strip_tags($request->body), 100, '...');
        $updateData['user_id'] = auth()->user()->id;
        $updateData['author'] = auth()->user()->name;

        //ddd($request->oldImage);
        
        if($request->file('image')) {
            Storage::delete($request->oldImage);
            $updateData['image'] = $request->file('image')->store('post-image');
        }

        Post::where('id', $post->id)->update($updateData);
        return redirect('/dashboard/posts')->with('status', 'Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        Post::destroy($post->id);
        return redirect('dashboard/posts')->with('status', 'Data Has Been Deleted');
    }
}
