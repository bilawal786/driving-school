<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
use Validator;
use Session;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructor = Instructor::all();
        return view('admin.front.instructor.index',compact('instructor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.front.instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
    
        $chek = Instructor::all();
       
        if($chek->count()<4){
           
         $instructor = new Instructor();
        
         $instructor->name = $request->name;
         $instructor->job = $request->job;
         $instructor->description1 = $request->description1;
         $instructor->description2 = $request->description2;
         $instructor->facebook = $request->facebook;
         $instructor->instagram = $request->instagram;
        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $instructor->image1= 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $instructor->image2 = 'admin/about/' . $name;
        }
        
        $instructor->save();
        
        Session::flash('message', "Vos données enregistrées");
        $instructor = Instructor::all();
        return view('admin.front.instructor.index',compact('instructor'));
    }
    else{
        Session::flash('error', "Vos données ne sont pas enregistrées, veuillez supprimer les données");
        $instructor = Instructor::all();
        return view('admin.front.instructor.index',compact('instructor'));
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
        $instructor = Instructor::where('id','=',$id)->first();
        return view('admin.front.instructor.edit',compact('instructor'));

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
        $instructor = Instructor::where('id','=',$id)->first();
        $instructor->name = $request->name;
         $instructor->job = $request->job;
         $instructor->description1 = $request->description1;
         $instructor->description2 = $request->description2;
         $instructor->facebook = $request->facebook;
         $instructor->instagram = $request->instagram;
        if ($request->hasfile('image1')) {

            $image1 = $request->file('image1');
            $name = time() . 'image1' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $instructor->image1= 'admin/about/' . $name;
        }
        if ($request->hasfile('image2')) {

            $image1 = $request->file('image2');
            $name = time() . 'image2' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'admin/about/';
            $image1->move($destinationPath, $name);
            $instructor->image2 = 'admin/about/' . $name;
        }
        
        $instructor->Update();
        
        Session::flash('message', "Votre mise à jour de données");
        $instructor = Instructor::all();
        return view('admin.front.instructor.index',compact('instructor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {$instructor = Instructor::where('id','=',$id)->first();
        $instructor->delete();
        Session::flash('error', "Vos données supprimées");
        $instructor = Instructor::all();
        return back();
    }
}
