<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
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
       return view('admin.students',['student'=>Student::simplePaginate(4)]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.addStudent')->with('course', Course::get(['id','name']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $student=new Student();
        $student->frist_name=$request->frist_name;
        $student->last_name=$request->last_name;
        $student->date=$request->date;
        $student->mobile=$request->mobile;
        $student->status=$request->status;
        $student->save();
        $student->corses()->attach($request->course_id);

        return redirect('/students');
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
    public function edit(Student $student)
    {
        return view('admin.editStudent')->with('student',$student)
        ->with('course', Course::get(['id','name']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
          $student->frist_name=$request->frist_name;
        $student->last_name=$request->last_name;
        $student->date=$request->date;
        $student->mobile=$request->mobile;
        $student->status=$request->status;
        $student->save();
        $student->corses()->sync($request->course_id);
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

        $student->delete();
return redirect('/students');
    }
}
