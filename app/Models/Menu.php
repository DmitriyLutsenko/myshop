<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'code'
    ];

    public function items()
    {
        return $this->belongsToMany(itemMenu::class);
    }

}
