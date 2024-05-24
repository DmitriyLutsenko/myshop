<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'code',
        'status',
        'h1',
        'description',
        'seotitle',
        'seodescription',
        'articule',
        'price',
        'images',
        'attributes',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
