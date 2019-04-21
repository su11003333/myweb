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

Route::get('/aboutme',['as'=>'home.aboutme','uses'=>'welcomeController@aboutme'] );

Route::get('/aboutweb',['as'=>'home.aboutweb','uses'=>'welcomeController@aboutweb'] );

Route::get('/',['as'=>'/','uses'=>'welcomeController@index']);

Route::get('/post/{id}',['as'=>'home.post','uses'=>'AdminPostsController@post']);

Route::get('/posts',['as'=>'home.posts','uses'=>'AdminPostsController@posts']);

Route::get('/works',['as'=>'home.works','uses'=>'AdminWorksController@works']);

Route::get('/work/{id}',['as'=>'home.work','uses'=>'AdminWorksController@work_single']);

Route::get('/works/workscategory/{id}',['as'=>'search.workscategory','uses'=>'AdminWorksController@search_workscategory']);

Route::get('/ajax-work-template/{id}',['as'=>'home.ajax-work','uses'=>'AdminWorksController@ajax_work']);

Route::post('/get_in_touch',['as'=>'get_in_touch','uses'=>'welcomeController@store']);

Route::get('/search',['as'=>'search','uses'=>'SearchController@search']);

Route::get('/search/category/{id}',['as'=>'search.category','uses'=>'SearchController@search_category']);

Route::get('/search/tag/{id}',['as'=>'search.tag','uses'=>'SearchController@search_tag']);

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

        Route::resource('/admin/works','AdminWorksController');

        Route::resource('/admin/workstags', 'AdminWorkstagsController');

        Route::resource('/admin/workscategories', 'AdminWorkscategoriesController');

        Route::resource('/admin/categories', 'AdminCategoriesController');

        Route::resource('/admin/categories/subcategories','AdminSubcategoriesController');

        Route::resource('/admin/tags','AdminTagsController');

        Route::get('/admin/posts/feature/{id}',['uses'=>'AdminPostsController@deletefeature','as'=>'posts.feature.delete']);

        Route::get('/admin/works/worksfeature/{id}',['uses'=>'AdminWorksController@deletefeature','as'=>'works.feature.delete']);

        Route::patch('/admin/works/is_active/{id}',['uses'=>'AdminWorksController@active','as'=>'works.is_active.active']);

        Route::patch('/admin/posts/is_active/{id}',['uses'=>'AdminPostsController@active','as'=>'post.is_active.active']);

        Route::resource('/admin/comments','PostCommentsController');

        Route::resource('/admin/comment/replies','CommentRepliesController');

        Route::resource('/admin/playground','AdminPlaygroundController');


});

Route::group(['middleware'=>'auth'], function(){

   Route::post('comment/reply', 'CommentRepliesController@createReply');

});
