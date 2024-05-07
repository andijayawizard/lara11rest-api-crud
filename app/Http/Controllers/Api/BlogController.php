<?php

namespace App\Http\Controllers\Api;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogs = Blog::paginate();

        return BlogResource::collection($blogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request): Blog
    {
        return Blog::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog): Blog
    {
        return $blog;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog): Blog
    {
        $blog->update($request->validated());

        return $blog;
    }

    public function destroy(Blog $blog): Response
    {
        $blog->delete();

        return response()->noContent();
    }
}
