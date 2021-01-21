<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Redirect;

use Validate;
use Validator;

use Brikoleur;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function checklogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|exists:brikoleurs',  
            'mot_passe' => 'required|exists:brikoleurs|string|min:6]);'
        ]);
        if($validator->fails())
        {
            $validatorClient = Validator::make($request->all(),[
                'email' => 'required|exists:clients',  
                'mot_passe' => 'required|exists:clients|string|min:6',
            ]);
            if($validatorClient->fails()){
                return Redirect::back()->withErrors(['Veuillez vérifier que l\'adresse e-mail et le mot de passe correspondent', 'NoFoundError']);
            }
            else{
                $getIDClient = DB::table('clients') 
                ->where('clients.email','=',$request->email)
                ->where('clients.mot_passe','=',$request->mot_passe)
                ->select('id')
                ->get();
                if(count($getIDClient)){
                    foreach($getIDClient as $rawClient){
                        $request->session()->put('id',$rawClient->id);
                        return redirect()->intended(route('clientdashboard'));
                    }
                }
                else{
                return Redirect::back()->withErrors(['Le mot de passe Client ne correspond pas à l\'email', 'PasswordError']);
                }                
            }
        }
        else{
            $getIDBrikoleur = DB::table('brikoleurs') 
            ->where('brikoleurs.email','=',$request->email)
            ->where('brikoleurs.mot_passe','=',$request->mot_passe)
            ->select('id')
            ->get();
            if(count($getIDBrikoleur)){
                foreach($getIDBrikoleur as $rawBrikoleur){
                    Auth::loginUsingId($rawBrikoleur->id);
                    return redirect()->intended(route('myportfolio'));
                }
            }
            else{
            return Redirect::back()->withErrors(['Le mot de passe Brikoleur ne correspond pas à l\'email', 'PasswrdError']);
            }
        }   
    }
}

        // $this->validate($request, [ 
        //     'email' => 'required|exists:clients',  
        //     'mot_passe' => 'required|exists:clients|alphaNum|min:6]);'
        // ]);
        // if($validate->fails())
        //       {
        //           Session::flash('messageErr',"Error add record !!");
        //           return back()->withInput()->withErrors($validate);
        //       }
            
        // $getID = DB::table('clients') 
        // ->where('clients.email','=',$request->email)
        // ->select('id')
        // ->get();

        // $request->session()->put('id',$getID[0]->id);
        
        // return redirect()->intended(route('clientdashboard'));


        
        // $this->validate($request, [ 
        //     'email' => 'required|exists:brikoleurs',  
        //     'mot_passe' => 'required|alphaNum|min:6]);'
        // ]);
        
            
        // $getID = DB::table('brikoleurs') 
        // ->where('brikoleurs.email','=',$request->email)
        // ->select('id')
        // ->get();

        //   $userData = array(
        //     'id' => $getID[0]->id,
          
        // );
        
        //  if( Auth::attempt($userData)){
        //     //  return redirect('/'); 
        //     echo 'welcome';
        // }

        // $request->session()->put('id',$getID[0]->id);
        
        // return redirect()->intended(route('clientdashboard'));


        // // This validates all inputs from $request
        // $this->validate($request, [ 
        //     'email' => 'required|exists:brikoleurs',  
        //     'mot_passe' => 'required|alphaNum|min:6]);'
        // ]);

        // $userData = array(
        //     'email' => $request->get('email'),
        //     'password' => $request->get('mot_passe')
        // );

        // // echo $userData['email'];
        // // echo $userData['password'];

       
        //         // $email = $request->email;
        //         // $password = $request->mot_passe;
                
        // if( Auth::attempt($userData)){
        //     //  return redirect('/'); 
        //     echo 'welcome';
        // }
        // else{
        //     echo 'not';
        // }

//     }
// }

        // $email = $request->email;
        // $mot_passe = $request->mot_passe;

        // $email_Brikoleur = DB::table('brikoleurs')
        // ->where('brikoleurs.email','=',$email)
        // ->get('email');

        // $mot_passeBrikoleur = DB::table('brikoleurs')
        // ->where('brikoleurs.mot_passe','=',$mot_passe)
        // ->get('mot_passe');

        // $email_Client = DB::table('clients')
        // ->where('clients.email','=',$email)
        // ->get('email');

        // $motPasse_Client = DB::table('clients')
        // ->where('clients.mot_passe','=',$mot_passe)
        // ->get('mot_passe');


        // if($email_Client && $motPasse_Client) {
        //     echo 'exist Client';
        //     echo $email_Client;
        //     echo '<br>';
        //     echo $motPasse_Client->first()->mot_passe;
        
        // }
        // elseif(!empty($email_Brikoleur->first()->email) || !empty($mot_passeBrikoleur->first()->mot_passe)){
        //     echo 'exist Brikoleur';
        //     echo $email_Brikoleur->first()->email;
        //     echo '<br>';
        //     echo $mot_passeBrikoleur->first()->mot_passe;
        // }
        // else{
        //     echo '';
        // }
        // if($email == $request->email){
        //     echo $email;
        // }
        // else{
        //     echo 'err';
        // }

        // if(Auth::attempt($userData)){
        //     //  return redirect('/'); 
        //     echo $request->mot_passe;
        // }

   
        // echo $request->mot_passe;
        // $userData = array(
        //     'email' => $request->email,
        //     'mot_passe' => $request->mot_passe
        // );

        // $emailBrikoleur = DB::table('brikoleurs')
        // ->where('brikoleurs.email','=',$userData['email'])
        // ->select('email')
        // ->get();
        // $mot_passeBrikoleur = DB::table('brikoleurs')
        // ->where('brikoleurs.mot_passe','=',$userData['mot_passe'])
        // ->select('mot_passe')
        // ->get();
        // echo $mot_passeBrikoleur;
        // // if($emailBrikoleur == $request->email){
        // //     echo $emailBrikoleur;
        // //     echo $mot_passeBrikoleur;
        // // }
        // // else{
        // //     echo 'err';
        // // }

       