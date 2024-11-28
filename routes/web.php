<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\GunController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SwordController;
use App\Http\Controllers\FightingStyleController;

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
Route::get('skill',[SkillController::class,'index']);
Route::get('skill/create',[SkillController::class,"create"]);
Route::post('skill', [SkillController::class,'store'])->name('skill.store');

Route::get('fightingstyle',[FightingStyleController::class,'index']);
Route::get('fightingstyle/create',[FightingStyleController::class,"create"]);
Route::post('fightingstyle', [FightingStyleController::class,'store'])->name('fightingstyle.store');

Route::get('sword',[SwordController::class,'index']);
Route::get('sword/create',[SwordController::class,'create']);
Route::post('sword',[SwordController::class,'store'])->name('sword.store');

Route::get('gun',[GunController::class,'index']);
Route::get('gun/create',[GunController::class,'create']);
Route::post('gun',[GunController::class,'store'])->name('gun.store');

Route::get('fruit',[FruitController::class,'index']);
Route::get('fruit/create',[FruitController::class,'create']);
Route::post('fruit',[FruitController::class,'store'])->name('fruit.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
