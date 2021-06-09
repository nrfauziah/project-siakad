<?php

namespace App;
use App\Mapel;

use Illuminate\Database\Eloquent\Model;

class Kkm extends Model
{
    protected $table = 'kkms';
    protected $fillable = [
        'kode_mapel',
        'mapel',
        'kelas',
        'kkm',
    ]; 

    public function mapel(){
        return $this->hasOne(Mapel::class);
    }
}
