<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Brikoleur;
use App\Profession;
use DB;

class signupbrikoleur2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(request $req){
        if($req->ajax()){
            $professions = Profession::select('libelle_P')->get();
            $arr=[];
            $i=0;
            foreach($professions as $row){
                $arr[$i] = $row->libelle_P;
                $i++;
            }                
            return response()->json([$arr]);
        }
        $brikoluerlogged = Auth::user();
        return view('Auth.signupBrikoleur_2', compact('brikoluerlogged'));
    }
    public function getSubProfession($professions,request $req){
        if($req->ajax()){
            $arr=[];
            $i=0;
            $sousprofessions = DB::table('sous_professions')
            ->where('professions.libelle_P','=',$professions)
            ->join('professions','sous_professions.id_profession','=','professions.id_profession')
            ->select('libelle_SP')
            ->get();   
            foreach($sousprofessions as $row){
                $arr[$i] = $row->libelle_SP;
                $i++;
            }  
            return response()->json([$arr]);
        }
       
        $brikoluerlogged = Auth::user();
        $id_user = $brikoluerlogged->id;
        $id_professions =  Profession::select('id_profession')->where('libelle_P','=',$professions)->get();
        foreach($id_professions as $row){
            $id_profession= $row->id_profession;
        }    
        DB::update('update brikoleurs set id_profession = ? where id = ?',[$id_profession,$id_user]);
        return view('Auth.signupBrikoleur_3',compact('brikoluerlogged'));
    }
    // public function getsprof(request $req, $profession){
        // if($req->ajax()){
        //     $arr=[];
        //     $i=0;
        //     $sousprofessions = DB::table('professions')
        //     ->where('professions.libelle_P','=',$profession)
        //     ->join('sous_professions','sous_professions.id_sous_profession','=','professions.id_sous_profession')
        //     ->select('libelle_SP')
        //     ->get();   
        //     foreach($sousprofessions as $row){
        //         $arr[$i] = $row->libelle_SP;
        //         $i++;
        //     }                
        //     return response()->json([$arr]);
        // }
    //     $brikoluerlogged = Auth::user();
    //     return view('Auth.signupBrikoleur_3', compact('brikoluerlogged'));

    // }

    //AJAX REQUEST
    // public function getSubProfessions($proffession){
       
    // }
    

}
