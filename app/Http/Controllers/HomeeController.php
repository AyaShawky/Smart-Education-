<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function coursat()
    {
        return view('coursat')->with('course',Course::simplePaginate(6));
    }

    public function contact()
    {
        return view('contact');
    }
    // public function details()
    // {
    //     return view('details');
    // }

    // public function details()
    // {

    //      return view('details')->with('course' ,Course::get());

    // }
}
