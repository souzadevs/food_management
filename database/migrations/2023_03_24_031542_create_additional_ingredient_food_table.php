<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalIngredientFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_ingredient_food', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("food_order_id");
            $table->unsignedBigInteger("additional_ingredient_id");
            $table->unsignedBigInteger("company_id");

            $table->integer("quantity");

            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("company_id")
                ->references("id")
                ->on("company");

            $table
                ->foreign("food_order_id")
                ->references("id")
                ->on("food_order");

            $table
                ->foreign("additional_ingredient_id")
                ->references("id")
                ->on("additional_ingredients");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additional_ingredient_food');
    }
}
