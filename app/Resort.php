<?php

namespace App;

use Illuminate\Support\Facades\Storage;
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

    public function getResortImageAttribute()
    {
        if(filter_var($this->image, FILTER_VALIDATE_URL) === false)
        {
            return 'img/' . $this->image;
        }

        return $this->image;
    }
}
