<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->validated());

        return $post;
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return $post;
    }


    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Post $post)
    {
        $post->delete();

        return response()->noContent();
    }
}
