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
        Schema::create('izins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('nip')->unique();
            $table->string('pangkat');
            $table->string('jabas');
            $table->string('unora');
            $table->string('instansia');
            $table->string('nohp');
            $table->string('instansib');
            $table->string('unorb');
            $table->string('jabtu');
            $table->string('permohonan');
            $table->string('sizin');
            $table->string('skp');
            $table->string('sk');
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
        Schema::dropIfExists('izins');
    }
};
