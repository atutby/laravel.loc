<?php

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

Route::get('/foo', function () {
	return 'Hello, world!';
});

Route::get( 'home', function() {
	$res = 2 + 3;
	$name = 'John';
	// return view('home')->with('var', $res);
	// return view('home', ['var' => $res, 'name' => $name]);
	return view('home', compact('res', 'name'));
});

Route::get( 'about', function() {
	return '<h1>About Page</h1>';
});

/*Route::get('contact', function() {
	return view('contact');
});

Route::post('send-email', function() {
	if(!empty($_POST)){
		dump($_POST);
	}
	return 'Вернулась POST ом :) Send Email';
});*/

// сделаем доступной страницу в по двум методам
Route::match(['post', 'get'], '/contact', function() {
	if(!empty($_POST)){
		dump($_POST);
	}
	return view('contact');
})->name('contact'); // позволяет менять action формы; именованная маршрутизация


// просто станица
Route::view('/test', 'test', ['test' => 'Test Data']);

// Route::redirect('/about', '/contact');
// Route::redirect('/about', '/contact', 301);
Route::permanentRedirect('/about', '/contact');

/*
Route::get('/post/{id}/{slug}', function($id, $slug) {
	return "Post $id | $slug";
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);*/

/*Route::get('/post/{id}/{slug}', function($id, $slug) {
	return "Post $id | $slug";
});*/


// Тема: группировка правил
Route::prefix('admin')->group(function(){

	Route::get('/posts', function() {
		return "Posts List";
	});
	
	Route::get('/posts/create', function() {
		return "Post Create";
	});
	
	Route::get('/post/{id}/edit', function($id) {
		return "Edit Post $id";
	});

});

