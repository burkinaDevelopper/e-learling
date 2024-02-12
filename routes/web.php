<?php

use App\Http\Controllers\{
    ProfileController,
    HomeController,
    SubscriptionController,
    FormationController,
    ContactController,
    UserController,
    AdminController,
};
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeController::class)->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//soucription
Route::post('subscription',[SubscriptionController::class,'store'])->name('subscription.store');
Route::get('unsubscribe/{token}',[SubscriptionController::class,'delete'])->name('unsubscribe.delete');
Route::get('formation',[FormationController::class,'formation'])->name('formation');
Route::get('contact',[ContactController::class,'contact'])->name('contact');
Route::post('send-mail',[ContactController::class,'sendMailQuestion'])->name('mail.post');
Route::get('cours',[UserController::class,'index'])->name('user.cours');
Route::post('cours',[UserController::class,'store'])->name('user.post');
Route::get('admin',[AdminController::class,'index'])->name('admin.cours')->middleware('admin');

