<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    protected $fillable = [
        'name', 'location', 'image', 'desc',
    ];

    public function getDescCutOutAttribute()
    {
        return str_limit($this->desc, 100);
    }

}
