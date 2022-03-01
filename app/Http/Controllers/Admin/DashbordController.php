<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index(){
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        // $posts_count = Post::all()->count();

        return view('admin.index', compact('posts_count', 'categories_count', 'users_count'));
    }
}
