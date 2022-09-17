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
    public function izinHome()
    {
        return view('login.users.izin.izinHome');
    }
    public function setujuHome()
    {
        return view('login.users.setuju.setujuHome');
    }
    public function index()
    {
        return view('login.users.mutasi.home');
    }
    public function adminHome()
    {
        return view('login.admin.adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function masterHome()
    {
        return view('login.master.masterHome');
    }
}
