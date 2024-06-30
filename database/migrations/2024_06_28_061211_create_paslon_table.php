<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaslonTable extends Migration
{
    public function up()
    {
        Schema::create('paslon', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('visi');
            $table->text('misi');
            $table->text('programkerja');
            $table->string('gambar')->nullable();
            $table->integer('jumlahvote')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paslon');
    }
}
