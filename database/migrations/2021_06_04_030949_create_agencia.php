<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("inst_bancaria");
            $table->string("cod_ag");
            $table->char("cnpj", 14);
            $table->text("endereco");
            $table->timestamps();
            $table->foreign('inst_bancaria')->references('id')->on('inst_bancarias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencia');
    }
}
