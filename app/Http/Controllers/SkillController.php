<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

use function PHPUnit\Framework\returnSelf;

class SkillController extends Controller
{
    public function index()
    {
        return view('skill.index');
    }

    public function create()
    {
        $skills = Skill::all();
        return view('skill.create', compact('skills'));
    }
    public function argument()
    {
        $skills = Skill::all();
        return view('skill.argument', compact('skills'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'common_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'dodge' => 'required|max:1',
            'dodge_specialmention' => 'nullable',
            'cooldown' => 'required|numeric',
        ]);


        $post = Skill::create($validated);

        return back()->with('message', '保存しました');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id'=>'required|integer',
            'name' => 'required|string',
            'common_name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'dodge' => 'required|max:1',
            'dodge_specialmention' => 'nullable',
            'cooldown' => 'required|numeric',
        ]);
        $skills = Skill::find($validated['id']);
        $skills->update($validated);

        return view('/admin.index')->with('message', '更新が完了しました。');
    }

    public function destroy(Skill $skills ,Request $request)
    {

        $skills=Skill::find($request->id);
        $skills->delete();
        return view('/admin.index');
    }
    public function branch(Request $request)
    {
        $validated = $request->validate([
            'skill_id' => 'required|integer',
            'branch' => 'required|string',
        ]);
        if ($validated['branch'] === "update") {
            $skills = Skill::find($validated['skill_id']);
            return view('skill.update', compact('skills'));
        } else {
            $skills = Skill::find($validated['skill_id']);
            return view('skill.delete', compact('skills'));
        }
    }
}
