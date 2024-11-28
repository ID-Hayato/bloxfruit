<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FightingStyle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'skill_z_id',
        'skill_z_mastery',
        'skill_x_id',
        'skill_x_mastery',
        'skill_c_id',
        'skill_c_mastery',
        'howtogetit',
    ];

}
