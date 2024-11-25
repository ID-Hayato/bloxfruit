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
}
