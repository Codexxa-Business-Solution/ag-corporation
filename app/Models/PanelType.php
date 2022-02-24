<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelType extends Model
{
    use HasFactory;
    protected $table = 'paneltype';
    
    protected $fillable = [
        'paneltype_name',
        
    ];
}
