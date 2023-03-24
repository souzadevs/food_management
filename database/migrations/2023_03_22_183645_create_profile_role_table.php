<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("profile_id");
            $table->unsignedBigInteger("role_id");
            $table->unsignedBigInteger("company_id");
            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("profile_id")
                ->references("id")
                ->on("profiles");

            $table
                ->foreign("role_id")
                ->references("id")
                ->on("roles");

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
        Schema::dropIfExists('profile_role');
    }
}
