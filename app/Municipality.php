<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = "municipalities";
    protected $guarded = [];


    public function directory()
    {
        return $this->belongsTo('App\Directory');
    }
}
