<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('Admin.alluser',compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $users=User::find($id);
        return view('Admin.updateUser',compact('users'));
      }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users= User::find($id);
        $users->update([
          'name'=>$request->name,
          'email'=>$request->email,
          'type'=>$request->type,
          'phone'=>$request->phone,
        ]);
      return redirect()->route('admin.users.index')->with('masg','users Update succful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users= User::find($id);
        $users->delete();
        return redirect()->back();

    }
}
