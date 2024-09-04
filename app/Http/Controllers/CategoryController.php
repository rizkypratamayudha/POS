<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodandbeverage (){
        return view('blog.category')
        ->with('category','Food And Baverage');
    }
    public function beautyhealth (){
        return view('blog.category')
        ->with('category','beauty and health');
    }
    public function homecare(){
        return view('blog.category')
        ->with('category','home and care');
    }
    public function babykid(){
        return view('blog.category')
        ->with('category','baby and kid');
    }
}
