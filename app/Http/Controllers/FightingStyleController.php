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



}
