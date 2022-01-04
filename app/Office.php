<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = [
        'id','office','category_id' 
    ];

    Public function directory()
    {
        return $this->hasMany('App\Directory');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
