<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    /**
     * Determine profile image of the user, by default use placeholder image in storage
     * @return mixed|string
     */
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'image/noimage.png';
        return '/storage/' . $imagePath;
    }

    // Profile has many followers
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    // To create relationship with user table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
