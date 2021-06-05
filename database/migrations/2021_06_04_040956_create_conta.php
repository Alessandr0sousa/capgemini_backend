<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->id();
            $table->integer("agencia");
            $table->integer("user");
            $table->integer("tipo_conta");
            $table->decimal("saldo");
            $table->timestamps();
            $table->foreign('agencia')->references('id')->on('agencia');
            $table->foreign('user')->references('id')->on('users');
            $table->foreign('tipo_conta')->references('id')->on('tipo_conta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conta');
    }
}
