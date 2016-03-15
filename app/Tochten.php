<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tochten extends Model
{
     protected $fillable=[
        'tochtnaam'
    ];
    protected $table = 'tochten';

    
}
