<?php

namespace App\Http\Controllers;

use App\Contracts\PostRepositoryContract;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct(private readonly PostRepositoryContract $postRepository)
    {}

    public function index()
    {
        $posts = $this->postRepository->all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        //Use DTO to move and Validate data
        //This creating code should be inside CreatePostAction
        $post = $this->postRepository->create($request->only([
            'title', 'body'
        ]));

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
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
}
