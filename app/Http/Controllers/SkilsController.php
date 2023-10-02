<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkilsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $skills= Skill::all();
        return view('Admin.Skill',compact('skills'));



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    return view('Admin.createSkills');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_Skils'=>'required',
            'ValueOf_Skils'=>'required',
        ]);
        Skill::create([
            'title_Skils'=>$request->title_Skils,
            'ValueOf_Skils' =>$request->ValueOf_Skils,
        ]);
        return redirect()->route('admin.Skills.index')->with('masg','Skill create succful');
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


        $skills=Skill::find($id);
        return view('Admin.UpdateSkills',compact('skills'));



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_Skils'=>'required',
            'ValueOf_Skils'=>'required',
        ]);
        $skills= Skill::find($id);
        $skills->update([
            'title_Skils'=>$request->title_Skils,
            'ValueOf_Skils' =>$request->ValueOf_Skils,
        ]);
        return redirect()->route('admin.Skills.index')->with('masg','Skill update succful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

            $skills= Skill::find($id);
            $skills->delete();
            return redirect()->back();

        }


    }

