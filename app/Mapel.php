<?php

namespace App;
use App\Siswa;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapels';
    protected $fillable = [
        'kode',
        'mapel',
        'status',
    ]; 

    public function siswa(){
        return $this->hasOne(Siswa::class);
    }
}
