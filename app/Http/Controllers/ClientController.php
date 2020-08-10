<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Users\Client;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Commentaire;
use App\Favoris;
use App\Historique;
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

    public function BrikoleurAddFav($id_brikoleur,Request $request){
            
        $idClient = session()->get('id');
        $bool = $request->profile_liked;
        
        // echo $bool ;
        if($bool == "false"){
                 Favoris::insert( [
                'id_brikoleur' => $id_brikoleur,
                'id_client' =>$idClient,
            ]);
            echo 'inserted';
            echo $bool;
        }
        else{
            DB::table('favoris')->where('id_brikoleur', '=', $id_brikoleur)->delete();
            echo 'deleted';
            echo $bool;

        }

        // if(!$bool){
        //     Favoris::insert( [
        //         'id_brikoleur' => $id_brikoleur,
        //         'id_client' =>$idClient,
        //     ]);
        //     $bool = "inserted";
        // }
        // if($bool){
        //     DB::table('favoris')->where('id_brikoleur', '=', $id_brikoleur)->delete();
        //     $bool ="deleted";
        // }
           

        // echo json_encode($bool);
    }

    public function Historique(){
        if (session()->has('id')){
            $idClient = session()->get('id');

            $historique = DB::table('historiques')
            ->where('id_client','=',$idClient)
            ->select('id_client','id_brikoleur','created_at')
            ->get();
            $countHistorique = count($historique);

            $Datahistorique = DB::table('historiques')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','historiques.id_brikoleur','=','brikoleurs.id')
            ->join('images','images.id_brikoleur','=','brikoleurs.id')
            ->where('images.type','=','Profile')
            ->select('historiques.id_history','brikoleurs.id','brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','images.reference')
            ->limit(5)
            ->get();
            

            $libelle_SP = DB::table('historiques')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','brikoleurs.id','=','historiques.id_brikoleur')
            ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
            ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','historiques.id_brikoleur')
            ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
            ->select('sous_professions.libelle_SP','historiques.id_brikoleur')
            ->distinct()
            ->get();
            

            
            return view('ClientDashboard.clientHistorique',compact('historique','countHistorique','Datahistorique','libelle_SP'));
        }
       else
       //return view('');
       return redirect()->route('login');

    }

   
    public function deleteHistory(Request $request){
        $idhistory = $request->id;

        DB::table('historiques')->where('id_history', $idhistory)->delete();

        echo 'deleted';

    }

    public function clientComments(){
        if (session()->has('id')){
            $idClient = session()->get('id');

            
            $libelle_SP = DB::table('historiques')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','brikoleurs.id','=','historiques.id_brikoleur')
            ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
            ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','historiques.id_brikoleur')
            ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
            ->select('sous_professions.libelle_SP','historiques.id_brikoleur')
            ->distinct()
            ->get();
            


            return view('ClientDashboard.clientComments');
        }
        else
        //return view('');
        return redirect()->route('login');
    }

    public function clientFavoris(){
        if (session()->has('id')){
            $idClient = session()->get('id');
            

            $historique = DB::table('favoris')
            ->where('id_client','=',$idClient)
            ->select('id_client','id_brikoleur','created_at')
            ->get();
            $countfavoris = count($historique);

            $Datafavoris = DB::table('favoris')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','favoris.id_brikoleur','=','brikoleurs.id')
            ->join('images','images.id_brikoleur','=','brikoleurs.id')
            ->where('images.type','=','Profile')
            ->select('favoris.id_favoris','brikoleurs.id','brikoleurs.nom','brikoleurs.prenom','brikoleurs.adresse','brikoleurs.ville','brikoleurs.telephone','brikoleurs.description','images.reference')
            ->limit(5)
            ->get();
            

            $libelle_SP = DB::table('favoris')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','brikoleurs.id','=','favoris.id_brikoleur')
            ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
            ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','favoris.id_brikoleur')
            ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
            ->select('sous_professions.libelle_SP','favoris.id_brikoleur')
            ->distinct()
            ->get();


            return view('ClientDashboard.clientFavoris',compact('historique','countfavoris','Datafavoris','libelle_SP'));

        }
        else
        //return view('');
        return redirect()->route('login');
    }


    public function deletefavorit(Request $request){
        $id_favoris = $request->id;
        $idClient = session()->get('id');
        //delete id_favoris linked to id_client preventing deleting another id_client 
        DB::table('favoris')->where('id_favoris', $id_favoris)
        ->where('id_client',$idClient)->delete();

        echo 'deleted';
    }
}