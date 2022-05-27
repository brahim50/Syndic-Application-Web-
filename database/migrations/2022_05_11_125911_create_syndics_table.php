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
        Schema::create('syndics', function (Blueprint $table) {
            $table->id('idsyndic');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('ville');
            $table->string('tele');
            $table->string('photo');
            $table->string('password')->crypt();
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
        Schema::dropIfExists('syndics');
    }
};
