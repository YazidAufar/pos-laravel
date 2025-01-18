<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    protected $fillable = ['name', 'regency_id'];

    public function regency(): BelongsTo
    {
        return $this->belongsTo(Regency::class);
    }
}
