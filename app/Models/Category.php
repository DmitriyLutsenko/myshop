<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'description',
        'code',
        'status',
        'h1',
        'seotitle',
        'seodescription',
        'category_id',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
