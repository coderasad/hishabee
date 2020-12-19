<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $data['post'] = DB::table('posts')
                ->select('posts.*','posts.created_at as time', 'likes.like', 'users.name as name', 'users.img as img', 'users.occupation as occupation')
                ->leftjoin('likes', function($join){
                    $join->on('posts.id', '=', 'likes.post_id');
                    $join->where('likes.user_id', Auth::user()->id );
                }) 
                ->leftjoin('users', 'users.id', 'posts.user_id') 
                ->orderBy('posts.id', 'DESC')
                ->simplePaginate(5);
        
        // like count 
        $data['count'] = DB::table('likes')
                ->select("posts.id as pid", DB::raw("COUNT(likes.post_id) as countLike"))
                ->leftjoin('posts', 'posts.id', 'likes.post_id' )
                ->groupBy('posts.id')->get();
        // all user 
        $data['user'] = User::where('id', '!=', Auth::user()->id)->orderBy('id', 'DESC')->simplePaginate(5); 
        
        // emoji 
        $data ['emj_like'] = '👍🏻';
        $data ['emj_heart'] = '💖';
        $data ['emj_love'] = '😍';
        $data ['emj_cry'] = '😭';
        return view('pages.index')->with($data);
    }

    /**
     * Edit profile
     */
    public function editProfile(){
        return view('pages.edit-profile');
    }

    /**
     * Edit Profile Img
     */
    public function editProfileImg(Request $request){
        $image = $request->file('img');
        if($image){
            $image_name = 'user_image_'.rand(100,999).'.'.strtolower($image->getClientOriginalExtension());
            if($request->old_img){
                if($request->old_img == "public/frontend/img/user/avatar.png"){

                }else{
                    unlink($request->old_img);
                }
            }
            $upload_path = "public/frontend/img/user/";
            $image->move($upload_path,$image_name);
            $db = DB::table('users')->where('id',Auth::user()->id)->update(['img'=>$image_name]);
            if($db){
                return redirect()->back();
            }
        }
    }

    /**
     * Edit  Profile User
     */
    public function editProfileUser(Request $request){
        $id = Auth::user()->id;
        $user = User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->occupation = $request->occupation;
        $user->save();
        return redirect()->route('author.home');
    }

    /**
     * Store a new post
     */
    public function postStatus(Request $request)
    {
        $post = new Post();
        $post->post = $request->postVal;
        $post->user_id = Auth::user()->id;
        $post->save();
        $cid = $post->id;
        $lastPost = Post::where('id', $cid)->first();
        $img = asset('public/frontend/img/user/'.Auth::user()->img);
        $data = [
            'post' => $request->postVal,
            'uname' => Auth::user()->name,
            'occupation' => Auth::user()->occupation,
            'pic' => $img,
            'p_time' => $lastPost->created_at->diffForHumans(),
            'p_id' => $lastPost->id            
        ];
        return response()->json($data);
    }

    /**
     * Store likes
     */
    public function likeStore(Request $request)
    {
        $like = $request->like;
        $post_id = $request->post_id;

        $likeShow = DB::table('likes')
                    ->select('likes.id as lid')
                    ->join('posts', 'posts.id', 'likes.post_id')
                    ->where('likes.post_id', $post_id)
                    ->where('likes.user_id', Auth::user()->id)
                    ->first();
        if($likeShow){
            DB::table('likes')
                ->where('id',$likeShow->lid)
                ->update(['like'=>$like]);
        }else{
            $like = new like();
            $like->like = $request->like;
            $like->post_id = $request->post_id;
            $like->user_id = Auth::user()->id;
            $like->save(); 
        }
        $countLike = DB::table('likes')
        ->select(DB::raw("COUNT(likes.post_id) as countLike"))
        ->where('likes.post_id', $post_id )
        ->first();
        return response()->json($countLike);        
    }

    // single user 
    public function profile($name, $id){
        $data['post'] = DB::table('posts')
                        ->select('posts.*','posts.created_at as time', 'likes.like', 'users.name as name', 'users.img as img', 'users.occupation as occupation')
                        ->leftjoin('likes', function($join){
                            $join->on('posts.id', '=', 'likes.post_id');
                            $join->where('likes.user_id', '=', Auth::user()->id);
                        }) 
                        ->leftjoin('users', 'users.id', 'posts.user_id') 
                        ->where ('posts.user_id', $id)
                        ->orderBy('posts.id', 'DESC')
                        ->simplePaginate(5);

        // like count 
        $data['count'] = DB::table('likes')
                        ->select("posts.id as pid", DB::raw("COUNT(likes.post_id) as countLike"))
                        ->leftjoin('posts', 'posts.id', 'likes.post_id' )
                        ->groupBy('posts.id')
                        ->get();

        // all user 
        $data['user'] = User::where('id', '!=', $id)->orderBy('id', 'DESC')->simplePaginate(5); 
        $data['single_user'] = User::where('id', $id)->first(); 
        // emoji 
        $data ['emj_like'] = '👍🏻';
        $data ['emj_heart'] = '💖';
        $data ['emj_love'] = '😍';
        $data ['emj_cry'] = '😭';
        $data ['name'] = $name;
        return view('pages.profile')->with($data);
    }
}
