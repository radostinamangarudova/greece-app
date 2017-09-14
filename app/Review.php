<?php

namespace App;

use User;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = [
        'rating', 'comment', 'user_id', 'resort_id'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resort() 
    {
        return $this->belongsTo(Resort::class);
    }
}
