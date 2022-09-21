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
            $table->foreignId('user_id')->constrained('users');
            $table->string('nama');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('jabas');
            $table->string('unora');
            $table->string('instansia');
            $table->string('nohp');
            $table->string('instansib');
            $table->string('unorb');
            $table->string('jabtu');
            $table->string('file1');
            $table->string('file2');
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
