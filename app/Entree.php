<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{

    protected $fillable = [
        'name',
        'description'
    ];
    public function entrees()
    {
        return $this->belongsToMany(Entree::class);
    }

}

$entrees = Entree::find(1);
$entrees->ingredients;