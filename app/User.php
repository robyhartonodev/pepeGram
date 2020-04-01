<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use App\Profile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Configure when database related operation for user triggered
     */
    protected static function boot()
    {
        parent::boot();

        // When user is created do these operations
        static::created(function ($user) {
            // create a blank profile for the user
            $user->profile()->create([
                'title' => $user->username,
            ]);

            // send welcome email to the user
            Mail::to($user->email)->send(new NewUserWelcomeMail());
        }
        );
    }

    // To create relationship with post table
    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    // User following many profiles
    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

    // To create relationship with profile table
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
