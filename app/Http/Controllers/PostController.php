<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{
    function getPosts(){
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.*','users.name')
            ->get();
            return view ('post.iti_blog',['posts'=>$posts]);
    }
    function getSinglePost($id){
        $post = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*','users.name')
        ->where('posts.id', '=',$id)
        ->first();
        return view ('post.view_post',['post'=>$post]);
    }
    function edit($id){
        $post = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*','users.name')
        ->where('posts.id', '=',$id)
        ->first();
        return view ('post.edit',['post'=>$post]);
    }
    function update($id,Request $request){
        $post=Post::find($id);
        $creator=DB::table('users')->select('id')->where('name','=',$request->get('creator'))->first();
        $post->update(['title'=>$request->get('title'),'description'=>$request->get('description'),'user_id'=>$creator->id]);
        return redirect()->route('post.iti_blog');
    }
    function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('post.iti_blog');
    }
    function create(){
        return view('post.create_post');
    }
    function store(Request $request){
        $creator=DB::table('users')->select('id')->where('name','=',$request->get('creator'))->first();
        Post::create(['title'=>$request->get('title'),'description'=>$request->get('description'),'user_id'=>$creator->id]);
        return redirect()->route('post.iti_blog');
    }
}
