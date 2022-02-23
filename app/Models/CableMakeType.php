<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CableMakeType extends Model
{
    use HasFactory;
    protected $table = 'cablemaketypes';
    
    protected $fillable = [
        'cablemake_name',
        
    ];
}
