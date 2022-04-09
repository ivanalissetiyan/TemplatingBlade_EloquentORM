<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    // use HasFactory;
    public $table = 'stadia';

    protected $fillable = [
        'name', 'capacity', 'address'
    ];

    // Relation
    public function clubs()
    {
        return $this->hasOne('App\Models\Club', 'stadia_id');
    }
}
