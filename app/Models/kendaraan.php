<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';

    protected $fillable =[
        'id_kendaraan',
        'no_pol',
        'tahun_kendaraan',
        'no_mesin',
        'no_rangka',
        'kapasitas_mesin',
        'transmisi',
    ];

    public function pemilik():BelongsTo{
        return $this->belongsTo(pemilik::class);
    }

    public function jenis_kendaraan():BelongsTo{
        return $this->belongsTo(jenis_kendaraan::class);
    }
}
