<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

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
        'password',
        'image'
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

    /**
     * relation
     */
    public function dests(){
        return $this->hasMany(Dest::class);
    }

    public function rooms(){
        return $this->hasMany(Room::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }

    /**
     * some functions
     */
    public static function getPartner($partner_id){
        $res = User::find($partner_id);

        return $res;
    }

    public static function isExistsUserImage($image){
        $res = Storage::disk('local')->exists($image);

        return $res;
    }
}
