<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentForm;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('s');
        if($search){
            $posts = Post::where('title', 'REGEXP', $search)->orderBy('created_at')->get();
        }else{
            $posts = Post::orderBy('created_at')->get();
        }
        return view('main', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
//        $comments = Comment::where('post_id', '=', $id)->get();
//        dd($comments);
        return view('post', [
            'post' => $post,
//            'comments' => $comments
        ]);
    }

    public function comment($id, CommentForm $request)
    {
        $post = Post::findOrFail($id);

        $post->comments()->create($request->validated());

        return redirect(route('post', $id));
    }


}
