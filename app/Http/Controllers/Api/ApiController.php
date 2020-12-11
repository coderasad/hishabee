<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function index(){
        $post = Post::select('post')->orderBy('id', 'DESC')->get();        
        return response()->json($post);
    }
}
