<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit', 'penerbit'];
}
