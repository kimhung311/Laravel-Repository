<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function create(Request $request)
    {

        $this->postService->create($request);

        return back()->with(['status' => 'Post created successfully']);
    }
}
