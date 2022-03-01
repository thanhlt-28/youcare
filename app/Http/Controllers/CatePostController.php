<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatePostController extends Controller
{
    public function index(){
        return view('admin.cate_post.index');
    }
}
