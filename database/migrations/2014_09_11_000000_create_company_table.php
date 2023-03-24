<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();

            $table->integer("cnpj")->unique();
            $table->integer("cpf")->unique();

            $table->string("name");
            $table->string("description");

            $table->string("whatsapp");
            $table->string("mail");
            $table->string("state");
            $table->string("city");
            $table->string("neighborhood");
            $table->string("street");
            $table->string("number");

            $table->string("facebook");
            $table->string("instagram");
            $table->string("favicon");
            $table->string("logo");
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
