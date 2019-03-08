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

//Backend
Route::group(['namespace' => 'Backend', 'prefix' => '/@admin@'], function () {
    Route::get('/', 'BackendController@index');


    //Admin
    Route::get('/addAdmin','BackendController@addAdmin')->name('add-admin');
    Route::post('/addAdmin/action','BackendController@addAdminAction')->name('admin-action');
    Route::get('/manageAdmin','BackendController@manageAdmin')->name('manage-admin');




    //category
    Route::get('/addCategory', 'BackendController@addCategory')->name('category-name');
    Route::post('/addCategory/action', 'BackendController@categoryAction')->name('addCategory-Action');
    Route::get('/manageCategory', 'BackendController@manageCategory')->name('category-manage');
    Route::get('/manageCategory/deleteCategory/{id}', 'BackendController@deleteCategory')->name('delete-category');
    Route::get('/manageCategory/updateCategory/{id}', 'BackendController@updateCategory');
    Route::post('/manageCategory/updateCategory/updateCategoryAction', 'BackendController@updateCategoryAction')->name('updateCategory-Action');


    //stocks
    Route::get('/addStock', 'BackendController@addStock')->name('stock-add');
    Route::post('/addStock/action', 'BackendController@stockAction')->name('addStock-action');
    Route::get('/manageStock', 'BackendController@manageStock')->name('stock-manage');
    Route::get('/manageStock/deleteStock/{id}', 'BackendController@deleteStock')->name('delete-Stock');
    Route::post('/manageStock/updateStock','BackendController@updateStock')->name('update-stock');



});
//ajax
Route::get('/api/updateStock','AjaxController@updateStock');

//Frontend
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'frontendController@index');
    Route::get('page/{page?}/{id?}', 'frontendController@process');

    Route::get('/content/{id?}','frontendController@contentProcess');
});