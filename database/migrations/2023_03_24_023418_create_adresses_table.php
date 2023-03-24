<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("company_id");

            $table->string("city");	
            $table->string("neighborhood");	
            $table->string("street");	
            $table->string("number");	
            $table->string("obs");	
            $table->string("cep");

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
        Schema::dropIfExists('adresses');
    }
}
