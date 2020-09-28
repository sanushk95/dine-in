<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->references('id')->on('dish_categories');
            $table->string('name');
            $table->string('image');
            $table->string('description', 1000);
            $table->string('ingredients');
            $table->string('allergens');
            $table->string('nutritional_facts');
            $table->boolean('is_halal');
            $table->boolean('is_vegan');
            $table->boolean('is_glutenfree');
            $table->float('price');
            $table->boolean('is_available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
