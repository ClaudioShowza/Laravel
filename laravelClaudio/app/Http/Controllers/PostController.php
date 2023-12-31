<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts.index', ['posts' => Post::all()]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        Post::create($request->all());
        return redirect(route('posts.index'));   
    }
    public function show($id){
        return view('posts.show', ['post'=>Post::findOrFail($id)]);
    }
    public function edit($id){
        return view('posts.edit', ['post'=>Post::findOrFail($id)]);
    }
    public function update($request, $id){
        Post::findOrFail($id)->update($request->all());
        return redirect(route('posts.show', $id));
    }
}