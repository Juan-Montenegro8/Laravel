<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*public function index(){
        return "hols";
    }*/

    public function __invoke(){
        return view('welcome');
    }
}
