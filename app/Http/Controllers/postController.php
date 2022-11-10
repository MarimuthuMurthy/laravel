<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class postController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }
    public function addPost()
    {
        return view('add_post');
    }
    public function addPostSubmit(Request $request)
    {
        $request->validate([
            'title'=>'required'
        ]);
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);
        return back()->with('post_created','post has been created successfully');
    }
    public function readPostById($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single_post',compact('post'));
    }

    public function deletePostById($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','post has been deleted');
    }
    public function updatePostById($id)
    {
        $post =  DB::table('posts')->where('id',$id)->first();
        return view('edit_post',compact('post'));
    }
    public function updatePostByIdSubmit(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update(
            [
                'title'=> $request->title,
                'body'=>$request->body,
            ]
            );
        return back()->with('post_updated','post has been updated');
    }
    public function innerJoinClause()
    {
        $request = DB::table('users')
        ->join('posts','users.user_id','=','posts.user_id')
        ->select('users.user_name','posts.title','posts.body')
        ->get();
        return $request;
    }
    public function leftJoinClause()
    {
        $request = DB::table('users')
        ->leftJoin('posts','users.user_id','=','posts.user_id')
        ->get();
        return $request;
    }
    public function rightJoinClause()
    {
        $request = DB::table('users')
        ->rightJoin('posts','users.user_id','=','posts.user_id')
        ->get();
        return view('joins',compact('request'));
    }

    public function getAllPostsUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }
}
