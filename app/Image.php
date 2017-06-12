<?php

namespace App;

use App\Resort;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'image_name', 'resort_id'
    ];

    public function resort()
    {
        return $this->belongsTo(Resort::class);
    }
}
