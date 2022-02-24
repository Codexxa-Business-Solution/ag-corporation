<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voltmeter extends Model
{
    use HasFactory;
    protected $table = 'voltmeters';
    
    protected $fillable = [
        'voltmeters_name',
        
    ];
}
