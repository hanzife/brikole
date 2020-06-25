<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brikoleur;
use App\Image;
use App\Profession;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(\App\Brikoleur::all());
        $data = DB::table('brikoleurs')
        ->join('images','images.Id_brikoleur','=','brikoleurs.Id_brikoleur')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_Brikoleur','=','brikoleurs.Id_brikoleur') 
        ->inRandomOrder()
        ->limit(6)
        ->select('images.reference','brikoleurs.nom','brikoleurs.prenom','professions.libelle_P')
        // ->orWhere('Image.type','profile')
        ->get();

        //all professions
        $dataprofession = Profession::all();
        return view('welcome',compact('data','dataprofession'));


        // return view('welcome',[
        //     'brikoleurs' => Brikoleur::all()
        //     // 'images' => Image::all()            
        // ]);

        
        // ORDER BY RAND() LIMIT 6
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

}
