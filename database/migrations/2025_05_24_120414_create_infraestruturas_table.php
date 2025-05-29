<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraestruturasTable extends Migration
{
    public function up()
    {
        Schema::create('infraestruturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // para saber quem cadastrou
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->text('descricao')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('infraestruturas');
    }
}
