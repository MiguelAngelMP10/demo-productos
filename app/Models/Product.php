<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    public $fillable = [
        'user_id',
        'name',
        'description',
        'quantity',
        'price'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
