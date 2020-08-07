<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //Let's Insert this in table commentaires
    protected $table = 'commentaires';
    protected $fillable = ['id_client','id_brikoleur','commentaire'];
}
