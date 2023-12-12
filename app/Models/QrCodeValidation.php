<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QrCodeValidation extends Model
{
    protected $fillable = [
        'living_id',
        'qr_code_id',
        'success'
    ];
}
