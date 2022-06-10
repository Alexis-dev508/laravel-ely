<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->char('nombre', 50);
            $table->char('apellidos', 60);
            $table->integer('edad');
            $table->boolean('estatus');
            $table->char('telefono',10);
            $table->unsignedBigInteger('fkpais');
            $table->foreign('fkpais')-> references('id')->on('pais');
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
        Schema::dropIfExists('persona');
    }
};
