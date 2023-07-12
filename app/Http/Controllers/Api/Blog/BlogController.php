<?php

namespace App\Http\Controllers\Api\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogGetResource;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @group Blog
     *
     * */
    public function index()
    {
         $blogs = Blog::where('status', 1)->get();
         return response()->json([
            'blogs' => BlogResource::collection($blogs),
         ]);
    }
    /**
     * @group Blog
     *
     * */
    public function get(BlogRequest $request)
    {
        $blog = Blog::where('status', 1)->where('id', $request->blog_id)->first();
        if ($blog){
            return response()->json([
               'blogs' => new BlogGetResource($blog),
            ]);
        }
        return  response()->json([
           'status' => "error",
           'message'=> "Blog Bulunamadı"
        ]);
    }
}
