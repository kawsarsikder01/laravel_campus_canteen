<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;

class Userprofile extends Model
{
    use HasFactory,HasApiTokens,Notifiable;

    protected $table = 'userprofiles';
    protected $fillable = [
        'name',
        'age',
        'image',
        'dob',
        'address',
        'email',
        'username',
        'phone',
        'password'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }








    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
