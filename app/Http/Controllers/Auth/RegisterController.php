<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Brikoleur;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom' => 'required|string|max:254',            
            'prenom' => 'required|string|max:254',
            'telephone' => 'required|string|max:30|regex:/^\+?\s?[1-9\s\-]+$/|unique:brikoleurs',
            'email' => ['required', 'string', 'email', 'max:254', 'unique:brikoleurs'],
            'mot_passe' => 'required|string|min:8',
            // 'lieu' => 'required|string|max:254|' 
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Brikoleur
     */
    protected function create(array $data)
    {
        return Brikoleur::create([
            'nom' =>  $data['nom'],
            'prenom' =>  $data['prenom'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'verif_compte' => "0",
            'mot_passe' => $data['mot_passe'],
            'status' => "Offline",
            'points' => "0",
            'description' => "",
            'adresse' => "",
            'ville' => $data['ville'],       
        ]);
    }
}
