<?php

 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Censer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Post;
use DB;
use Mail;
use Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use URL;

class CommentController extends Controller
{
      public function store(Request $request)
    {
        $comment = new Comment;
        $comment->body = $request->get('comment_body');
        $comment->user()->associate($request->user());
        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        return back();
    }
      public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();

    }
}
