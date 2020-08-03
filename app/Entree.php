<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{

    protected $fillable = [
        'name',
        'price',
        'decription',
        'id'
    ];
    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class);
    }

    public function cookingSteps()
    {
        return $this->hasMany(CookingSteps::class);
    }

}