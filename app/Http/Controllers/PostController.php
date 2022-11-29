<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function addpost(Request $request)

    {
        Post::Create([
            'title' =>  $request->title,
            'user_id' => auth()->user()->id
        ]);
        return redirect('/')->with('success', 'Post Created Successfully');
    }
    public function delete(Post $post, $id)
    {
        $post = Post::where('id', $id)->where('user_id', auth()->user()->id)->first();
        $post->delete();
        return redirect('/')->with('success', 'Post Deleted Successfully');
    }
}
