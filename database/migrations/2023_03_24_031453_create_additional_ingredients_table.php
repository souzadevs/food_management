<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdditionalIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_ingredients', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("company_id");

            $table->string("name");
            $table->string("description");
            $table->string("obs");
            $table->double("price");

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
        Schema::dropIfExists('additional_ingredients');
    }
}
