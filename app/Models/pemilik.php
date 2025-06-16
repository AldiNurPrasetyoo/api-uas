<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemilik';

    protected $fillable =[
        'id_pemilik',
        'nama_pemilik',
        'tgl_lahir',
        'alamat',
        'nik',
        'no_hp',
    ];
    public function kendaraan():HasMany{
        return $this->hasMany(kendaraan::class);
    }
}
