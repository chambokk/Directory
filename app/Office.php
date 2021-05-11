<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'office', 
    ];

    Public function directory()
    {
        return $this->hasMany('App\Directory');
    }
}
