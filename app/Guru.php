<?php

namespace App;
use App\Kelas;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = [
        'nama_lengkap',
        'jk',
        'nuptk',
        'pendidikan',
        'nis',
    ];
    
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
