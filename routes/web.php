<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnotherFruitSkillController;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\GunController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SwordController;
use App\Http\Controllers\FightingStyleController;
use App\Http\Controllers\ItemController;
use App\Models\AnotherFruitSkill;
use App\Models\Fruit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('index');
});
Route::get('admin', [AdminController::class, 'index']);

Route::get('skill', [SkillController::class, 'index']);
Route::get('skill/create', [SkillController::class, "create"]);
Route::post('skill.store', [SkillController::class, 'store'])->name('skill.store');
Route::get('skill/argument', [SkillController::class, "argument"]);
Route::post('skill.branch', [SkillController::class, "branch"])->name('skill.branch');
Route::post('skill/update', [SkillController::class, "update"])->name('skill.update');
Route::post('skill/{post}', [SkillController::class, "destroy"])->name('skill.destroy');

Route::get('fightingstyle', [FightingStyleController::class, 'index']);
Route::get('fightingstyle/create', [FightingStyleController::class, "create"]);
Route::post('fightingstyle', [FightingStyleController::class, 'store'])->name('fightingstyle.store');
Route::get('fightingstyle/argument', [FightingStyleController::class, "argument"]);
Route::post('fightingstyle.branch', [FightingStyleController::class, "branch"])->name('fightingstyle.branch');
Route::post('fightingstyle/update', [FightingStyleController::class, "update"])->name('fightingstyle.update');
Route::post('fightingstyle/{post}', [FightingStyleController::class, "destroy"])->name('fightingstyle.destroy');


Route::get('sword', [SwordController::class, 'index']);
Route::get('sword/create', [SwordController::class, 'create']);
Route::post('sword', [SwordController::class, 'store'])->name('sword.store');
Route::get('sword/argument', [SwordController::class, "argument"]);
Route::post('sword.branch', [SwordController::class, "branch"])->name('sword.branch');
Route::post('sword/update', [SwordController::class, "update"])->name('sword.update');
Route::post('sword/{post}', [SwordController::class, "destroy"])->name('sword.destroy');


Route::get('gun', [GunController::class, 'index']);
Route::get('gun/create', [GunController::class, 'create']);
Route::post('gun', [GunController::class, 'store'])->name('gun.store');
Route::get('gun/argument', [GunController::class, "argument"]);
Route::post('gun.branch', [GunController::class, "branch"])->name('gun.branch');
Route::post('gun/update', [GunController::class, "update"])->name('gun.update');
Route::post('gun/{post}', [GunController::class, "destroy"])->name('gun.destroy');
 

Route::get('fruit', [FruitController::class, 'index']);
Route::get('fruit/create', [FruitController::class, 'create']);
Route::post('fruit', [FruitController::class, 'store'])->name('fruit.store');
Route::get('fruit/choice', function () {return view('fruit.choice');});
Route::get('fruit/argument', [FruitController::class, "argument"]);
Route::post('fruit.branch', [FruitController::class, "branch"])->name('fruit.branch');
Route::post('fruit/update', [FruitController::class, "update"])->name('fruit.update');
Route::post('fruit/{post}', [FruitController::class, "destroy"])->name('fruit.destroy');

Route::post('another_fruit_skill/create', [FruitController::class, 'jump'])->name('fruit.jump');
Route::get('another_fruit_skill', [AnotherFruitSkillController::class, 'index']);
Route::get('another_fruit_skill/create', [AnotherFruitSkillController::class, 'create']);
Route::post('another_fruit_skill', [AnotherFruitSkillController::class, 'store'])->name('another_fruit_skill.store');
Route::post('another_fruit_skill/update', [AnotherFruitSkillController::class, "update"])->name('another_fruit_skill.update');
Route::post('another_fruit_skill/{post}', [AnotherFruitSkillController::class, "destroy"])->name('another_fruit_skill.destroy');

Route::get('item',[ItemController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
