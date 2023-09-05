<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class role extends Model
{
    use HasFactory;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = true;

    protected $fillable = [
        'name'
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

    public function users()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'role_id', 'id');
    }

    public function access()
    {
        return $this->hasOne(restriction::class, 'role_id', 'id');
    }
}
