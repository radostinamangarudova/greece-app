<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    protected $fillable = [
        'name', 'image', 'desc', 'latitude', 'longitude'
    ];

    public $timestamps = false;

    public function getDescCutOutAttribute()
    {
        return str_limit($this->desc, 100);
    }

}
