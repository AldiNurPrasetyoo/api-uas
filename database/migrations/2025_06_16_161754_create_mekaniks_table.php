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
        Schema::create('mekanik', function (Blueprint $table) {
            $table->increments('id_mekanik');
            $table->string('nama_mekanik',50);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('nik')->unique(16);
            $table->string('no_hp')->unique(13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mekanik');
    }
};
