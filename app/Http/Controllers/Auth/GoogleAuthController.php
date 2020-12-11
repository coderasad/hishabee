<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Laravel\Socialite\Facades\Socialite;


class GoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $existUser = User::where('email', $googleUser->email)->first();

            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1, 10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } catch (Exception $e) {
            return 'error';
        }
    }

    /**
     * Store a newly img
     */
    public function getimg(Request $request)
    {
        $imgIf = '';
        $imgElse = '';
        $name = '';
        $email = $request->email;
        $result = User::where('email', $email)->first();
        if($result != ''){
          $imgIf = asset('public/frontend/img/user/'.$result->img);           
          $name = $result->name;           
        }
        else{
            $imgElse = asset('public/frontend/img/logo.png'); 
        }
        $data = [
            'imgIf' => $imgIf,
            'imgElse' => $imgElse,
            'name' => $name
        ];
        return response()->json($data);
    }

}
