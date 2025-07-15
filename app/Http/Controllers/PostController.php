<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => '1',
                'contet' => 'contenid1'
            ],
            [
                'title' => '2',
                'contet' => 'contenid2'
            ],
            [
                'title' => '3',
                'contet' => 'contenid3'
            ]
        ];
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        return "procesar post";
    }
    public function show($post)
    {
        //compact('post') 
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }
    public function update($post)
    {
        return "procesar edicion $post";
    }
    public function destroy($post)
    {
        return "procesar edicion $post";
    }
}
