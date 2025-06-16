<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class detail_service extends Model
{
    use HasFactory;

    protected $table = 'detail_service';

    protected $fillable = [
        'id_detail_service',
        'sparepart',
        'harga',
    ];

    

}
