<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseEnroll;
use Validator;
use Session;
class CourseEnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = CourseEnroll::all();

    return view('admin.front.courseEnrollment.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.front.courseEnrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $input = $request->all(); 
        if($input) {
        $courseEnroll = CourseEnroll::create($input);
        Session::flash('message', "Your Data Saved");
        return back();
        }
        else{
            
            Session::flash('error', "Your Data Not Saved");
            return back();
        }
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
        $courses = CourseEnroll::where('id','=',$id)->first();
        return view('admin.front.courseEnrollment.edit',compact('courses'));
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
        $courses = CourseEnroll::where('id','=',$id)->first();
        $courses->courseTitle = $request->courseTitle;
         $courses->price = $request->price;
         $courses->courseDetails1 = $request->courseDetails1;
         $courses->courseDetails2 = $request->courseDetails2;
         $courses->courseDetails3 = $request->courseDetails3;
         $courses->courseDetails4 = $request->courseDetails2;
         $courses->courseDetails5 = $request->courseDetails3;
         
        
        $courses->Update();
        
        Session::flash('message', "Your Data Update");
        $courses = CourseEnroll::all();
        return view('admin.front.courseEnrollment.index',compact('courses'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = CourseEnroll::where('id','=',$id)->first();
        $courses->delete();
        Session::flash('error', "Your Data Deleted");
        $courses = CourseEnroll::all();
        return back();
    }
}
