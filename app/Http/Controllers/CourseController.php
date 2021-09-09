<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()->isAdmin){
            return redirect('/');
        }else{
        return view('admin.course',['course'=>Course::simplePaginate(4)]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.addCourse')->with('teacher', Teacher::get(['id','frist_name']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        flash('Add Success!')->success();

        $path=$request->image->store('images');
        $request->validate([
            'name' => 'required|max:20',
             'description' => 'required',
        ]);

       $course=new Course();
       $course->name=$request->name;
       $course->subTitle=$request->subTitle;
       $course->description=$request->description;
       $course->price=$request->price;
       $course->Time=$request->Time;
       $course->teacher_id=$request->teacher_id;
       $course->image=$path;
       $course->save();
       return redirect('/course');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {

         return view('details')->with('course' ,$course)
         ->with('teacher', Teacher::get(['id','frist_name','email']));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {

         return view('admin.editCourse')->with('course' ,$course)
         ->with('teacher', Teacher::get(['id','frist_name','email']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name=$request->name;
        $course->subTitle=$request->subTitle;
        $course->description=$request->description;
        $course->price=$request->price;
        $course->Time=$request->Time;
        $course->teacher_id=$request->teacher_id;
        $course->save();
        return redirect('/course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/course');
    }

}
