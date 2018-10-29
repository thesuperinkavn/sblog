<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $posts = Post::all();
        $params = [
            'title'         => 'TẤT CẢ BÀI VIẾT',
            'posts'         => $posts,
            'js'            => 'components.post.home-js'
        ];
        return view('admin-home')->with($params);
    }

    public function approve(Request $request)
    {
        $errors  = array('error' => 0);
        if ($_POST['id']) {
            
            $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
            try
            {
                $post = Post::find($id);
                $post->approve = 1;
                $post->save();
            }
            catch (ModelNotFoundException $ex) 
            {
                if ($ex instanceof ModelNotFoundException)
                {
                    $errors['errors'] = 1;
                }
            }
            return response()->json($errors);
        }
    }

    public function unapprove(Request $request)
    {
        $errors  = array('error' => 0);
        if ($_POST['id']) {
            
            $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
            try
            {
                $post = Post::find($id);
                $post->approve = 0;
                $post->save();
            }
            catch (ModelNotFoundException $ex) 
            {
                if ($ex instanceof ModelNotFoundException)
                {
                    $errors['errors'] = 1;
                }
            }
            return response()->json($errors);
        }
    }
}