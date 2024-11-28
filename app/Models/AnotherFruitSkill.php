<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnotherFruitSkill extends Model
{
    use HasFactory;

    protected $fillable = [
'fruit_name',
'another_skill_type',
'another_skill_tap_id',
'another_skill_z_id',
'another_skill_x_id',
'another_skill_c_id',
'another_skill_v_id',
'another_skill_f_id',
    ];
}
