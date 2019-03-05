<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index() {

    }


    public function create()
    {
        return view('posts.create_post');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'postTitle' => 'required|max:200',
            'postDescription' => 'required'
        ]);
        $currentUsr = Auth::user();

        $post = Post::create([
            'title' => $request->postTitle,
            'description' => $request->postDescription,
            'created_by' => $currentUsr->name
        ]);

        Session::flash('success', 'Post Published Successfully!');
        return redirect()->back();

    }

    public function showAll(){

        return view('posts.viewposts')->with('posts', Post::all());
    }

    public function showMine(){
        return view('posts.myposts')->with('posts',Post::all());
    }

    public function show($id) { }

    public function edit($id) { }

    public function update(Request $request, $id) { }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();

        Session::flash("success", "Post Deleted Successfully!");
        return redirect()->back();
    }
}
