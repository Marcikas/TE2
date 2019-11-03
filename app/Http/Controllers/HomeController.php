<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = \App\User::all();
        return view('dashboard', ['users' => $users]);
    }
    
    /**
     * Renderiza a tela de cotações.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quotes()
    {
        return view('quotes');
    }
    
    /**
     * Renderiza a tela de cotações.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function user()
    {
        return view('user');
    }
}
