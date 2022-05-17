<?php
use App\Models\Landowner;
use App\Models\LAuser;
use App\Http\Controllers\LandownerController;
use App\Http\Controllers\LAuserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Landowner/register', [LandownerController::class, 'register'])->name('Landowner/register');
Route::post('/Landowner/register', [LandownerController::class, 'store'])->name('Landowner/register');
Route::get('/Landowner/get_all', [LandownerController::class, 'get_all'])->name('Landowner/get_all');
Route::get('/LAuser/get_all', [LAuserController::class, 'get_all'])->name('LAuser/get_all');
Route::get('/Landowner/edit/{id}', [LandownerController::class, 'edit']);
Route::post('/Landowner/update',[LandownerController::class,'update'])->name('Landowner/update');
Route::get('/Landowner/delete/{id}', [LandownerController::class, 'delete']);
Route::get('/Landowner/search/{id}', [LandownerController::class, 'get_by_id']);
Route::get('/LAuser/search/{id}', [LAuserController::class, 'get_by_id']);
Route::get('/LAuser/register', [LAuserController::class, 'register'])->name('LAuser/register');
Route::post('/LAuser/register', [LAuserController::class, 'store'])->name('LAuser/register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
