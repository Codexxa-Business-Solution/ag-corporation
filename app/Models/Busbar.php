<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busbar extends Model
{
    use HasFactory;
    protected $table = 'busbars';
    
    protected $fillable = [
        'busbars_type',
        
    ];
}
