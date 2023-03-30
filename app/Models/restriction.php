<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restriction extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
        'route',
        'level',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

    public function role()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }

    public function level()
    {
        return $this->hasOne(access_level::class, 'id', 'level');
    }
}
