<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ammeter extends Model
{
    use HasFactory;
    protected $table = 'ammeters';
    
    protected $fillable = [
        'ammeters_name',
        
    ];
}
