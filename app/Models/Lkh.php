<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lkh extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kegiatannya(){
        return $this->belongsTo(Jabatan::class, 'kegiatan_id');
    }

}
