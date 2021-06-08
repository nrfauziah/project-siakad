<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $table = 'penilaians';
    protected $fillable = [
        'kategori',
        'deskripsi',
    ]; 
}
