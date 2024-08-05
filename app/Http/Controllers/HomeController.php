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
        if (auth()->user()->roles->pluck('name')[0] == 'admin') {
            return to_route('teacher.dashboard');
        } else if (auth()->user()->roles->pluck('name')[0] == 'student') {
            return to_route('student.dashboard');
        } else if (auth()->user()->roles->pluck('name')[0] == 'teacher') {
            return to_route('teacher.dashboard');
        } else {
            return to_route('beranda');
        }
    }
}
