<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stelas', function (Blueprint $table) {
            $table->id();
            $table->string('no_rawat')->nullable();
            $table->string('petugas');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->text('alamat');
            $table->string('nama_anak');
            $table->date('tgl_lahir');
            $table->time('jam_lahir');
            $table->integer('anak_ke');
            $table->enum('status', ['0', '1'])->default('0');
            $table->integer('user_id');
            $table->string('ipaddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stelas');
    }
};
