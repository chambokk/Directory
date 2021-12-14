<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table  = 'categories';
    protected $guarded = [];

    protected $datas = [
        'created_at',
        'updated_at'
    ];

    Public function directory()
    {
        return $this->hasMany('App\Directory');
    }

}
