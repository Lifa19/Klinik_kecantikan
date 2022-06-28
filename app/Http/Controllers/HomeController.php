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
    public function pelanggan()
    {
        return view('pelanggan.home');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
    public function karyawan()
    {
        return view('karyawan.index');
    }
}
