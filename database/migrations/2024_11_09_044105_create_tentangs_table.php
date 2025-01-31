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
        Schema::create('tentangs', function (Blueprint $table) {
            $table->id();
            $table->string("kontak",15);
            $table->string("instagram");
            $table->string("nama_toko");
            $table->text("alamat");
            $table->text("keterangan");
            $table->text("filosofi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangs');
    }
};