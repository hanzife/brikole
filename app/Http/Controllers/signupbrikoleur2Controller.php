<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Brikoleur;
use App\Profession;
use App\SpBrikoluer;
use App\SousProfession;
use App\Image;
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

    public function getSubProfession(request $req,$professions){
        if($req->ajax()){
            $arr1=[];
            $i=0;
            $sousprofessions = DB::table('sous_professions')
            ->where('professions.libelle_P','=',$professions)
            ->join('professions','sous_professions.id_profession','=','professions.id_profession')
            ->select('libelle_SP')
            ->get();   
            foreach($sousprofessions as $row){
                $arr1[$i] = $row->libelle_SP;
                $i++;
            }  
            return response()->json([$arr1]);       
        }
        $brikoluerlogged = Auth::user();
        $id_user = $brikoluerlogged->id;
        $id_professions =  Profession::select('id_profession')->where('libelle_P','=',$professions)->get();
        foreach($id_professions as $row){
            $id_profession= $row->id_profession;
        }   
        // // echo $id_professions; //array
        // // echo $id_profession; //value
        DB::update('update brikoleurs set id_profession = ? where id = ?',[$id_profession,$id_user]);
        return view('Auth.signupBrikoleur_3',compact('professions','brikoluerlogged'));
    }

    //SignUP Brikoleur Step3: SousProfession - Update SP_Brikoleur
    public function updateSpBrikoleur($selectedSubPrefessions){
        //Convert string to array
        $selectedSubPrefessions_arr = explode(',', $selectedSubPrefessions);
        // echo count($selectedSubPrefessions_arr);
        //My brikoleur
        $brikoluerlogged = Auth::user();
        $id_user = $brikoluerlogged->id;
        //Insert spbrikoluer
        $id_sousprofessions =[];
        for($i=0; $i<count($selectedSubPrefessions_arr); $i++){
            $id_sousprofessions[$i] =  SousProfession::select('id_sous_profession')->where('libelle_SP','=',$selectedSubPrefessions_arr[$i])->get();
            //Get One id_sous_profession of SousProfession
            foreach($id_sousprofessions[$i] as $row){
                $id_sousprofession= $row->id_sous_profession;
            }   
            $spbrikoluer = new SpBrikoluer;
            $spbrikoluer->id_brikoleur=$id_user;
            $spbrikoluer->id_SPB = $id_sousprofession;
            $spbrikoluer->save();
        }
        //Redirect to signupBrikoleur_4
        return view('Auth.signupBrikoleur_4');
    }
    
    //SignUp Brikoleur Step 4: Save Image - Update Brikoleur Description 
    public function saveimage(Request $request){
            //GetData Inserted Image, Update Description, Get User LogedIn
            //User
            $brikoluerlogged = Auth::user();
            $id_user = $brikoluerlogged->id;
            //Insert Image
            $destination ='images/Uploads/Profile'; //Save Image here
            $image=$request->file('image'); //Get The Image from FORM
            $filename =time() .'_'.  $image->getClientOriginalName();	//Add Time To File Name
            $image->move($destination, $filename); //move
            $images = new Image; //Insert Image
            $images->id_brikoleur=$id_user;
            $images->reference=strtolower($filename);
            $images->type="Profile";
            $images->save();
            //Update Description
            $description=$request->input('description');
            DB::update('update brikoleurs set description = ? where id = ?',[$description,$id_user]);
            //Redirect to Profile Page
            // return view('BrikoleurProfile.v_owner.B-P-O-portfolio', compact('brikoluerlogged'));

            //Redirect to another Rout Which Will Show Profile 
            return redirect('myportfolio');
    }

    public function uploadImagesPortfolio(request $request){
        //this user
        $brikoluerlogged = Auth::user();
        $id_user = $brikoluerlogged->id;
        $destination ='images/Uploads/Portfolio';
        //get images 
        if($files=$request->file('images')){
            foreach($files as $file){
                $name = time() .'_'. $file->getClientOriginalName();
                $file->move($destination,$name);
                 //insert Images
                Image::insert( [
                        'id_brikoleur' => $id_user,
                        'reference' =>$name,
                        'type' =>"Portfolio"
                    ]);
               }
        }
        return redirect('myportfolio');   
    }

    public function myportfolio(){
        //Logged Brikoleur
        $brikoluerlogged = Auth::user();
        $id_user = $brikoluerlogged->id;
        //My Profession with My Profile Picture
        $DataBrikoleur = DB::table('brikoleurs')
        ->where('id','=',$id_user)
        ->join('images','images.Id_brikoleur','=','id')
        ->where('images.type','=','profile')
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') //professions.idprof = brikoleurs.idprof
        ->select('brikoleurs.nom','brikoleurs.prenom','brikoleurs.telephone','brikoleurs.description','brikoleurs.adresse','brikoleurs.ville','professions.libelle_P','images.reference','id')
        // ->distinct()
        ->limit(1)
        ->get();
        //My Images
        $DataImages = DB::table('images')
        ->where('images.id_brikoleur','=',$id_user)
        ->where('images.type','=','Portfolio')
        ->select('images.reference','images.id_brikoleur','images.id_image')
        // ->limit(3)
        ->get();
        //How many Iamges
        $CountImages = count($DataImages);
        //My Sub-Professions
        $libelle_SP = DB::table('brikoleurs')
        ->where('id','=',$id_user)
        ->join('professions','professions.id_profession','=','brikoleurs.id_profession') 
        ->join('sp_brikoluers','sp_brikoluers.id_Brikoleur','=','id')
        ->join('sous_professions','sous_professions.id_sous_profession','=','sp_brikoluers.id_SPB')
        ->select('sous_professions.libelle_SP')
        ->distinct()
        ->get();
        return view('BrikoleurProfile.v_owner.B-P-O-portfolio', compact('brikoluerlogged','DataBrikoleur','brikoluerlogged','DataImages','CountImages','libelle_SP'));
    }
    
    public function DeletePicture(Request $request){

        $imageId = $request->id;
        //Delete image same brikoleur -- preventing deletion of other --
        // $imageId = $request->id_brikoleur;


        DB::table('images')->where('id_image', $imageId)->delete();

        echo 'deleted';

    }
}
