<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * facebok login
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToFacebook()
    {
       return Socialite::driver('facebook')->redirect();
    }

    /*
     * facebook callback
     */
    public function handleFacebookCallback()
    {
        if (!request()->has('code') || request()->has('denied'))
        {
            return redirect('/');
        }
        else
        {
            $user = Socialite::driver('facebook')->stateless()->user();
            $this->_registerOrLoginUser($user);
        }


        // Return home after login
        return redirect()->route('home');

    }

    /**
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * Google login
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    /*
     * Google callback
     */
    public function handleGoogleCallback()
    {
        if (!request()->has('code') || request()->has('denied'))
        {
            return redirect('/');
        }
        else {
            $user = Socialite::driver('google')->stateless()->user();
            $this->_registerOrLoginUser($user);
        }

        // Return home after login
        return redirect()->route('home');
    }
    /**
     * @param $data
     */
    protected function _registerOrLoginUser($data)
    {
     $password ="2233";
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->password =Hash::make($password);
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);
    }
}
