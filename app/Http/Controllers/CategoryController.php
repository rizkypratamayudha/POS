<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodandbeverage (){
        return view('blog.foodbeverage')
        ->with('category','Food And Baverage');
    }
    public function beautyhealth (){
        return view('blog.beautyhealth')
        ->with('category','beauty and health');
    }
    public function homecare(){
        return view('blog.homecare')
        ->with('category','home and care');
    }
    public function babykid(){
        return view('blog.babykid')
        ->with('category','baby and kid');
    }
    
}
