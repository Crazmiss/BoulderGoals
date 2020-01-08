<?php

namespace App\Http\Controllers;

use App\BoulderGrade;
use Illuminate\Support\Facades\Auth;

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
        return view('home',
            ['boulders' => Auth::user()->boulders()->with(['boulderGrade'])->get(),
                'grades' => BoulderGrade::all()]);
    }
}
