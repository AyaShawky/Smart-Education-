<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct()

    {
       // $this->authorizeResource(Post::class, 'post');
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

        return view('admin.teachers',['teacher' =>Teacher::simplePaginate(4)])
        ;
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.addTeacher');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $teacher =new Teacher();
        $teacher->frist_name=$request->frist_name;
        $teacher->last_name=$request->last_name;
        $teacher->email=$request->email;
        $teacher->mobile=$request->mobile;
        $teacher->status=$request->status;
        $teacher->save();
        return redirect('/teachers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.editTeacher')->with('teacher',$teacher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {

        $teacher->frist_name=$request->frist_name;
        $teacher->last_name=$request->last_name;
        $teacher->email=$request->email;
        $teacher->mobile=$request->mobile;
        $teacher->status=$request->status;
        $teacher->save();
        return redirect('/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect('/teachers');
    }
}
