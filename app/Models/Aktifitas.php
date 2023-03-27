<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aktifitas extends Model
{
    use HasFactory;
    protected $table = 'aktifitas';
    protected $guarded = [];

    public function nama_usernya(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nama_kegiatannya(){
        return $this->belongsTo(Jabatan::class, 'kegiatan_id');
    }

    public function tanggalnya(){
        return $this->hasOne(Tanggal::class, 'tanggal');
    }

}
