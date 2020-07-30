<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    //
    protected $fillable = [
        'name'
    ];

    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }
}

