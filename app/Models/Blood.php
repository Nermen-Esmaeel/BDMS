<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blood extends Model
{
    use HasFactory;

    /**
     * Get all of the comments for the Blood
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }


/**
 * Get the user that owns the Blood
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function stock(): BelongsTo
{
    return $this->belongsTo(Stock::class);
}


}
