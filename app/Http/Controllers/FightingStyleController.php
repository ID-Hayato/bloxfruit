<?php

namespace App\Http\Controllers;

use App\Models\FightingStyle;
use App\Models\Skill;
use Illuminate\Http\Request;

class FightingStyleController extends Controller
{
    public function index()
    {
        return view('fightingstyle.index');
    }
    public function create()
    {
        $skills = Skill::all();
        return view('fightingstyle.create', compact('skills'));
    }
    public function argument()
    {
        $skills = Skill::all();
        $fighting_styles = FightingStyle::all();
        return view('fightingstyle.argument', compact('fighting_styles','skills'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'skill_z_id' => 'required|integer',
            'skill_z_mastery' => 'required|integer|max:600',
            'skill_x_id' => 'required|integer',
            'skill_x_mastery' => 'required|integer|max:600',
            'skill_c_id' => 'integer',
            'skill_c_mastery' => 'integer|max:600',
            'howtogetit' => 'required|string',

        ]);

        $post = FightingStyle::create($validated);

        return back()->with('message', '保存しました');
    
    }

    public function branch(Request $request)
    {
        $validated = $request->validate([
            'fightingstyle_id' => 'required|integer',
            'branch' => 'required|string',
        ]);
        if ($validated['branch'] === "update") {
            $skills = Skill::all();
            $fightingstyle = FightingStyle::find($validated['fightingstyle_id']);
            return view('fightingstyle.update', compact('fightingstyle','skills'));
        } else {
            $skills = Skill::all();
            $fightingstyle = FightingStyle::find($validated['fightingstyle_id']);
            return view('fightingstyle.delete', compact('fightingstyle','skills'));
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
            'skill_c_id' => 'integer',
            'skill_c_mastery' => 'integer|max:600',
            'howtogetit' => 'required|string',
        ]);
        $fightingstyle = FightingStyle::find($validated['id']);
        $fightingstyle->update($validated);

        return view('/admin.index')->with('message', '更新が完了しました。');
    }
    public function destroy(FightingStyle $fightingstyle ,Request $request)
    {

        $fightingstyle=FightingStyle::find($request->id);
        $fightingstyle->delete();
        return view('/admin.index');
    }
}
