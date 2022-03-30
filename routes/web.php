<?php

use App\Http\Conntrollers\FormsController;
use App\Http\Livewire\FormElements;
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

Route::post('articles/create', [FormsController::class, 'createArticle']);
Route::post('file/download', [FormsController::class, 'downloadFile']);

Route::get('/', function () {
    return view('welcome');
});
