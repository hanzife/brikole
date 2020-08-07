<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Users\Client;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:client');
    // }
    public function index(Request $request)
    {
        
        $value = $request->session()->get('id');

        $ClientData = DB::table('clients')
        ->where('id','=',$value)
        ->select('nom')
        ->get();

        return view('clientdashboard',compact('value','ClientData'));
        //
    }
   
}