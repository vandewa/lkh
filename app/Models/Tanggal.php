<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggal extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'tanggal';
    public $incrementing = 'false';
    protected $keyType = 'string';

    public function lkh()
    {
        return $this->hasOne(Aktifitas::class, 'tanggal');
    }

}
