<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post) 
    {
    	$user_id = auth()->id();
        $this->validate(request(), ['body' => 'required|min:2']);
        $post->addComment(request('body'), $user_id);

        return back();
    }

}
