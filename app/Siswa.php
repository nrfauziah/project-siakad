<?php

namespace App;
use App\Kelas;
use App\Mapel;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nama_lengkap',
        'kelas_id',
        'jk',
        'nipd',
        'tmp_lahir',
        'tgl_lahir',
    ];
    
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
