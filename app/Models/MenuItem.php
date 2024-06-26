<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name',
        'code',
        'priority',
        'isCatalogMenu',
        'link',
        'status',
        'items',
    ];
}
