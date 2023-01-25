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
        Schema::create('horas', function (Blueprint $table) {
            $table->integer('diasH');
            $table->integer('horaH');
            $table->primary(['diasH','horaH']);
            $table->unsignedBigInteger('cod_as');
            $table->foreign('cod_as')->references('codAs')->on('asignaturas')->onDelete('cascade');
        });
    }


    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas');
    }
};
