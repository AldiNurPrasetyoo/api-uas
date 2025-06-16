<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class service extends Model
{
    use HasFactory;
    protected $table = 'service';

    protected $fillable =[
        'id_service',
        'keluhan',
        'tgl_masuk',
        'tgl_keluar',
    ];

    public function detail_service():HasMany{
        return $this ->hasMany(detail_service::class);
    }

    public function jenis_service():BelongsTo{
        return $this->belongsTo(jenis_service::class);
    }
    public function mekanik():BelongsTo{
        return $this->belongsTo(mekanik::class);
    }

}
