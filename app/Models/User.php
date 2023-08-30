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
        'level',
        'ownership_id',
        'role_id',
        'status',
        'image',
        'activity',
        'created_date',
        'recent_login',
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
        'activity',
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

    public function role()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }

    public function access_level()
    {
        return $this->hasOne(access_level::class, 'id', 'level');
    }

    public function balances()
    {
        return $this->hasMany(balance::class, 'user_id', 'id');
    }

    public function balance()
    {
        return $this->hasOne(balance::class, 'user_id', 'id');
    }

    public function transactions()
    {
        return $this->hasMany(transaction::class, 'user_id', 'id');
    }

    public function transaction()
    {
        return $this->hasOne(transaction::class, 'id', 'user_id');
    }

    public function activities()
    {
        return $this->hasMany(activity::class, 'user_id', 'id');
    }
}
