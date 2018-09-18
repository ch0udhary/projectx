<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subindustry extends Model
{
    //
     protected $table = 'subindustry';

    protected $fillable = ['subindustry_name','slug','image'];
}
