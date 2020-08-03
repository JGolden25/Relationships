<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'id'
    ];

    public function entrees()
    {
        return $this->belongsToMany(Entree::class);
    }
}

