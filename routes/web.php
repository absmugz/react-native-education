<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Tutorial;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/category/{category}', function (Category $category) {
    return view('category', [
        'category' => $category,
        'tutorials' => $category->tutorials
    ]);
});

Route::get('/tutorial/{tutorial}', function (Tutorial $tutorial) {
    // dd($tutorial->videos->count();
    return view('tutorial', [
        'tutorial' => $tutorial,
        'videos' => $tutorial->videos
    ]);
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

