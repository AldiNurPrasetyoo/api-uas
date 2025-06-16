<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class mekanik extends Model
{
    use HasFactory;
    protected $table = 'mekanik';

    protected $fillable =[
        'id_mekanik',
        'nama_mekanik',
        'tgl_lahir',
        'alamat',
        'nik',
        'no_hp',
    ];

    
    public function service():HasOne{
        return $this->hasOne(service::class);
    }
    
}
