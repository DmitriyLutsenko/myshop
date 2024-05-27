<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class itemMenu extends Model
{
    protected $fillable = [
        'name',
        'link',
        'items',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}
