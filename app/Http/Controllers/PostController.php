<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class PostController extends Controller
{
    function getPosts(){
        $posts =Post::with('user')->paginate();
            return view ('post.iti_blog',['posts'=>$posts]);
    }
    function getSinglePost($id){
        $post = Post::find($id);
        return view ('post.view_post',['post'=>$post]);
    }
    function edit($id){
        $post = Post::find($id);
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
        $creator=Auth::user();
        Post::create(['title'=>$request->get('title'),'description'=>$request->get('description'),'user_id'=>$creator->id]);
        return redirect()->route('post.iti_blog');
    }
}
