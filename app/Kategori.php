<?php

namespace App;
use App\Mapel;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = [
        'kode_mapel',
        'mapel',
        'kelas',
        'predikatA',
        'predikatB',
        'predikatC',
    ]; 

    public function mapel(){
        return $this->hasOne(Mapel::class);
    }
}
