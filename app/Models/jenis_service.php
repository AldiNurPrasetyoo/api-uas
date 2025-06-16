<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class jenis_service extends Model
{
    use HasFactory;
    protected $table = 'jenis_service';

    protected $fillable  = [
        'id_jenis_service',
        'jenis_service',
        'keterangan',
    ];

    public function jenis_service():HasMany{
        return $this->hasMany(jenis_service::class);
    }
}
