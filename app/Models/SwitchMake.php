<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SwitchMake extends Model
{
    use HasFactory;
    protected $table = 'switchmakes';
    
    protected $fillable = [
        'switchmakes_name',
        
    ];
}
