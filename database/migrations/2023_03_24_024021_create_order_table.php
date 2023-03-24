<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("company_id");
            $table->unsignedBigInteger("payment_method_id");	
            $table->unsignedBigInteger("pickup_type_id");	
            $table->unsignedBigInteger("coupon_id");
            $table->unsignedBigInteger("order_status_id");
            $table->unsignedBigInteger("address_id");
            
            $table->string("code");

            $table->double("paid");	
            $table->double("change");	
            $table->double("discounts");	
            $table->double("delivery_cost");
            $table->double("sub_total");
            $table->double("total");

            $table->string("obs");	

            $table->boolean("viewed");	
            $table->boolean("confirm_whatsapp");	
            $table->boolean("financial_realesed");	
            
            $table->dateTime("finished_at");

            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("company_id")
                ->references("id")
                ->on("company");

            $table
                ->foreign("pickup_type_id")
                ->references("id")
                ->on("pickup_types");

            $table
                ->foreign("address_id")
                ->references("id")
                ->on("adresses");

            $table
                ->foreign("coupon_id")
                ->references("id")
                ->on("coupons");

            $table
                ->foreign("payment_method_id")
                ->references("id")
                ->on("payment_methods");

            $table
                ->foreign("order_status_id")
                ->references("id")
                ->on("order_statuses");    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
