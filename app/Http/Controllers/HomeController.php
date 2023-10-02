<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Support\Renderable;

use function PHPSTORM_META\type;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()

    {
        $user= Auth::user()->type;
        if( $user == 'admin'){
                return view('Admin.index') ;
        }
        else{
               return view('not-allowed');
        }

    }
    public function registerr(){
        Auth::logout();
        return view('auth.register');
    }
    
}
