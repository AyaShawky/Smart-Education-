<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
use App\Models\History;
use App\Models\Teacher;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index')->with('history',History::get())
        ->with('testimonials',Testimonial::get())
        ->with('about',About::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
    public function welcome()
    {

        return view('admin.admin');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function Teacher()
    {
        return view('Teacher')->with('teacher',Teacher::get())
       ;
    }
}
