<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = [
        'nom','prenom','telephone','email','mot_passe','lieu',            
    ];
    
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'mot_passe', 'remember_token',
    ];


}
