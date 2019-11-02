<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = '/dashboard';

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
     * Efetua o login.
     *
     * @return void
     */
    public function login(Request $request)
    {
        $acesso = $request->except(['_token']);
        if (Auth::attempt($acesso)) {
            return redirect('/dashboard');
        }
        
        return redirect()->back();
    }
    
    /**
     * Efetua o login.
     *
     * @return void
     */
    public function logout(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back();
        }
        
        if (!Auth::logout()) {
            return redirect()->back();
        }
        
        return redirect('/');
    }
}
