<?php

namespace App;
use App\Siswa;

use Illuminate\Database\Eloquent\Model;

class Enilai extends Model
{
    protected $table = 'enilais';
    protected $fillable = [
        'nama_siswa',
        'p_angka',
        'p_predikat',
        'p_deskripsi',
        'k_angka',
        'k_predikat',
        'k_deskripsi',
    ]; 

    public function siswa(){
        return $this->hasOne(Siswa::class);
    }
}