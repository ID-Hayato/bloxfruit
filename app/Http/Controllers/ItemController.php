<?php

namespace App\Http\Controllers;

use App\Models\FightingStyle;
use App\Models\Fruit;
use App\Models\Gun;
use App\Models\Sword;
use GMP;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $fightings = FightingStyle::all();
        $fruits = Fruit::all();
        $swords = Sword::all();
        $guns = Gun::all();
        return view('item.index',compact('fightings','fruits','swords','guns'));
       
    }

}
