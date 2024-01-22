<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments("id_pedido");
            $table->dateTime("Dtpedido");
            $table->integer('Quantidade');
            $table->string("StatusPedido",9);

            $table->unsignedInteger('id_produto');
            $table->foreign('id_produto')->references('id_produto')->on('produtos');

            $table->unsignedInteger('id_client');
            $table->foreign('id_client')->references('id_client')->on('clients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
