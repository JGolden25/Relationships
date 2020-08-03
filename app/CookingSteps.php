<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CookingSteps extends Model
{
    public function cookingSteps()
    {
        return $this->belongsTo(Entree::class);
    }
}
