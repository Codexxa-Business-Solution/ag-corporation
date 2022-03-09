<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qoute extends Model
{
    use HasFactory;
    protected $table = 'qoutes';
    protected $fillable = [
        'project_name',
        'delivery_date',
        'date',
        'volmeter_id',
        'indication_id',
        'ammeter_id',
        'spp',
        'hooter',
        'feeder_ammeter',
        'switchmake_id',
        'sprinkler_hp',
        'engine_hp',
        'jockey_hp',
        'hydrant_hp',
        'booster_hp',
        'standby_hp',
        'panellocations_id',
        'panel_id',
        'busbar_id',
        'cable_enetry_id',
        'cable_make_id',
        'type',
        'acess_id',
        'mounting_id',
        'panel_type_id	',    
        'special_instructions',


        
    ];

}
