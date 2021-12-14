<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = [
        'office_id', 'type', 'directory_no','contact_name','email','category_id'
    ];
    // protected $guarded = [];

    protected $dates = ['created_at', 'updated_at'];

    public function office()
    {
        return $this->belongsTo('App\Office');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}



