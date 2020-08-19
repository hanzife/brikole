<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Client;
use DB;
use Illuminate\Support\Facades\Hash;



class ClientRegisterController extends Controller
{
    //
    use RegistersUsers;
    
    public function __construct()
    {
        $this->middleware('guest:client');
    }

   
    // protected $redirectTo = 'home';

    

    public function register(Request $request)
    {

        $this->validate($request, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'mot_passe' => ['required', 'string', 'max:255'],
            'lieu' => ['required', 'string', 'max:255'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        // $request['mot_passe'] = Hash::make($request->password);

        Client::create($request->all());
        
        $getID = DB::table('clients') 
        ->where('clients.email','=',$request->input('email'))
        ->select('id')
        ->get();

        $request->session()->put('id',$getID[0]->id);
        
        return redirect()->intended(route('clientdashboard'));

        // return redirect()->intended(route('auth.dashboard'));
    }
}
