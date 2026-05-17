<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class karyas extends Model
{
    protected $table = 'karyas';

    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}