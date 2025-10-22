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
         // Membuat tabel 'buku'
         Schema::create('buku', function (Blueprint $table) {
            $table->id();                    // Kolom id (primary key, auto increment)
            $table->string('judul');         // Kolom judul (tipe string/varchar)
            $table->string('pengarang');     // Kolom pengarang
            $table->string('penerbit');      // Kolom penerbit
            $table->timestamps();            // Kolom created_at & updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika rollback, maka tabel 'buku' dihapus
        Schema::dropIfExists('buku');
    }
};