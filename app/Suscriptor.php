<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscriptor extends Model
{
    protected $table = 'suscriptores';
    
    protected $fillable = [
        'id', 'email'
    ];
}
