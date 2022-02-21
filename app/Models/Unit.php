<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;


class Unit extends Model
{
    use HasFactory;
    protected $table = 'units';
    protected $fillable = [
        'units',
        
    ];

    // public function products() {
    //     return $this->hasMany('App\Models\Product');
    // }

}
