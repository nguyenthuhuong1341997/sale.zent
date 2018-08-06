<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Socialite;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // public function redirectToProvider()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
    // public function handleProviderCallback()
    // {
    //     $user = Socialite::driver('google')->user();
    //     dd($user);
    //     // $user->token;

    //     //save to database
    //     $customer= User::updateOrCreate([
    //         'name'=>$user->name,
    //         'email'=>$user->email,
    //         'avatar'=>$user->avatar,
    //         'password'=> bcrypt('123456'),
    //     ]);

    //     //login
    //     Auth::login($customer);
    //     return redirect()->route('home');
    // }
    
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/login');
    }
}