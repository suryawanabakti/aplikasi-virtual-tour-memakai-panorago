<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteProfileController;
use App\Http\Controllers\WisataController;
use App\Models\User;
use App\Models\WebsiteProfile;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    $wisatas = Wisata::orderBy('created_at', 'desc')->get();
    return view('welcome', compact('wisatas'));
});

Route::get('/destination/{wisata}', function (Wisata $wisata) {
    return view('welcome', compact('wisata'));
});

Route::get('/test', function (Request $request) {
    return json_decode(Http::get("http://starter-app-blade.test/word/?word=$request->word"));
});

Route::get('/dashboard', function () {
    $countWisata = Wisata::count();
    $countAdmin = User::role('Admin')->count();
    return view('admin.dashboard', compact('countWisata', 'countAdmin'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{user}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/{user}/delete', [AdminController::class, 'destroy'])->name('admin.destroy');

Route::get('/wisata', [WisataController::class, 'index'])->name('wisata.index');
Route::get('/wisata/create', [WisataController::class, 'create'])->name('wisata.create');
Route::post('/wisata', [WisataController::class, 'store'])->name('wisata.store');
Route::get('/wisata/{wisata}/edit', [WisataController::class, 'edit'])->name('wisata.edit');
Route::put('/wisata/{wisata}', [WisataController::class, 'update'])->name('wisata.update');
Route::get('/wisata/{wisata}/delete', [WisataController::class, 'destroy'])->name('wisata.destroy');

Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
Route::put('/setting', [SettingController::class, 'update'])->name('setting.update');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
