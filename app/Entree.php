<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entree extends Model
{

    protected $fillable = [
        'name'
    ];
    public function entrees()
    {
        //return $this->belongsToMany(RelatedModel,
        // pivot_table_name,
        // foreign_key_of_current_model_in_pivot_table,
        // foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(
            Entree::class,
            'entree_num',
            'entree_id',
            'ingredient_id'
        );
    }

}

$entrees = Entree::find(1);
$entrees->ingredients;