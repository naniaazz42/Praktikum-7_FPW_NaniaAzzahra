<?php

namespace App\Models;

<<<<<<< HEAD

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class buku extends Model
{
    protected $table = 'buku';

    protected $fillable = 
    [
        'judul',
        'pengarang',
        'penerbit',
        'kategori_buku_id'
    ];

    public function kategoriBuku(): BelongsTo
    {
        return $this->belongsTo(KategoriBuku::class, 'kategori_buku_id');
    }
=======
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
     protected $table = 'buku';
     protected $fillable = ['judul', 'pengarang', 'penerbit'];
>>>>>>> origin/main
}