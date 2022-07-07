<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\IndexController;
use App\Http\Controllers\FrontEnd\PagesController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('about-panels', [PagesController::class, 'aboutPanels'])->name('about-panels');
Route::get('calculator', [PagesController::class, 'calculator'])->name('calculator');
Route::get('our-company', [PagesController::class, 'ourCompany'])->name('our-company');
Route::get('our-projects', [PagesController::class, 'ourProjects'])->name('our-projects');
