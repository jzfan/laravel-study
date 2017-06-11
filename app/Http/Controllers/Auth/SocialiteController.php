<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialiteController extends Controller
{
    public function redirectToProvider(Request $request,$service)
    {
        return Socialite::driver($service)->redirect();
    }

    public function handleProviderCallback(Request $request,$service)
    {
        $user = Socialite::driver($service)->user();
        dd($user);
    }
}
