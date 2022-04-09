<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    // use HasFactory;
    public $table = 'clubs';

    protected $fillable = [
        'stadia_id', 'name', 'logo', 'url', 'thropy',
    ];

    // Relation
    public function stadia()
    {
        return $this->belongsTo('App\Models\Stadium', 'stadia_id', 'id');
    }

    public function managers()
    {
        return $this->hasMany('App\Models\Manager', 'clubs_id');
    }

    public function players()
    {
        return $this->hasMany('App\Models\Player', 'clubs_id');
    }

    public function match_clubs()
    {
        return $this->hasOne('App\Models\Matche', 'clubs_id');
    }
    public function match_rivals()
    {
        return $this->hasOne('App\Models\Matche', 'clubs_id');
    }
}
