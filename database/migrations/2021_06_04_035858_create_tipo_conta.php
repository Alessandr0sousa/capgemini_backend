<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_conta', function (Blueprint $table) {
            $table->id();
            $table->string("tipo");
            $table->integer("operacao");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_conta');
    }
}
/*
<?php
2021_06_04_034125_create_conta
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConta extends Migration
{
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->id();
            $table->integer("agencia");
            $table->integer("user");
            $table->decimal("saldo");
            $table->timestamps();
            $table->foreign('agencia')->references('id')->on('agencia');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('conta');
    }
}

*/
