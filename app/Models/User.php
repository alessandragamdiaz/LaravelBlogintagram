<?php

namespace App\Models;
use Illuminate\support\Facades\Mail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\NewUSerWelcomeMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


protected static function boot(){


    parent::boot();//** when whe are booting up this model */

    static::created(function ($user){ //** get play wheneevr a new user is create */
        $user->profile()->create([

            'title' => $user->username,
        ]);

        Mail::to($user->email)->send(new NewUSerWelcomeMail());

    });
}


public function posts()
{
return $this->hasMany(Post::class)->orderBy('created_at','DESC');




}
public function following()
{

    return $this->belongsTomany(Profile::class);
}


    public function profile()
    
    {

return $this->hasOne(Profile::class);

    }
}
