<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function show($id){
        $user=User::find($id);
        return view('post.view_postUser',['user'=>$user]);
    }
}
