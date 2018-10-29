<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostController extends Controller
{
    //
    
    public function show($id)
    {
        //
    }


    public function create()
    {
        return view('pages.create-post', $array=['title'=>'Thêm mới', 'js'=>'components.post.createpost-js']);
    }

    public function store(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'content'=> 'required'
      ]);
      $post = new Post([
        'name' => $request->get('name'),
        'description'=> $request->get('description'),
        'content'=> $request->get('content'),
        'author'=> Auth::id()
      ]);
      $post->save();
      return redirect('/home')->with('success', 'Thêm mới thành công');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('pages.post-edit', $array=['title'=>'Sửa bài viết', 'js'=>'js.postcreate-js', 'post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'content'=> 'required'
        ]);
        $post = Post::find($id);
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->content = $request->get('content');
        $post->save();
        return redirect('/post')->with('success', 'Sửa bài viết thành công');
    }

    public function destroy(Request $request)
    {
        $errors  = array('error' => 0);
        if ($_POST['id']) {
            
            $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
            try
            {
                $post = Post::find($id);
                $post->delete();
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
