<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QrCode extends Model
{
    protected $table = 'qr_code';

    protected $fillable = [
        'uuid',
        'customer_id',
        'company_id',
        'last_open_at',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function qrCodeValidations(): HasMany
    {
        return $this->hasMany(QrCodeValidation::class);
    }
}
