<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CableEntry extends Model
{
    use HasFactory;
    protected $table = 'cabletypes';
    
    protected $fillable = [
        'cabletypes_name',
        
    ];
}
