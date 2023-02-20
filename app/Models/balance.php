<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balance extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'wallet_id',
        'amount'
    ];

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'user_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        
    ];

    public function collumns()
    {
        return $this->setHidden(['id', 'user_id', 'created_at', 'updated_at'])->toArray();
    }

    public function wallet()
    {
        return $this->hasOne(wallet::class, 'id', 'wallet_id');
    }

    public function owner()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
