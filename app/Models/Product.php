<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   
    protected $table = 'products';

    protected $fillable = [
        'item_name',
        'category',
        'subcategory',
        'manf_name',
        'units',
        'actual_rate',
        'purchase_rate',
        'purchase_discount',
        'discription',
        
    ];
    
    
}
