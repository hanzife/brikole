<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brikoleur;
use Illuminate\Support\Facades\Auth;
class SignupBrikoluer2 extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index(){

        dd(Auth::bikoleur());
        // $brikoluerlogged = Auth::user();
        // $brikoluerlogged}->nom
        // return view('Auth.signupBrikoleur_2', compact('brikoluerlogged'));
        return view('Auth.signupBrikoleur_2');
    }
}
