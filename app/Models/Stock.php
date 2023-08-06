<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Stock extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Stock
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function blood(): HasOne
    {
        return $this->hasOne(Blood::class, 'blood_id', 'id');
    }
}
