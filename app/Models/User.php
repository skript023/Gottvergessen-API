<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = true;

    protected $fillable = [
        'fullname',
        'username',
        'email',
        'password',
        'ownership_id',
        'role_id',
        'status',
        'image',
        'created_date',
        'hardware_uuid',
        'computer_name',
        'expired',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'role_id',
        'status',
        'hardware_uuid',
        'computer_name',
        'expired',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function binaries()
    {
        return $this->hasMany(binary::class, 'ownership_id', 'ownership_id');
    }

    public function ownerships()
    {
        return $this->belongsTo(ownership::class, 'ownership_id');
    }

    public function roles()
    {
        return $this->belongsTo(role::class, 'role_id');
    }
}
