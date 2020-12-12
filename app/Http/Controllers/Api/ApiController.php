<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index(){
        $data = DB::table('posts')
            ->join('users', 'users.id', 'posts.user_id')
            ->select('posts.post', 'users.name')
            ->get();     
        return response()->json($data, $status=200, $headers=[], $options=JSON_PRETTY_PRINT);
    }
}
