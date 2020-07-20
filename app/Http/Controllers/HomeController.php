<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Call to All Models needed
use App\Brikoleur;
use App\Image;
use App\Profession;
use App\SousProfession;
use App\SpBrikoluer;
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
        //count Brikoluers
        $brikoluerCount = DB::table('brikoleurs')->count('brikoleurs.Id_brikoleur');
        //Show me All Brikoluers with their rrofile img 
        $data = DB::table('brikoleurs')
        ->join('images','images.Id_brikoleur','=','brikoleurs.Id_brikoleur')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->inRandomOrder()
        ->limit(6)
        ->select('images.reference','brikoleurs.nom','brikoleurs.prenom','professions.libelle_P')
        ->get();
        //all professions
        //This will be used to include sun-professions with the $suprofession
        // $dataprofession = Profession::distinct()->get(['libelle_P','professions.id_profession']);
        $dataprofession = Profession::distinct()->get(['libelle_P']);
        //Cities
        $datacity = Brikoleur::distinct()->get(['ville']);
        //This will be used to include sun-professions with the 1st $dataprofession
        $suprofession = DB::table('sous_professions')
        ->join('professions','sous_professions.id_sous_profession','=','professions.id_profession')
        ->select('sous_professions.libelle_SP','sous_professions.id_profession')
        ->distinct()
        ->get();
        //Redirect to View welcome.php
        return view('welcome',compact('data','dataprofession','datacity','suprofession','brikoluerCount'));
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
    public function Search($profession,$ville)
    {
        //Bring All Professions
        $dataprofession = Profession::distinct()->get(['libelle_P']);
        //Cities
        $datacity = Brikoleur::distinct()->get(['ville']);
        //Brikoluer Inforamations
        $results = DB::table('brikoleurs')
        ->where('brikoleurs.ville','=',$ville)
        ->join('images','images.Id_brikoleur','=','brikoleurs.Id_brikoleur')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        ->where('professions.libelle_P','=',$profession)
        ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','brikoleurs.ville','images.reference','brikoleurs.Id_brikoleur')
        ->inRandomOrder()
        ->limit(10)
        ->get();
        //All SubProfessions
        $reslibelle_SP = DB::table('brikoleurs')
        ->where('brikoleurs.ville','=',$ville)
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->where('professions.libelle_P','=',$profession)
        ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','brikoleurs.id_Brikoleur')
        ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        ->select('sous_professions.libelle_SP','sp_brikoluers.Id_brikoleur')
        ->distinct()
        ->get();
        //Brikoluer Images
        $dataimages = DB::table('images')
        ->join('brikoleurs','images.id_brikoleur','=','brikoleurs.id_brikoleur')
        ->where('images.type','=','Portfolio')
        ->select('images.reference','images.id_brikoleur')
        ->inRandomOrder()
        // ->limit(3)
        ->get();
        //Count the rows retrieved
        $resCount = count($results);
        //Redirect to a View searchresults.php
        return view('searchresults',compact('results','profession','ville','dataprofession','datacity','reslibelle_SP','dataimages','resCount'));
    }
}
