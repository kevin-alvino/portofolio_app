<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\models\karya;

class Categories extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name_category',
    ];

    public function karya():HasMany
    {
        return $this->hasMany(Karya::class, 'category_id', 'id');
    }
}