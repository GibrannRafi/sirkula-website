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
        Schema::create('req_blood', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('nama_rs');
            $table->string('kota');
            $table->string('alamat');
            $table->string('blood_type');
            $table->string('rhesus')->nullable();
            $table->string('donor_type');
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
        Schema::dropIfExists('req_blood');
    }
};
