<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = [
        'office_id', 'type', 'directory_no','contact_name',
    ];

    public function office()
    {
        return $this->belongsTo('App\Office');
    }

}
