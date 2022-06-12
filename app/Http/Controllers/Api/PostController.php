<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return response()->json([
            'status' => true,
            'data' => $posts
        ], 200);
    }

    public function create()
    {
        //
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'post' => $post
        ], 200);
    }

    public function show(Post $post)
    {
        return response()->json([
            'status' => true,
            'message' => "Post Successfully Find!",
            'post' => $post
        ], 200);
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $post->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Post updated successfully',
            'post' => $post
        ], 200);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json([
            'status' => true,
            'message' => 'Post deleted successfully'
        ], 200);
    }
}
