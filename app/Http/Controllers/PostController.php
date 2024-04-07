<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index', ['posts'=>$posts]);
    }

    public function store(Request $request){
        $post = new Post();
        $post->email = $request->email;
        $post->message = $request->message;
        //Repare que no arquivo, é necessário o método 'file'
        $post->photo = $request->file("photo");
        $post->save();
        return redirect('/');
    }
}


