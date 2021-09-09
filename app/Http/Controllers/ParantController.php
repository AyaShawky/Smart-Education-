<?php

namespace App\Http\Controllers;

use App\Models\Parant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParantController extends Controller
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
        return view('admin.parent',['Parant' => Parant::simplePaginate(4)]);
    }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addParent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parant=new Parant();
        $parant->frist_name=$request->frist_name;
        $parant->last_name=$request->last_name;
        $parant->mobile=$request->mobile;
        $parant->status=$request->status;
        $parant->save();
        return redirect('/parant');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parant  $parant
     * @return \Illuminate\Http\Response
     */
    public function show(Parant $parant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parant  $parant
     * @return \Illuminate\Http\Response
     */
    public function edit(Parant $parant)
    {

        return view('admin.editParent')->with('Parant', $parant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parant  $parant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parant $parant)
    {
        $parant->frist_name=$request->frist_name;
        $parant->last_name=$request->last_name;
        $parant->mobile=$request->mobile;
        $parant->status=$request->status;
        $parant->save();
        return redirect('/parant');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parant  $parant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parant $parant)
    {

        $parant->delete();
        return redirect('/parant  ');
    }
}
