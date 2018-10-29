<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('author',Auth::id())->get();
        $params = [
            'title'         => 'TẤT CẢ BÀI VIẾT',
            'posts'         => $posts,
            'js'            => 'components.post.home-js'
        ];
        return view('home')->with($params);
    }
}
