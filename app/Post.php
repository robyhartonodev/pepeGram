<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    // To create relationship with user table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
