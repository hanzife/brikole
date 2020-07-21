<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class signupbrikoleur2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        // dd(Auth::user());
        // $id = Auth::id();
        // Auth::guard('brikoleur')->user();
        // $brikoluerlogged = Auth::guard('brikoleur');

        $brikoluerlogged = Auth::user();
        // $brikoluerlogged}->nom
        return view('Auth.signupBrikoleur_2', compact('brikoluerlogged'));
        // return view('Auth.signupBrikoleur_2');
    }
    

}
