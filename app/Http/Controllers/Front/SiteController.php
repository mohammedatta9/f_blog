<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index(){


    $posts = Post::orderBy('id','desc')->with(['user'])->SimplePaginate(5);
    //$posts = Post::latest()->get();
   // dd($posts);
   return view('front.index', compact('posts'));
  }

  public function show(Post $post)
  {
  
      return view('front.post', compact('post'));
  }
}
