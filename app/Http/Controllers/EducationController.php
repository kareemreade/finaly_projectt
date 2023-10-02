<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Educations= Education::all();

        return view('Admin.Education',compact('Educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.createEducation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'Title'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'University_Name'=>'required',
            'details'=>'required',
        ]);
        Education::create([
            'Title'=>$request->Title,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'University_Name' =>$request->University_Name,
            'details' =>$request->details,
        ]);
        return redirect()->route('admin.Education.index')->with('masg','Education create succful');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Education=Education::find($id);
        return view('Admin.editEducation',compact('Education'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $Education=Education::find($id);
        $request->validate([
            'Title'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'University_Name'=>'required',
            'details'=>'required',
        ]);
        $Education->update([
            'Title'=>$request->Title,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'University_Name' =>$request->University_Name,
            'details' =>$request->details,
        ]);
        return redirect()->route('admin.Education.index')->with('masg','Education update succful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $Education=Education::find($id);
        $Education->delete();
        return redirect()->back();
     }
}
