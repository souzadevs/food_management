<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("company_id");

            $table->string("description");
            $table->string("code");	
            $table->string("deadline");	
            $table->string("discount");	
            $table->string("quantity");	

            $table->boolean("is_hash");
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
        Schema::dropIfExists('coupons');
    }
}
