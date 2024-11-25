<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gun extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'skill_tap_id',
        'skill_z_id',
        'skill_z_mastery',
        'skill_x_id',
        'skill_x_mastery',
        'rarity',
        'howtogetit',
    ];
}
