<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Stock
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }
}
