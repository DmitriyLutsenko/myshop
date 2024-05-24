<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        'name',
        'is_active',
        'title',
        'subtitle',
        'price',
        'link',
        'link_text',
        'image',
        'slider_id',
    ];

    public function slider()
    {
        return $this->belongsTo(Slider::class);
    }
}
