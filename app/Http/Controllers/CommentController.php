<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store2(Request $request, string $id)
    {
        // dd($comment);
        // dd($id);
        $comment = $request->validate([
            'body' => 'required'
        ]);
        $comment['user_id'] = Auth::id();
        $comment['post_id'] = $id;
        // return $comment;
        Comment::create($comment);
        return redirect()->back();
    }
    public function store()
    {
        // dd($comment);
        // dd($id);
        // $comment = $request->validate([
        //     'body' => 'required'
        // ]);
        // $comment['user_id'] = Auth::id();
        // $comment['post_id'] = Post::find($id);
        // return $comment;
        // Post::create($comment);
        // return redirect()->back();
    }
    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
