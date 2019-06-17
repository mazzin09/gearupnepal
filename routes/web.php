<?php

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

Route::resource('category','CategoriesController');
Route::resource('subcategory','SubcategoriesController');
Route::resource('childsubcategory','ChildsubcategoriesController');
Route::resource('color','ColorsController');
Route::resource('purchase-report','PurchasereportsController');
Route::resource('purchase','PurchasesController');
Route::resource('sale-report','SalereportsController');
Route::resource('sale','SalesController');
Route::resource('size','SizesController');
Route::resource('stock-report','StockreportsController');
Route::resource('vendor','VendorsController');
