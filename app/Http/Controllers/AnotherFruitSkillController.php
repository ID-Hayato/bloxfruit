<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnotherFruitSkill;
use App\Models\Skill;
use App\Models\Fruit;
use App\Models\Fruit as ModelsFruit;

class AnotherFruitSkillController extends Controller
{
    public function index()
    {
        return view('another_fruit_skill.index');
    }
    public function create()
    {
        $skills = Skill::all();
        return view('another_fruit_skill.create', compact('skills'));
    }

    public function store(Request $request) {
       $validated = $request->validate([
            'fruit_name' => 'required|string',
            'another_skill_type' => 'required|string',
            'another_skill_tap_id' => 'nullable|integer',
            'another_skill_z_id' => 'nullable|integer',
            'another_skill_x_id' => 'nullable|integer',
            'another_skill_c_id' => 'nullable|integer',
            'another_skill_v_id' => 'nullable|integer',
            'another_skill_f_id' => 'nullable|integer',
        ]);



        $post = AnotherFruitSkill::create($validated);

        $update = Fruit::find($request->id);
        $update->update(['another_skill_id' => $post->id]);
    
        return view('/admin.index')->with('message', '更新が完了しました。');
    }
    
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'fruit_name' => 'required|string',
            'another_skill_type' => 'required|string',
            'another_skill_tap_id' => 'nullable|integer',
            'another_skill_z_id' => 'nullable|integer',
            'another_skill_x_id' => 'nullable|integer',
            'another_skill_c_id' => 'nullable|integer',
            'another_skill_v_id' => 'nullable|integer',
            'another_skill_f_id' => 'nullable|integer',
        ]);
        $fruit = Fruit::find($validated['id']);
        $fruit->update($validated);

        return view('/admin.index')->with('message', '更新が完了しました。');
    }
    public function destroy(AnotherFruitSkill $another_fruits ,Request $request)
    {
        $update=Fruit::find($request->skill_id);
        $update->update(['another_skill_id'=>null]);

        $another_fruits=AnotherFruitSkill::find($request->id);
        $another_fruits->delete();
        return view('/admin.index');
    }

    
}
