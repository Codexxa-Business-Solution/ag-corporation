<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mounting extends Model
{
    use HasFactory;
    protected $table = 'mountings';
    
    protected $fillable = [
        'mounting_name',
        
    ];
}
 