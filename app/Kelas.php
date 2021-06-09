<?php

namespace App;
use App\Siswa;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'walas',
        'kelas',
        'jurusan',
        'jmlh_siswa',
    ]; 

    public function siswa(){
        return $this->hasOne(Siswa::class);
    }
}
