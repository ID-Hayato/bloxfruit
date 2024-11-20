<?php

namespace App\Http\Controllers;

use App\Models\Sword;
use Illuminate\Http\Request;

class SwordController extends Controller
{
    public function index() {
        return view('sword.index');
    }
    
    public function create(){
        return view('sword.create');
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
        
        
            $post=Sword::create($validated);
        
            return back()->with('message', '保存しました');
        }
        
        
}
