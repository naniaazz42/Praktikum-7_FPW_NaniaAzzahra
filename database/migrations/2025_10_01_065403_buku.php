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
<<<<<<< HEAD
         // Membuat tabel 'buku'
         Schema::create('buku', function (Blueprint $table) {
            $table->id();                    // Kolom id (primary key, auto increment)
            $table->string('judul');         // Kolom judul (tipe string/varchar)
            $table->string('pengarang');     // Kolom pengarang
            $table->string('penerbit');      // Kolom penerbit
            $table->timestamps();            // Kolom created_at & updated_at otomatis
=======
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->timestamps();
>>>>>>> origin/main
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        // Jika rollback, maka tabel 'buku' dihapus
=======
>>>>>>> origin/main
        Schema::dropIfExists('buku');
    }
};