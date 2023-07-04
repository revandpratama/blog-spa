<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all()->load('user', 'category');
        return Inertia::render('Index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $postBody =  explode("\n", $post->body);
        return Inertia::render('ShowPost', [
            "post" => $post->load('user', 'category'),
            "postBody" => $postBody
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }

    public function byAuthor(User $user)
    {
        $posts = Post::where('user_id', $user->id)->get()->load('user', 'category');

        return Inertia::render('PostByAuthor', [
            'posts' => $posts
        ]);
    }

    public function byCategory(Category $category)
    {
        
        $posts = Post::where('category_id', $category->id)->get()->load('user', 'category');
        return Inertia::render('PostByCategory', [
            'posts' => $posts
        ]);
    }
}
