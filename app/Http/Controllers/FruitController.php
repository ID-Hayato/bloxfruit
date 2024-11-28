<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Skill;
use App\Models\AnotherFruitSkill;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        return view('fruit.index');
    }
    public function create()
    {
        $skills = Skill::all();
        return view('fruit.create', compact('skills'));
    }

    public function store(Request $request)
    {


        $another_skill = array('another_skill_id' => null);



        if (isset($request->fruit_name)) {

            $anotherskillvalidated = $request->validate([
                'fruit_name' => ' required|string|max:6',
                'another_skill_type' => 'required|string',
                'another_skill_tap_id' => 'integer',
                'another_skill_z_id' => 'integer',
                'another_skill_x_id' => 'integer',
                'another_skill_c_id' => 'integer',
                'another_skill_v_id' => 'integer',
                'another_skill_f_id' => 'integer',
            ]);


            $post = AnotherFruitSkill::create($anotherskillvalidated);

            $another_skill['another_skill_id'] = $post->id;
        }






        $skillvalidated = $request->validate(
            [
                'name' => 'required|string',
                'skill_tap_id' => 'integer',
                'skill_z_id' => 'required|integer',
                'skill_z_mastery' => 'required|integer|max:600',
                'skill_x_id' => 'required|integer',
                'skill_x_mastery' => 'required|integer|max:600',
                'skill_c_id' => 'required|integer',
                'skill_c_mastery' => 'required|integer|max:600',
                'skill_v_id' => 'integer',
                'skill_v_mastery' => 'integer|max:600',
                'skill_f_id' => 'integer',
                'skill_f_mastery' => 'integer|max:600',
                'rarity' => 'required|string',
                'price' => 'required|integer',
                
            ]
        );
        // dd($skillvalidated);


        $post = Fruit::create(array_merge($skillvalidated, $another_skill));

        return back()->with('message', '保存しました');
    }
}
