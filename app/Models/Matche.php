<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    // use HasFactory;
    public $table = 'matches';

    protected $fillable = [
        'clubs_id', 'rivals_id', 'schedule'
    ];

    public function clubs()
    {
        return $this->belongsTo('App\Models\Club', 'clubs_id', 'id');
    }

    public function rivals()
    {
        return $this->belongsTo('App\Models\Club', 'rivals_id', 'id');
    }
}
