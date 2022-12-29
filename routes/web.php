<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/',[HomeController::class, 'index'])->name('landingpage');
Route::get('/aboutus',[HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus',[HomeController::class, 'contactus'])->name('contactus');
Route::get('/wisata',[HomeController::class, 'Wisata'])->name('wisata');
Route::get('/artikel',[HomeController::class, 'artikel'])->name('artikel');


Route::get('/admin', function () {
    return view('backpage.admin');
})->middleware(['CheckClass:admin'])->name('admin');
Route::get('/tabledata', function () {
    return view('backpage.tabledata');
})->middleware(['CheckClass:admin'])->name('tabledata');
Route::get('/formwisata', function () {
    return view('backpage.formwisata');
})->middleware(['CheckClass:admin'])->name('formwisata');
Route::get('/formtiket', function () {
    return view('backpage.formtiket');
})->middleware(['CheckClass:admin'])->name('formtiket');
Route::get('/calendar', function () {
    return view('backpage.calendar');
})->middleware(['CheckClass:admin'])->name('calendar');


Route::get('/orderpage',[HomeController::class, 'formticket'])->name('orderpage');
Route::get('/ticketpage', [HomeController::class, 'Tiket'])->middleware(['auth'])->name('Tiket');


Route::get('admin', function () { return view('backpage.admin'); })->middleware(['auth'])->middleware('CheckClass:admin');
Route::get('user', function () { return view('frontpage.landingpage'); })->middleware(['CheckClass:user,admin']);

require __DIR__.'/auth.php';
