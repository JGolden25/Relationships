<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntreeIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entree_ingredient', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->integer('entree_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();


            //complete fields
            // $table->foreign('entree_id')->references('id')->on('entree');
            // $table->foreign('ingredient_id')->references('id')->on('ingredient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entree_ingredient');
    }
}
