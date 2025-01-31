<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Sword;
use Illuminate\Http\Request;

class SwordController extends Controller
{
    public function index() {
        return view('sword.index');
    }
    
    public function create(){
        $skills=Skill::all();
        return view('sword.create',compact('skills'));
    }
    public function argument()
    {
        $swords = Sword::all();
        return view('sword.argument', compact('swords'));
    }
    public function store(Request $request) {
        $validated= $request->validate([
                'name' => 'required|string',
                'skill_z_id' => 'required|integer',
                'skill_z_mastery'=>'required|integer|max:600',
                'skill_x_id' => 'required|integer',
                'skill_x_mastery'=>'required|integer|max:600',
                'rarity'=>'required|string',
                'howtogetit'=>'required|string',
        ]);
            $post=Sword::create($validated);
        
            return back()->with('message', '保存しました');
        }
        
        public function branch(Request $request)
        {
            $validated = $request->validate([
                'sword_id' => 'required|integer',
                'branch' => 'required|string',
            ]);
            if ($validated['branch'] === "update") {
                $skills = Skill::all();
                $sword = Sword::find($validated['sword_id']);
                return view('sword.update', compact('sword','skills'));
            } else {
                $skills = Skill::all();
                $sword = Sword::find($validated['sword_id']);
            return view('sword.delete', compact('sword','skills'));
            }
        }
        public function update(Request $request)
        {
            $validated = $request->validate([
                'id'=>'required|integer',
                'name' => 'required|string',
                'skill_z_id' => 'required|integer',
                'skill_z_mastery'=>'required|integer|max:600',
                'skill_x_id' => 'required|integer',
                'skill_x_mastery'=>'required|integer|max:600',
                'rarity'=>'required|string',
                'howtogetit'=>'required|string',
            ]);
            $swords = Sword::find($validated['id']);
            $swords->update($validated);
    
            return view('/admin.index')->with('message', '更新が完了しました。');
        }
    
        public function destroy(Sword $swords ,Request $request)
        {
            $swords=Sword::find($request->id);
            $swords->delete();
            return view('/admin.index');
        }
}
