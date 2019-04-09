<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;

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
        $complaints=Complaint::where('uid',auth()->user()->id)->latest()->get();
        // dd($complaints);
        return view('regular.index')->with('complaints',$complaints);
    }
}
