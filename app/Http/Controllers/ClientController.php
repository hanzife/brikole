<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Users\Client;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Commentaire;
use App\Favoris;
use Illuminate\Http\Request;
use Validator;
// use Illuminate\Support\Facades\Validator;

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

        // return view('clientdashboard',compact('value','ClientData'));
        return redirect()->route('home');

    }

    //Store New Comment
    public function postComment(Request $request){
        
        //validator
        $validation = Validator::make($request->all(),[
            'commentaire' => 'required',
            'liked' => 'required',
        ]);
        
        //Some Data 
        $idClient = session()->get('id');
        $id_brikoleur=$request->input('idbrikoleur');
        $error_array = array();
        //if there is error in the validation
        if($validation->fails()){   
            foreach($validation->messages()->getMessages() as $field_name => $messages){
                $error_array[]= $messages;
            }
        }
        //If no Error
        else{        
            $comments = new Commentaire;
            $comments->id_client=$idClient;
            $comments->id_brikoleur=$request->input('idbrikoleur');
            $comments->commentaire=$request->input('commentaire');
            $comments->liked=$request->input('liked');
            $comments->save();
        }

        //get Comments
        $DataComments = DB::table('commentaires')
        ->where('commentaires.id_brikoleur','=',$id_brikoleur)
        ->join('clients','clients.id','=','commentaires.id_client')
        ->select('commentaires.commentaire','commentaires.created_at','clients.prenom','clients.nom','clients.lieu','liked')
        ->get();
        //Count My Comments
        $CountComents = count($DataComments);
        
        $output = array(
        'error' => $error_array,
        'success' => [$DataComments,$CountComents ]
        );
       

        echo json_encode($output);

    }   

    // public function getComment(Request $req){
    //     if($req->ajax()){
           
    //         return "hello wtez";    
    //     }
    // }
    
    public function forgetClient(){
        session()->flush();
        return redirect()->route('home');
    }

    public function BrikoleurAddFav($id_brikoleur){
        
        //Id This Client
        $idClient = session()->get('id');

        //Insert to favorits
        Favoris::insert( [
            'id_brikoleur' => $id_brikoleur,
            'id_client' =>$idClient,
        ]);

        $success = "inserted";
        echo json_encode($success);
    }

   
}