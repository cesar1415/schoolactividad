<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo');
            $table->String('genero');
            $table->biginteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->biginteger('instructors_id')->unsigned();
            $table->foreign('instructors_id')->references('id')->on('instructors');
            $table->biginteger('guides_id')->unsigned();
            $table->foreign('guides_id')->references('id')->on('guides');
            $table->biginteger('records_id')->unsigned();
            $table->foreign('records_id')->references('id')->on('records');
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
        Schema::dropIfExists('apprentices');
    }
}
