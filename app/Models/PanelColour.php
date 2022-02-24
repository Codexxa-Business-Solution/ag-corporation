<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelColour extends Model
{
    use HasFactory;
    protected $table = 'panelcolours';
    
    protected $fillable = [
        'panelcolours_name',
        
    ];
}
