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
            // $table->id('id');
            $table->timestamps();
            $table->unsignedInteger('entree_id')->nullable();
            $table->unsignedInteger('ingredient_id')->nullable();
            // $table->integer('ingredient_id')->unsigned();
            // $table->foreign('ingredient_id')->references('id');

            // $table->integer('entree_id')->unsigned();
            // $table->foreign('entree_id')->references('id');

            // $table->foreign('entree_num')->unsigned();
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
