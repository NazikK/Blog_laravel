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



// Route::get('/user/{id}/{name}',function($id,$name){
//     return 'This user id'.$id.'this name'.$name;
// });


Route::get('/', 'PagesController@index'
);
Route::get('/about', 'PagesController@about'
);
Route::get('/products', 'PagesController@products'
);

Route::resource('posts', 'PostsController');

// Route::get('/index',function(){
//     return view('pages.index');
// });

// Route::get('/about',function(){
//     return view('pages.about');
// });

// Route::get('/services',function(){
//     return view('pages.services');
// });



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
