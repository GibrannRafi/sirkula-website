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
        Schema::create('sub_blood', function (Blueprint $table) {
            $table->id();
            $table->string('nama_donor');
            $table->string('tgl_lahir');
            $table->string('jenis_kel');
            $table->string('alamat');
            $table->string('blood_type');
            $table->string('rhesus');
            $table->integer('weight');
            $table->integer('umur');
            $table->string('fullname');
            $table->integer('no_telp');
            $table->string('email');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_blood');
    }
};
