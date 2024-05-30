<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'code',
        'status',
        'description'
    ];
    
    public function items()
    {
        return $this->belongsToMany(MenuItem::class);
    }
}
