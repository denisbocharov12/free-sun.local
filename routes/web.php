<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\IndexController;
use App\Http\Controllers\FrontEnd\PagesController;
use App\Http\Controllers\Auth\AuthLoginController;
use App\Http\Controllers\FrontEnd\Projects\SingleProjectController;
use App\Http\Controllers\FrontEnd\Projects\CatalogProjectController;
use App\Http\Controllers\BackEnd\Dashboard\DashBoardController;
use App\Http\Controllers\BackEnd\Projects\AdminProjectsController;
use App\Http\Controllers\FrontEnd\Contacts\ContactsController;
use App\Http\Controllers\BackEnd\Contacts\AdminContactsController;
use App\Http\Controllers\BackEnd\Categories\AdminCategoryController;
use App\Http\Controllers\FrontEnd\Offers\OffersController;
use App\Http\Controllers\FrontEnd\Calculator\CalculatorController;
use App\Http\Controllers\BackEnd\Calculator\AdminCalculatorController;
use App\Http\Controllers\BackEnd\Offers\AdminOffersController;
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

Route::group(['prefix' => 'admin'], function () {

    Auth::routes(['register' => false]);

});

Route::group(['middleware'=> 'auth', 'as' => 'admin.'], function (){
    Route::get('/dashboard',[DashBoardController::class, 'index'])->name('dashboard');

    Route::resource('/cases', AdminProjectsController::class);
    Route::post('cases_status', [AdminProjectsController::class, 'projectStatus'])->name('cases.status');
    Route::post('cases_delete', [AdminProjectsController::class, 'projectDelete'])->name('cases.delete');
    Route::post('delete_project_media',[AdminProjectsController::class, 'deleteProjectMedia'])->name('cases.delete-media');

    Route::resource('categories', AdminCategoryController::class);
    Route::post('categories_delete', [AdminCategoryController::class, 'categoriesDelete'])->name('categories.delete');

    Route::get('calculate', [AdminCalculatorController::class, 'index'])->name('calculate.index');
    Route::get('calculate/{model}/view', [AdminCalculatorController::class, 'view'])->name('calculate.view');
    Route::post('calculate_delete', [AdminCalculatorController::class, 'calculateDelete'])->name('calculate.delete');

    Route::get('contact', [AdminContactsController::class, 'index'])->name('contact.index');
    Route::get('contact/{model}/view', [AdminContactsController::class, 'view'])->name('contact.view');
    Route::post('contacts_status', [AdminContactsController::class, 'contactStatus'])->name('contact.status');
    Route::post('contacts_delete', [AdminContactsController::class, 'contactDelete'])->name('contact.delete');

    Route::get('offers', [AdminOffersController::class, 'index'])->name('offer.index');
    Route::get('offers/{model}/view', [AdminOffersController::class, 'view'])->name('offer.view');
    Route::post('offers_delete', [AdminOffersController::class, 'offersDelete'])->name('offer.delete');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('about-panels', [PagesController::class, 'aboutPanels'])->name('about-panels');

Route::get('calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('calculator_change', [CalculatorController::class, 'calculatorChange'])->name('calculator.change');
Route::post('calculator_offer', [CalculatorController::class, 'calculatorCreateOffer'])->name('calculator.offer');

Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about-us');

Route::get('projects',[CatalogProjectController::class, 'index'])->name('catalog');
Route::get('projects/category/{id}',[CatalogProjectController::class, 'category'])->name('catalog.category');
Route::get('project/{model}',[SingleProjectController::class, 'index'])->name('project');

Route::get('contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('contacts-form', [ContactsController::class, 'store'])->name('contacts.store');

Route::post('offer', [OffersController::class, 'store'])->name('offer.store');

Route::get('blog', [PagesController::class, 'blog'])->name('blog');
