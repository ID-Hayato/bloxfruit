<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Gun;

class GunController extends Controller
{
    public function index()
    {
        return view('gun.index');
    }

    public function create()
    {
        $skills = Skill::all();
        return view('gun.create', compact('skills'));
    }
    public function argument()
    {
        $guns = Gun::all();
        return view('gun.argument', compact('guns'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'skill_tap_id' => 'required|integer',
            'skill_z_id' => 'required|integer',
            'skill_z_mastery' => 'required|integer|max:600',
            'skill_x_id' => 'required|integer',
            'skill_x_mastery' => 'required|integer|max:600',
            'rarity' => 'required|string',
            'howtogetit' => 'required|string',


        ]);

        $post = Gun::create($validated);

        return back()->with('message', '保存しました');
    }

    public function branch(Request $request)
    {
        $validated = $request->validate([
            'gun_id' => 'required|integer',
            'branch' => 'required|string',
        ]);
        if ($validated['branch'] === "update") {
            $skills = Skill::all();
            $gun = Gun::find($validated['gun_id']);
            return view('gun.update', compact('gun', 'skills'));
        } else {
            $skills = Skill::all();
            $gun = Gun::find($validated['gun_id']);
            return view('gun.delete', compact('gun', 'skills'));
        }
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer',
            'name' => 'required|string',
            'skill_z_id' => 'required|integer',
            'skill_z_mastery' => 'required|integer|max:600',
            'skill_x_id' => 'required|integer',
            'skill_x_mastery' => 'required|integer|max:600',
            'rarity' => 'required|string',
            'howtogetit' => 'required|string',
        ]);
        $guns = Gun::find($validated['id']);
        $guns->update($validated);

        return view('/admin.index')->with('message', '更新が完了しました。');
    }

    public function destroy(Gun $guns, Request $request)
    {
        $guns = Gun::find($request->id);
        $guns->delete();
        return view('/admin.index');
    }
}
