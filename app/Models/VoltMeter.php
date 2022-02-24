<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoltMeter extends Model
{
    use HasFactory;
    protected $table = 'voltmeters';
    
    protected $fillable = [
        'voltmeters_name',
        
    ];






    

}
