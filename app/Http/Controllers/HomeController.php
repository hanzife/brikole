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
use App\Favoris;
use App\Historique;
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
     

        if(session()->has('id')){

            $idClient = session()->get('id');

            $Datahistorique = DB::table('historiques')
            ->where('id_client','=',$idClient)
            ->join('brikoleurs','historiques.id_brikoleur','=','brikoleurs.id')
            ->join('images','images.id_brikoleur','=','brikoleurs.id')
            ->where('images.type','=','Profile')
            ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
            ->select('professions.libelle_P','brikoleurs.id','brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','images.reference','historiques.created_at')
            // ->inRandomOrder()
            ->orderBy('historiques.created_at', 'DESC')
            ->limit(5)
            ->get();
            $countHistory = count($Datahistorique);
            
            

            $dataimages = DB::table('images')  
            ->where('images.type','=','Portfolio')
            ->join('historiques','historiques.id_brikoleur','=','images.id_brikoleur')
            ->where('id_client','=',$idClient)
            ->select('images.reference','images.id_brikoleur' )  
            ->groupBy('historiques.id_brikoleur')
            // ->orderBy('historiques.created_at', 'DESC')
            // ->inRandomOrder()

            ->get();


            



            // $Datahistorique = 
            // ->select('brikoleurs.nom','brikoleurs.prenom','images.id_image','images.reference','professions.libelle_P')
            
            return view('welcome',compact('data','dataprofession','datacity','suprofession','brikoluerCount','Datahistorique','countHistory','dataimages'));

        }
        else{
            return view('welcome',compact('data','dataprofession','datacity','suprofession','brikoluerCount'));

        }

        //Redirect to View welcome.php

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
        // ->limit(3)
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

        
        //GET FAVE
        $favoites = DB::table('favoris')
        ->select('favoris.id_client','favoris.id_brikoleur')
        ->get();

        //Count the rows retrieved
        $resCount = count($results);
        //Redirect to a View searchresults.php
        return view('searchresults',compact('results','profession','ville','dataprofession','datacity','reslibelle_SP','dataimages','resCount','CountImages','favoites'));
    }

    public function Searchloadmore(Request $request){
        // if($request->ajax()){


        //     $profession = $request->profession;
        //     $ville = $request->ville;
        //     //Brikoluer Inforamations
        //     $results = DB::table('brikoleurs')
        //     ->where('brikoleurs.ville','=',$ville)
        //     ->join('images','images.Id_brikoleur','=','id')
        //     ->where('images.type','=','profile')
        //     ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        //     ->where('professions.libelle_P','=',$profession)
        //     ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.description','brikoleurs.ville','images.reference','id')
        //     ->inRandomOrder()
        //     ->limit(3)
        //     ->get();

        //     //All SubProfessions
        //     $reslibelle_SP = DB::table('brikoleurs')
        //     ->where('brikoleurs.ville','=',$ville)
        //     ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        //     ->where('professions.libelle_P','=',$profession)
        //     ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','id')
        //     ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        //     ->select('sous_professions.libelle_SP','sp_brikoluers.Id_brikoleur')
        //     ->distinct()
        //     ->get();
        //     //Brikoluer Images
        //     $dataimages = DB::table('images')
        //     ->join('brikoleurs','images.id_brikoleur','=','id')
        //     ->where('images.type','=','Portfolio')
        //     ->select('images.reference','images.id_brikoleur')
        //     ->inRandomOrder()
        //     // ->limit(3)
        //     ->get();

        //     $CountImages = count($dataimages);

        
        //     //GET FAVE
        //     $favoites = DB::table('favoris')
        //     ->select('favoris.id_client','favoris.id_brikoleur')
        //     ->get();

        //     //Count the rows retrieved
        //     $resCount = count($results);

        
        //     $output='';

        //     if(!$results->isEmpty()){
        //         foreach($results as $resultsrow){
        //             $output='
        //             <div class="sr-profile">
        //                     <div class="sr-portfolio">
        //                         <div class="sr-portfolio-img">
                                
        //                             @foreach('.$dataimages.' as $rowimg)
        //                             @if('.$resultsrow->id.' == $rowimg->id_brikoleur)
        //                             <a href=""><img src="/images/Uploads/Portfolio/{{$rowimg->reference}}" alt="Portfolio"/></a>
        //                             @endif
        //                             @if('.$resultsrow->id.' == !$rowimg->id_brikoleur)
        //                             <a href=""><img src="/images/bkX.png" alt=""/></a>
                                
        //                             @endif
        //                             @endforeach
        //                             <!-- <a href=""><img src="/images/bkX.png" alt=""/></a> -->
        //                         </div>
        //                         <div class="sr-arrows-container" id="validatedarrows">
        //                             <div class="sr-arrows">
        //                                 <svg
        //                                     class="sr-arrowLeft"
        //                                     width="32"
        //                                     height="26"
        //                                     viewBox="0 0 32 26"
        //                                     fill="none"
        //                                     xmlns="http://www.w3.org/2000/svg"
        //                                 >
        //                                     <rect
        //                                         x="0.5"
        //                                         y="0.5"
        //                                         width="31"
        //                                         height="25"
        //                                         rx="4.5"
        //                                         fill="white"
        //                                     />
        //                                     <path
        //                                         fill-rule="evenodd"
        //                                         clip-rule="evenodd"
        //                                         d="M18.707 8.29303C18.8945 8.48056 18.9998 8.73487 18.9998 9.00003C18.9998 9.26519 18.8945 9.5195 18.707 9.70703L15.414 13L18.707 16.293C18.8892 16.4816 18.99 16.7342 18.9877 16.9964C18.9854 17.2586 18.8803 17.5094 18.6948 17.6948C18.5094 17.8803 18.2586 17.9854 17.9964 17.9877C17.7342 17.99 17.4816 17.8892 17.293 17.707L13.293 13.707C13.1056 13.5195 13.0002 13.2652 13.0002 13C13.0002 12.7349 13.1056 12.4806 13.293 12.293L17.293 8.29303C17.4806 8.10556 17.7349 8.00024 18 8.00024C18.2652 8.00024 18.5195 8.10556 18.707 8.29303Z"
        //                                         fill="#0D0C22"
        //                                     />
        //                                     <rect
        //                                         x="0.5"
        //                                         y="0.5"
        //                                         width="31"
        //                                         height="25"
        //                                         rx="4.5"
        //                                         stroke="#D2D6DB"
        //                                     />
        //                                 </svg>
        //                                 <svg
        //                                     class="sr-arrowRight"
        //                                     width="32"
        //                                     height="26"
        //                                     viewBox="0 0 32 26"
        //                                     fill="none"
        //                                     xmlns="http://www.w3.org/2000/svg"
        //                                 >
        //                                     <rect
        //                                         x="0.5"
        //                                         y="0.5"
        //                                         width="31"
        //                                         height="25"
        //                                         rx="4.5"
        //                                         fill="white"
        //                                     />
        //                                     <path
        //                                         fill-rule="evenodd"
        //                                         clip-rule="evenodd"
        //                                         d="M13.293 17.7069C13.1056 17.5194 13.0002 17.2651 13.0002 16.9999C13.0002 16.7348 13.1056 16.4804 13.293 16.2929L16.586 12.9999L13.293 9.70692C13.1109 9.51832 13.0101 9.26571 13.0124 9.00352C13.0146 8.74132 13.1198 8.49051 13.3052 8.3051C13.4906 8.11969 13.7414 8.01452 14.0036 8.01224C14.2658 8.00997 14.5184 8.11076 14.707 8.29292L18.707 12.2929C18.8945 12.4804 18.9998 12.7348 18.9998 12.9999C18.9998 13.2651 18.8945 13.5194 18.707 13.7069L14.707 17.7069C14.5195 17.8944 14.2652 17.9997 14 17.9997C13.7349 17.9997 13.4806 17.8944 13.293 17.7069Z"
        //                                         fill="#0D0C22"
        //                                     />
        //                                     <rect
        //                                         x="0.5"
        //                                         y="0.5"
        //                                         width="31"
        //                                         height="25"
        //                                         rx="4.5"
        //                                         stroke="#D2D6DB"
        //                                     />
        //                                 </svg>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     <!-- Prifile Infos --> 
        //                     <div class="sr-infos">
        //                         <div class="sr-infos-sub">
        //                             <div class="sr-imgName">
        //                                 <div class="sr-profilePhoto">
        //                                     <img src="/images/Uploads/Profile/'.$resultsrow->reference.'"
        //                                     alt="Profile de '.$resultsrow->prenom.' '.$resultsrow->nom.'"/>
        //                                 </div>
        //                                 <div class="sr-profileInfo">
        //                                     <div class="sr-NomPRENOM">
        //                                         <a href="/search/'.$resultsrow->id.'"> '.$resultsrow->prenom.' '.$resultsrow->nom.'</a
        //                                         >
        //                                     </div>
        //                                     <input type="hidden" class="selectedBrikoleur" value="'.$resultsrow->id.'">
                                        
        //                                     <div class="sr-SousProf-all">
        //                                         @foreach('.$reslibelle_SP.' as $res)
        //                                         @if('.$resultsrow->id.' == $res->Id_brikoleur)                    
        //                                         <div class="sr-SousProf">
        //                                         {{$res->libelle_SP}}
        //                                         </div>
        //                                         @endif
        //                                     @endforeach
        //                                     </div>
        //                                 </div>
        //                             </div>
        //                             <div
        //                                 class="sr-SousProf-all sr-SousProf-all-resp"
        //                             >
        //                                 <div class="sr-SousProf">
        //                                 </div>
        //                             </div>
        //                             <div class="sr-description">
        //                                 <div class="sr-desc">
        //                                 '.$resultsrow->description.'
        //                                 </div>
        //                                 <div class="sr-address">
        //                                     <span class="fw-500">Adresse : </span>
        //                                     <span>
        //                                     '.$resultsrow->ville.'
        //                                     </span>
        //                                 </div>
        //                             </div>
        //                         </div>
        //                     </div>
        //                     ';
        //         }
        //         // $output .='<div class="sr-showMore">
        //         // <button class="sr-showMoreBtn">
        //         //     <svg
        //         //         width="15"
        //         //         height="14"
        //         //         viewBox="0 0 15 14"
        //         //         fill="none"
        //         //         xmlns="http://www.w3.org/2000/svg"
        //         //     >
        //         //         <path
        //         //             fill-rule="evenodd"
        //         //             clip-rule="evenodd"
        //         //             d="M7.5 0C7.76522 0 8.01957 0.105357 8.20711 0.292893C8.39464 0.48043 8.5 0.734784 8.5 1V6H13.5C13.7652 6 14.0196 6.10536 14.2071 6.29289C14.3946 6.48043 14.5 6.73478 14.5 7C14.5 7.26522 14.3946 7.51957 14.2071 7.70711C14.0196 7.89464 13.7652 8 13.5 8H8.5V13C8.5 13.2652 8.39464 13.5196 8.20711 13.7071C8.01957 13.8946 7.76522 14 7.5 14C7.23478 14 6.98043 13.8946 6.79289 13.7071C6.60536 13.5196 6.5 13.2652 6.5 13V8H1.5C1.23478 8 0.98043 7.89464 0.792893 7.70711C0.605357 7.51957 0.5 7.26522 0.5 7C0.5 6.73478 0.605357 6.48043 0.792893 6.29289C0.98043 6.10536 1.23478 6 1.5 6H6.5V1C6.5 0.734784 6.60536 0.48043 6.79289 0.292893C6.98043 0.105357 7.23478 0 7.5 0Z"
        //         //             fill="#585863"
        //         //         />
        //         //     </svg>
        //         //     Afficher plus
        //         //     </button>
        //         // </div>';
        //     }
        //     else{
        //         $output .='<div class="sr-showMore">
        //         <button class="sr-showMoreBtn">
        //             <svg
        //                 width="15"
        //                 height="14"
        //                 viewBox="0 0 15 14"
        //                 fill="none"
        //                 xmlns="http://www.w3.org/2000/svg"
        //             >
        //                 <path
        //                     fill-rule="evenodd"
        //                     clip-rule="evenodd"
        //                     d="M7.5 0C7.76522 0 8.01957 0.105357 8.20711 0.292893C8.39464 0.48043 8.5 0.734784 8.5 1V6H13.5C13.7652 6 14.0196 6.10536 14.2071 6.29289C14.3946 6.48043 14.5 6.73478 14.5 7C14.5 7.26522 14.3946 7.51957 14.2071 7.70711C14.0196 7.89464 13.7652 8 13.5 8H8.5V13C8.5 13.2652 8.39464 13.5196 8.20711 13.7071C8.01957 13.8946 7.76522 14 7.5 14C7.23478 14 6.98043 13.8946 6.79289 13.7071C6.60536 13.5196 6.5 13.2652 6.5 13V8H1.5C1.23478 8 0.98043 7.89464 0.792893 7.70711C0.605357 7.51957 0.5 7.26522 0.5 7C0.5 6.73478 0.605357 6.48043 0.792893 6.29289C0.98043 6.10536 1.23478 6 1.5 6H6.5V1C6.5 0.734784 6.60536 0.48043 6.79289 0.292893C6.98043 0.105357 7.23478 0 7.5 0Z"
        //                     fill="#585863"
        //                 />
        //             </svg>
        //             Aucune donnée disponible
        //         </button>
        //     </div>';
        //     }
        //     echo $output;
        // }

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

        if (session()->has('id')){
            $idClient = session()->get('id');

            //this client has this brikoleur  
            $ThisVisited = DB::table('historiques')
            ->where('id_brikoleur','=',$id_brikoleur)
            ->where('id_client','=',$idClient)
            ->select('id_client','id_brikoleur')
            ->get();
    
             //Add Brikoleur to my History
            if(count($ThisVisited)==0){
                $history = new Historique;
                $history->id_client=$idClient;
                $history->id_brikoleur=$id_brikoleur;
                $history->save();
            }

        }

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
