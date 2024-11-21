<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
public function index() {
    return view('skill.index');
}

public function create(){
    $skills=Skill::all();
    return view('skill.create',compact('skills'));
}
public function store(Request $request) {
$validated= $request->validate([
        'name' => 'required|string',
        'common_name' => 'required|string|max:255',
        'description' =>'required|string|max:255',
        'dodge' => 'required|max:1',
        'dodge_specialmention' => 'nullable',
        'cooldown' => 'required|numeric',
]);


    $post=Skill::create($validated);

    return back()->with('message', '保存しました');
}

}
