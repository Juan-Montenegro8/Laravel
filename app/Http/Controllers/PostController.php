<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "posts";
    }
    public function create(){
        return "crear post";
    }
    public function store(){
        return "procesar post";
    }
    public function show($post){
        return "mostrar $post";
    }
    public function edit($post){
        return "edicion $post";
    }
    public function update($post){
        return "procesar edicion $post";
    }
    public function destroy($post){
        return "procesar edicion $post";
    }
}
