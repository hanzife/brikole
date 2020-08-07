<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Call to All Models needed
use App\Brikoleur;
use App\Image;
use App\Profession;
use App\SousProfession;
use App\SpBrikoluer;
use App\Commentaire;
use DB;
// use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        
        // dd(\App\Brikoleur::all());
        //count Brikoluers
        $brikoluerCount = DB::table('brikoleurs')->count('id');
        //Show me All Brikoluers with their rrofile img 
        $data = DB::table('brikoleurs')
        ->join('images','images.Id_brikoleur','=','id')
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
        ->join('images','images.Id_brikoleur','=','id')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        ->where('professions.libelle_P','=',$profession)
        ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','brikoleurs.ville','images.reference','id')
        ->inRandomOrder()
        ->limit(10)
        ->get();
        //All SubProfessions
        $reslibelle_SP = DB::table('brikoleurs')
        ->where('brikoleurs.ville','=',$ville)
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->where('professions.libelle_P','=',$profession)
        ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','id')
        ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        ->select('sous_professions.libelle_SP','sp_brikoluers.Id_brikoleur')
        ->distinct()
        ->get();
        //Brikoluer Images
        $dataimages = DB::table('images')
        ->join('brikoleurs','images.id_brikoleur','=','id')
        ->where('images.type','=','Portfolio')
        ->select('images.reference','images.id_brikoleur')
        ->inRandomOrder()
        // ->limit(3)
        ->get();

        $CountImages = count($dataimages);

        //Count the rows retrieved
        $resCount = count($results);
        //Redirect to a View searchresults.php
        return view('searchresults',compact('results','profession','ville','dataprofession','datacity','reslibelle_SP','dataimages','resCount','CountImages'));
    }

    public function show($id_brikoleur)
    {
        // $ShowBrikoleur =Brikoleur::select()->where('id','=',$id_brikoleur)->get();
        $DataBrikoleur = DB::table('brikoleurs')
        ->where('id','=',$id_brikoleur)
        ->join('images','images.Id_brikoleur','=','id')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.telephone','brikoleurs.description','brikoleurs.adresse','brikoleurs.ville','professions.libelle_P','images.reference','id')
        ->inRandomOrder()
        ->limit(1)
        ->get();
        //Selected Brikoleur's Portfolio Images
        $DataImages = DB::table('images')
        ->where('images.id_brikoleur','=',$id_brikoleur)
        ->where('images.type','=','Portfolio')
        ->select('images.reference','images.id_brikoleur','images.id_image')
        ->get();
        //SubProfessions
        $libelle_SP = DB::table('brikoleurs')
        ->where('id','=',$id_brikoleur)
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','id')
        ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        ->select('sous_professions.libelle_SP')
        ->distinct()
        ->get();

        // echo $ShowBrikoleur;
        return view('BrikoleurProfile.v_visiteur.B-P-V-portfolio',compact('DataBrikoleur','DataImages','libelle_SP'));
    }

    public function showComments($id_brikoleur)
    {
        // $ShowBrikoleur =Brikoleur::select()->where('id','=',$id_brikoleur)->get();
        $DataBrikoleur = DB::table('brikoleurs')
        ->where('id','=',$id_brikoleur)
        ->join('images','images.Id_brikoleur','=','id')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.telephone','brikoleurs.description','brikoleurs.adresse','brikoleurs.ville','professions.libelle_P','images.reference','id')
        ->inRandomOrder()
        ->limit(1)
        ->get();
        //SubProfessions
        $libelle_SP = DB::table('brikoleurs')
        ->where('id','=',$id_brikoleur)
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','id')
        ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        ->select('sous_professions.libelle_SP')
        ->distinct()
        ->get();
        //Comments
        $DataComments = DB::table('commentaires')
        ->where('commentaires.id_brikoleur','=',$id_brikoleur)
        ->join('clients','clients.id','=','commentaires.id_client')
        ->select('commentaires.commentaire','commentaires.created_at','clients.prenom','clients.nom','clients.lieu','liked')
        ->get();
        //Count My Comments
        $CountComents = count($DataComments);


        //if Client Connected
            $value = session()->get('id');
            $ClientData = DB::table('clients')
            ->where('id','=',$value)
            ->select('nom')
            ->get();
            
       
        

       

        // echo $ShowBrikoleur;
        return view('BrikoleurProfile.v_visiteur.B-P-V-comments',compact('DataBrikoleur','libelle_SP','DataComments','CountComents','value'));
    }
    
}
