<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Experiences= Experience::all();
        return view('Admin.Experience',compact('Experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.createExperience');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_experiences'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'University_Name'=>'required',
            'details_experiences'=>'required',
        ]);
        Experience::create([
            'title_experiences'=>$request->title_experiences,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'University_Name' =>$request->University_Name,
            'details_experiences' =>$request->details_experiences,
        ]);
        return redirect()->route('admin.Experience.index')->with('masg','Experience create succful');    }

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
        $Experiences=Experience::find($id);
        return view('Admin.editExperience',compact('Experiences'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $Experiences=Experience::find($id);
        $request->validate([
            'title_experiences'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'University_Name'=>'required',
            'details_experiences'=>'required',
        ]);
        $Experiences->update([
            'title_experiences'=>$request->title_experiences,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'University_Name' =>$request->University_Name,
            'details_experiences' =>$request->details_experiences,
        ]);
        return redirect()->route('admin.Experience.index')->with('masg','Experience update succful');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $Experiences=Experience::find($id);
        $Experiences->delete();
        return redirect()->back();    }
}
