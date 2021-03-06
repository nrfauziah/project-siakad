<?php

namespace App;
use App\Mapel;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = [
        'nama_lengkap',
        'jk',
        'nuptk',
        'pendidikan',
        'status',
    ]; 

    public function mapel(){
        return $this->hasOne(Mapel::class);
    }
}
