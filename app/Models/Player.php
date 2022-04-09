<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    // use HasFactory;
    public $table = 'players';

    protected $fillable = [
        'clubs_id', 'photo', 'name', 'height', 'position'
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Club', 'clubs_id', 'id');
    }
}
