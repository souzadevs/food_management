<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("profile_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("company_id");
            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("profile_id")
                ->references("id")
                ->on("profiles");

            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users");

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
        Schema::dropIfExists('profile_user');
    }
}
