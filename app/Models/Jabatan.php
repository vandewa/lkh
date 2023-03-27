<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kegiatannya(){
        return $this->belongsTo(Kegiatan::class, 'kegiatan_id');
    }

}
