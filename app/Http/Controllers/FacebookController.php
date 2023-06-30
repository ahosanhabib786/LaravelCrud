<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Facebook;

class FacebookController extends Controller
{
    public function loginUsingFaceook()
    {
       return Socialite::driver('facebook')->redirect();
    }
    public function callbackFromFaceook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            dd($user);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }
}
