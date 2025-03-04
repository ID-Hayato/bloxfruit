<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\AnotherFruitSkill;

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
    public function argument()
    {
        $fruits = Fruit::all();
        return view('fruit.argument', compact('fruits'));
    }

    public function store(Request $request)
    {



        $skillvalidated = $request->validate(
            [
                'name' => 'required|string',
                'skill_tap_id' => 'nullable|integer',
                'skill_z_id' => 'required|integer',
                'skill_z_mastery' => 'required|integer|max:600',
                'skill_x_id' => 'required|integer',
                'skill_x_mastery' => 'required|integer|max:600',
                'skill_c_id' => 'required|integer',
                'skill_c_mastery' => 'required|integer|max:600',
                'skill_v_id' => 'nullable|integer',
                'skill_v_mastery' => 'nullable|integer|max:600',
                'skill_f_id' => 'nullable|integer',
                'skill_f_mastery' => 'nullable|integer|max:600',
                'rarity' => 'required|string',
                'price' => 'required|integer',

            ]
        );

        $post = Fruit::create($skillvalidated);

        return view('fruit/choice', ['id' => $post->id]);
    }
    public function jump(Request $request)
    {
        $skills = Skill::all();
        return view('another_fruit_skill/create', ['id' => $request->id], compact('skills'));
    }
    public function branch(Request $request)
    {
        $validated = $request->validate([
            'fruit_id' => 'required|integer',
            'branch' => 'required|string',
        ]);
        $skills = Skill::all();
        $fruit = Fruit::find($validated['fruit_id']);

        if ($validated['branch'] === "update") {
            return view('fruit.update', compact('fruit', 'skills'));
        }
        if ($validated['branch'] === "delete") {
            return view('fruit.delete', compact('fruit', 'skills'));
        }


        $another_id = $fruit->another_skill_id;
        $another_fruit = AnotherFruitSkill::find($another_id);

        if ($validated['branch'] === "another_update") {
            if ($another_id === null) {
                return view('another_fruit_skill/create', ['id' => $validated['fruit_id']], compact('skills'));
            } else {
                return view('another_fruit_skill/update', compact('another_fruit', 'skills'));
            }
        }

        if ($validated['branch'] === "another_delete") {
            $skill_id = $validated['fruit_id'];
            if ($another_id === null) {
                return back()->with('message', 'この能力には変身、覚醒が存在しません。先にデータを登録してください');
            } else {
                return view('another_fruit_skill/delete', compact('another_fruit', 'skills', 'skill_id'));
            }
        }
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'skill_tap_id' => 'nullable|integer',
            'skill_z_id' => 'required|integer',
            'skill_z_mastery' => 'required|integer|max:600',
            'skill_x_id' => 'required|integer',
            'skill_x_mastery' => 'required|integer|max:600',
            'skill_c_id' => 'required|integer',
            'skill_c_mastery' => 'required|integer|max:600',
            'skill_v_id' => 'nullable|integer',
            'skill_v_mastery' => 'nullable|integer|max:600',
            'skill_f_id' => 'nullable|integer',
            'skill_f_mastery' => 'nullable|integer|max:600',
            'rarity' => 'required|string',
            'price' => 'required|integer',
        ]);
        $fruit = Fruit::find($validated['id']);
        $fruit->update($validated);

        return view('/admin.index')->with('message', '更新が完了しました。');
    }
    public function destroy(Fruit $fruits, Request $request)
    {

        $fruits = Fruit::find($request->id);
        $fruits->delete();
        return view('/admin.index');
    }
}
