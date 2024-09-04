<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User($id,$nama){
        return view('blog.user')
        ->with('id',$id)
        ->with('nama',$nama);
    }
    
}
