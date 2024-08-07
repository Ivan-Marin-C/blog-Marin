<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Visibility;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');

    }
    public function crear(){
        return view('posts.create');

    }
    public function show($id){
        return view('posts.show', compact('id'));
    }
}
