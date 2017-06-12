<?php

namespace App;

use User;
use App\Image;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{

    protected $fillable = [
        'name', 'image', 'desc', 'latitude', 'longitude', 'author_id'
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
