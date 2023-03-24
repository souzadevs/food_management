<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("company_id");

            $table->boolean("delivery_available");
            $table->boolean("counter_available");

            $table->string("hex_color_10");
            $table->string("hex_color_30");
            $table->string("hex_color_60");

            $table->string("hour_sunday");
            $table->string("hour_monday");
            $table->string("hour_thuesday");
            $table->string("hour_wednesday");
            $table->string("hour_thursday");
            $table->string("hour_friday");
            $table->string("hour_saturday");

            $table->string("banner_mobile");
            $table->string("banner_tablet");
            $table->string("banner_desktop");
            $table->string("banner_tv");

            $table->string("banner_mobile_backgroundcolor");
            $table->string("banner_tablet_backgroundcolor");
            $table->string("banner_desktop_backgroundcolor");
            $table->string("banner_tv_backgroundcolor");

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
        Schema::dropIfExists('settings');
    }
}
