<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobber;
use Session;

class JobberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobber = Jobber::all();
        return view('admin.front.jobber.index',compact('jobber'));
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
        $jobber = Jobber::where('id','=',$id)->first();
        return view('admin.front.jobber.edit',compact('jobber'));
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
        $jobber = Jobber::where('id','=',$id)->first();

        $jobber->name = $request->name;
        $jobber->job = $request->job;
        $jobber->description = $request->description;
        if ($request->hasfile('image')) {

            $image1 = $request->file('image');
            $name = time() . 'image' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $jobber->image = 'admin/about/' . $name;
        }
        if ($request->hasfile('backGroundImage')) {

            $image1 = $request->file('backGroundImage');
            $name = time() . 'backGroundImage' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $jobber->backGroundImage  = 'admin/about/' . $name;
        }
        $jobber->update();
        Session::flash('message', "Vos données mises à jour");
        $jobber = Jobber::all();
        return view('admin.front.jobber.index',compact('jobber'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobber = Jobber::where('id','=',$id)->first();
        $jobber->delete();
        Session::flash('error', "Vos données supprimées");
        $jobber = Jobber::all();
        return view('admin.front.jobber.index',compact('jobber'));
    }
}
