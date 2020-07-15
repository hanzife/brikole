<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Import Models
use App\Brikoleur;
use App\Image;
use App\Profession;
use App\SousProfession;
use App\SpBrikoluer;
use DB;
class SignupBrikoluer extends Controller
{
    public function create(){
        return view('signupBrikoleur_2');
    }
    public function store(Request $request){
        $var = $request->input('name');
    }
    // //Ajax Request 
    // public function getProfessions(){
    //         $profession = Profession::
    //         distinct()
    //         ->get(['libelle_P']);
    //         // Fetch all records
    //         $professionData['data']=$profession;
    //         //RETURN JSON FORMAT
    //         echo json_encode($professionData);
    //         // return response($professionData);
    //         // return view('signupBrikoleur_2');

    // }
}
