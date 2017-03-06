<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class AllPostsController extends Controller
{
    //


    public function AllPosts(Auth $user, Post $post)
    
       {
        $posts = $post->where("user_id", "=" , $user->id)->get();
        return view('admin.home' , compact('posts'));
    }



        
       
    
}
