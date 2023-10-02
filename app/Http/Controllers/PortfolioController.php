<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Portfolios= Portfolio::all();
        return view('Admin.Portfolio',compact('Portfolios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Admin.createPortfolio');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'imge'=>['required',],
            'link'=>'required',
        ]);
        $iamg_name=rand().time().$request->file('imge')->getClientOriginalName();
        $request->file('imge')->move(public_path('uplodesPortfolio'),$iamg_name);
        Portfolio::create([
            'name'=>$request->name,
            'imge' =>$iamg_name,
            'link' =>$request->link,
        ]);
        return redirect()->route('admin.Portfolio.index')->with('masg','Portfolio create succful');    }

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
        $Portfolios=Portfolio::find($id);
        return view('Admin.editPortfolio',compact('Portfolios'));     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

            $request->validate([
                'name'=>'required',
                'imge'=>['file'],
                'link'=>'required',
            ]);
            $Portfolios=Portfolio::find($id);
            $iamg_name=$Portfolios->imge;
            if($request->hasFile('imge')){
            File::delete(public_path('uplodesPortfolio/'.$Portfolios->imge));
            $iamg_name=rand().time().$request->file('imge')->getClientOriginalName();
            $request->file('imge')->move(public_path('uplodesPortfolio'),$iamg_name);}

            $Portfolios->update([
                'name'=>$request->name,
                'imge' =>$iamg_name,
                'link' =>$request->link,
        ]);
        return redirect()->route('admin.Portfolio.index')->with('masg','Portfolio update succful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $Portfolios=Portfolio::find($id);
        File::delete(public_path('uplodesPortfolio/'.$Portfolios->imge));
        $Portfolios->delete();
        return redirect()->back();    }

}
