<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'skill_tap_id',
        'skill_z_id',
        'skill_z_mastery',
        'skill_x_id',
        'skill_x_mastery',
        'skill_c_id',
        'skill_c_mastery',
        'skill_v_id',
        'skill_v_mastery',
        'skill_f_id',
        'skill_f_mastery',
        'rarity',
        'price',
        'another_skill_id',
    ];
}
