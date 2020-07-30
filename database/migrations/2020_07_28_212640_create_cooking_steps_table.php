<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookingStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooking_steps', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->text('description')->nullable();
            //complete fields
            $table->unsignedInteger('entree_id')->nullable();
            $table->unsignedInteger('ingredient_id')->nullable();
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
        Schema::dropIfExists('cooking_steps');
    }
}
