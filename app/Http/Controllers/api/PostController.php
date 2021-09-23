<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends ApiResponseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::join('post_images', 'post_images.post_id', '=', 'posts.id')
            ->join('category', 'category.id', '=', 'posts.category_id')
            ->select('posts.*', 'category.title as category', 'post_images.image')
            ->orderBy('posts.created_at', 'desc')
            ->where('posts.posted', 'yes')
            ->paginate(10);

        return $this->successResponse($posts);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->image;
        $post->category;
        return $this->successResponse($post);
    }

    public function category(Category $category)
    {
        // dd($category->post());
        return $this->successResponse(['post' => $category->post()->paginate(10), 'category' => $category]);
    }
}
