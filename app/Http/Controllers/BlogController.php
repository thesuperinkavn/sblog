<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class BlogController extends Controller
{
    //

    public function index()
    {
        $posts = DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.author') 
            ->select('posts.*', 'users.email', 'users.name as username')
            ->where('approve',1)
            ->orderBy('id', 'desc')
            ->get();
        $params = [
            'title'         => 'TẤT CẢ BÀI VIẾT',
            'posts'         => $posts
        ];
        return view('welcome')->with($params);
    }
}
