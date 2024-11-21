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
        
        
}
