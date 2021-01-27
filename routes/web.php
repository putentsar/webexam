<?php
Route::resource('admin/users', 'UserController');
Route::resource('admin/categories', 'CategoryController');
Route::resource('admin/dishes', 'DishController');
Route::resource('admin/reviews', 'ReviewController');
Route::resource('admin/products', 'ProductController');
Route::resource('admin/dish_product', 'DishProductController');
Auth::routes();

Route::group([
'middleware' => 'auth',
], 
function(){
       Route::group(['middleware' => 'is_admin'], function (){
	 Route::get('/admin', 'MainController@admin');
});

});
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/', 'MainController@home');
 Route::get('/categories', 'MainController@categories');
  Route::get('/{category}', 'MainController@category');
  Route::get('/{categ}/{product}', 'MainController@product');
  Route::post('/{categ}/{product}/comment/', 'MainController@review');
  Route::get('/categories', 'MainController@categories');
