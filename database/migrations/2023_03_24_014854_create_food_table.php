<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();

            $table->string("category_id");
            $table->unsignedBigInteger("company_id");

            $table->string("thumb");
            $table->string("nome");
            $table->string("description");
            $table->string("price");
            $table->string("cost");
            $table->string("week_days");
            $table->string("sku");

            $table->boolean("available");
            $table->boolean("discountable");
            $table->boolean("active");

            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("company_id")
                ->references("id")
                ->on("company");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
