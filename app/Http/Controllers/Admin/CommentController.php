<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments=Comment::latest()->get();
        return view('admin.comment.index', compact('comments'));
    }
    public function updateStatus(Request $request)
    {
        $message="";
        $comment=Comment::find($request->id);
        if ($comment->status == 1){
            $comment->status=0;
            $message="Yorum yayından kaldırıldı";
        }
        else{
            $comment->status=1;
            $message="Yorum yayına alındı";

        }
        if ($comment->save()){
            return response()->json([
                'status'=>"success",
                'message'=>$message
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required",
            'business_name'=>"required",
            'image'=>"required",
            'description'=>"required"
        ],[],[
            'name'=>"Yorum Yapan Adı",
            'business_name'=>"Yorum yapan işletme adı",
            'image'=>"İşletme Logosu",
            'description'=>"Yorum metni",
        ]);
        $comment=new Comment();
        $comment->name=$request->input('name');
        $comment->business=$request->input('business_name');
        $comment->description=$request->input('description');
        $comment->image="storage/".$request->file('image')->store('comments_logo');
        if ($comment->save()){
            return to_route('admin.comment.index')->with('response', [
                'status'=>"success",
                'message'=>"Yorum Başarılı Bir Şekilde Eklendi",
            ]);
        }
        return to_route('admin.comment.index')->with('response', [
            'status'=>"danger",
            'message'=>"Yorum bir sistem hatası sebebiyle kaydedilemedi",
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('admin.comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'name'=>"required",
            'business_name'=>"required",
            'description'=>"required"
        ],[],[
            'name'=>"Yorum Yapan Adı",
            'business_name'=>"Yorum yapan işletme adı",
            'description'=>"Yorum metni",
        ]);
        $comment->name=$request->input('name');
        $comment->business=$request->input('business_name');
        $comment->description=$request->input('description');
        if ($request->hasFile('image')){
            $comment->image="storage/".$request->file('image')->store('comments_logo');
        }
        if ($comment->save()){
            return to_route('admin.comment.index')->with('response', [
                'status'=>"success",
                'message'=>"Yorum Başarılı Bir Şekilde güncellendi",
            ]);
        }
        return to_route('admin.comment.index')->with('response', [
            'status'=>"danger",
            'message'=>"Yorum bir sistem hatası sebebiyle güncellenemedi",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if ($comment->delete()){
            return response()->json([
                'status'=>"success",
            ]);
        }
    }
}
