<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class brikoleur extends Authenticatable
{
     // use Notifiable; don't usee
     protected $table = 'brikoleurs';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $fillable = [
         'nom','prenom','telephone','email','verif_compte','mot_passe','status','points','description','adresse','ville',            
     ];
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
     protected $hidden = [
         'mot_passe', 'remember_token',
     ];
     
     /**
      * Get the unique identifier for the user.
      *
      * @return mixed
      */
    //  public function getAuthIdentifier()
    //  {
    //      return $this->id_brikoleur;
    //  }   
     public function getAuthPassword()
     {
       return $this->mot_passe;
     }
}
