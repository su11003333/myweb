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




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/todos',[

    'uses'=>'TodosController@index'

]);

Route::post('/create/todo',[

    'uses'=>'TodosController@store'

]);

Route::delete('/todo/delete/{id}',[

    'uses'=>'TodosController@destroy'

]);

Route::get('/show/{id}',[

    'uses'=>'TodosController@show',
    'as'=>'todo.show'

]);

Route::patch('/todo/update/{id}',[

   'uses'=>'TodosController@update',
    'as'=>'todo.update'

]);

Route::get('/todo/comlete/{id}',[

    'uses'=>'TodosController@complete',
    'as'=>'todo.complete'

]);

Route::group(['middleware'=>'admin'], function(){



        Route::resource ('/admin/users','AdminUsersController');

        Route::resource('/admin/posts','AdminPostsController');

        Route::resource('/admin/categories', 'AdminCategoriesController');

        Route::resource('/admin/categories/subcategories','AdminSubcategoriesController');

});
