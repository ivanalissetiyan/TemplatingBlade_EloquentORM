<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // use HasFactory;
    public $table = 'managers';

    protected $guarded = [
        'id'
    ];

    // Relation
    public function clubs()
    {
        return $this->belongsTo('App\Models\Club', 'clubs_id', 'id');
    }
}
