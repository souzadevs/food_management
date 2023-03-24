<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponHashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_hashes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("coupon_id");

            $table->string("previous");
            $table->string("hash");
            $table->timestamps();
            $table->softDeletes();
            
            $table
                ->foreign("coupon_id")
                ->references("id")
                ->on("coupons");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupon_hashes');
    }
}
